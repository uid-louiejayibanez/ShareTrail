<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Authentication\UsersModel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function forgotPasswordUser(Request $request)
    {
        // Validate form data (you can use Laravel's validation rules)
        $validatedData = $request->validate([
            'forgotpassEmail' => 'required|email', // Make sure email is unique
        ]);

        $checkEmail = UsersModel::where('email', $validatedData['forgotpassEmail'])->first();
        
        if (isset($checkEmail)) {
            $mailData = [
                'recipient' => $validatedData['forgotpassEmail'],
                'fromEmail' => env('MAIL_FROM_ADDRESS'),
                'fromName' => 'ShareTrail',
                'subject' => 'Request Forgotten Password',
                'forgottenPassword' => decrypt($checkEmail->password),   
            ];

            try {
                Mail::send('template.emailmessage', ['mailData' => $mailData], function ($message) use ($mailData) {
                    $message->from($mailData['fromEmail'], $mailData['fromName'])
                            ->to($mailData['recipient'])
                            ->subject($mailData['subject']);
                });

                return response()->json([
                    'message' => "Requested Password was sent successfully. Kindly check you email",
                ], 200);
            } catch (Exception $e) {
                return response()->json([
                    'error' => 'send_failed',
                ], 422);
            }
        } else {
            return response()->json([
                'error' => 'email_not_exist',
            ], 422);
        }
    }
}
