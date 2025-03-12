<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\EnquiryForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Jobs\SendEnquiryMail;

class EnquiryController extends Controller
{
    public function submitEnquiry(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3|max:100', // Name must be between 3-100 characters
            'email' => 'required|email|max:255', // Valid email required
            'phone_no' => 'required|digits:10', // Exactly 10 digits required
            'course' => 'required|max:100', // Max 100 characters
            'message' => 'required|max:500', // Max 500 characters
            'g-recaptcha-response' => 'required|captcha',
        ]);

        // If Validation Fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Save the data using Eloquent ORM
            // Save the data to the database (assuming you have a model)
            $submission = new EnquiryForm();
            $submission->name = $request->name;
            $submission->email = $request->email;
            $submission->phone_no = $request->phone_no;
            $submission->course = $request->course;
            $submission->message = $request->message;
            $submission->country_id = $request->country_id;
            $submission->phone_code = $request->phone_code;
            $submission->country = $request->country;
            $submission->save();

            SendEnquiryMail::dispatch($request->all())->onQueue('emails');

            // Success Response
            return response()->json([
                'success' => true,
                'message' => 'Form submitted successfully!'
            ], 200);


        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
