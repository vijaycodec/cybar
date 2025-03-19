<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\JobCareer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class jobCarrerController extends Controller
{
    public function store(Request $request)
    {

        try {
            // Validate input using Validator::make
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|min:3|max:100', // Name must be between 3-100 characters
                'email' => 'required|email|max:255', // Valid email required
                'phone_no' => 'required|digits:10', // Exactly 10 digits required
                'message' => 'required|min:5|max:500', // Min 5, max 500 characters
                // 'g-recaptcha-response' => 'required|captcha'  // Uncomment if using reCAPTCHA
            ]);
    
            // If validation fails, return JSON response
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'errors' => $validator->errors()
                ], 422);
            }
    
            // Save the new comment
            $comment = new JobCareer();
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->phone_no = $request->phone_no;
            $comment->message = $request->message;
            $comment->save();
    
            return response()->json([
                'success' => true,
                'message' => 'Form submitted successfully!'
            ], 200);
    
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again later.'
            ], 500);
        }
    }
    
}
