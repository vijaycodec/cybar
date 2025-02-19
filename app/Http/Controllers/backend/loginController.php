<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class loginController extends Controller
{
    public function login()
    {
        return view('backend.login');
    }

    // public function loginsave(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email',
    //         'password' => 'required|min:6',
    //     ]);
    
    //     if ($validator->fails()) {
    //         return back()->withErrors($validator)->with('error', 'Please correct the errors and try again.');
    //     }
    
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    //         if (Auth::user()->role == 1) {
    //             session()->flash('success', 'You have logged in successfully!');
    //             return redirect()->route('admin.dashboard');
    //         } else {
    //             Auth::logout();
    //             return redirect()->route('admin.login')->with('error', 'You are not authorized to access this page.');
    //         }
    //     }
    
    //     return back()->with('error', 'These credentials do not match our records.');
    // }
    
        // return view('backend.login');

        public function loginsave(Request $request)
        {
            $maxAttempts = 5; // Max failed attempts before lockout
            $decayMinutes = 1; // Lockout duration in minutes
            $key = 'login_attempts_' . Str::lower($request->email) . '|' . $request->ip(); // Unique key
    
            if (RateLimiter::tooManyAttempts($key, $maxAttempts)) {
    
                $seconds = RateLimiter::availableIn($key); // Get remaining lockout time
    
                $lockoutTime = now()->addSeconds(30); // Lock for 30 seconds
                $request->session()->put('lockout_time', now()->timestamp + 30);
                return back()->with('error', "Too many login attempts. Please try again in $seconds seconds.");
            }
    
            // Validate user input
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            if ($validator->fails()) {
                return back()->withErrors($validator)->with('error', 'Please correct the errors and try again.');
            }
    
            // Attempt login
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                $request->session()->regenerate(); // Prevent session fixation attack
                RateLimiter::clear($key); // Reset failed login attempts
    
                if (Auth::user()->role == 1) { // Check if user is admin
                    session()->flash('success', 'You have logged in successfully!');
                    return redirect()->route('admin.dashboard');
                } else {
                    Auth::logout();
                    return redirect()->route('admin.login')->with('error', 'You are not authorized to access this page.');
                }
            }

            // Log failed attempt
            RateLimiter::hit($key, $decayMinutes * 60); // Lock account for 1 minute after 5 attempts

             // Calculate remaining attempts correctly
               $remainingAttempts = max(0, $maxAttempts - RateLimiter::attempts($key));
               if ($remainingAttempts == 0) {
                $seconds = RateLimiter::availableIn($key); // Get exact remaining lockout time dynamically
                 return back()->with('error', "Too many login attempts. Please try again in $seconds seconds.");
            }
    
            // return back()->with('error', 'Invalid credentials. You have ' . (1 - RateLimiter::attempts($key)) . ' attempts left.');
            return back()->with('error', "Invalid credentials. You have $remainingAttempts attempt left.");

        }
    

    }


