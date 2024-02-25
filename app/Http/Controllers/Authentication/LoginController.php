<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Authentication\UsersModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function loginUser(Request $request)
    {
         // Validate form data (you can use Laravel's validation rules)
         $validatedData = $request->validate([
            'loginUsername' => 'required',
            'loginPassword' => 'required',
        ]);

        // Check if the username already exist
        $checkUsername = UsersModel::where('username', $validatedData['loginUsername'])->first();

        if (isset($checkUsername)) {
            if (decrypt($checkUsername->password) == $validatedData['loginPassword']) {
                if ($request['loginRemember'] == 'true') {
                    Cookie::queue(Cookie::make('remember_me', 'true')); 
                    Cookie::queue(Cookie::make('userid', $checkUsername->uniqueid)); 
                    Session::forget('userid');
                } else {
                    Cookie::queue(Cookie::forget('remember_me')); 
                    Cookie::queue(Cookie::forget('userid')); 
                    Session::put('userid', $checkUsername->uniqueid);
                }

                return response()->json([
                    'message' => "Logged-in successfully. Redirecting to Dashboard...",
                ], 200);
            } else {
                return response()->json([
                    'error' => 'login_failed',
                ], 422);
            }
        } else {
            return response()->json([
                'error' => 'login_failed',
            ], 422);
        }
    }
}
