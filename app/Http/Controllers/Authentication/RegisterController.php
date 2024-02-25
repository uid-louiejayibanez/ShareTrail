<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Authentication\UsersModel;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function registerUser(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'registerUsername' => 'required|min:6',
            'registerEmail' => 'required|email', 
            'registerPassword' => 'required|min:8', 
            'registerPasswordConfirm' => 'required|same:registerPassword', 
        ]);

        // Check if the username and email already exist
        $checkUsername = UsersModel::where('username', $validatedData['registerUsername'])->first();
        $checkEmail = UsersModel::where('email', $validatedData['registerEmail'])->first();

        if (isset($checkUsername) && isset($checkEmail)) {
            return response()->json([
                'error' => 'username_email_exist',
            ], 422);
        } elseif (isset($checkUsername)) {
            return response()->json([
                'error' => 'username_exist',
            ], 422);
        } elseif (isset($checkEmail)) {
            return response()->json([
                'error' => 'email_exist',
            ], 422);
        } else {
            // If neither username nor email exist, create the user
            $createUser = UsersModel::create([
                'uniqueid' => md5($validatedData['registerUsername'].$validatedData['registerEmail'].$validatedData['registerPassword']),
                'username' => $validatedData['registerUsername'],
                'email' => $validatedData['registerEmail'],
                'password' => encrypt($validatedData['registerPassword']), // Hash the password
            ]);

            return response()->json([
                'message' => "User '$validatedData[registerUsername]' has been registered successfully.",
            ], 200);
        }
    }
}
