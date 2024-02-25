<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Authentication\UsersModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class UserUpdateController extends Controller
{
    public function updateUser(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'profileNickname' => 'required|min:3|max:20',
            'profileUsername' => 'required|min:6',
            'profileEmail' => 'required|email', // Make sure email is unique
            'profileCurrentPassword' => '', // Minimum password length of 6 characters
            'profileNewPassword' => '', // Minimum password length of 6 characters
            'profileNewPasswordConfirm' => 'same:profileNewPassword', // Password confirmation field should match the password
        ]);

        // Get user ID from Session or Cookie
        $userId = Session::get('userid') ?? Cookie::get('userid');

        // Check if User is present in database
        if (isset($userId)) {
            // Check if the Password field has data (if true then include password to update else dont)
            if (isset($validatedData['profileCurrentPassword']) && isset($validatedData['profileNewPassword']) && isset($validatedData['profileNewPasswordConfirm'])) {
                // Check if profileCurrentPassword is correct
                $user = UsersModel::where('uniqueid', $userId)->first();
                if (decrypt($user->password) == $validatedData['profileCurrentPassword']) {
                    UsersModel::where('uniqueid', $userId)
                        ->update([
                            'nickname' => $validatedData['profileNickname'],
                            'username' => $validatedData['profileUsername'],
                            'email' => $validatedData['profileEmail'],
                            'password' => encrypt($validatedData['profileNewPassword']),
                        ]);     
                } else {
                    return response()->json([
                        'error' => 'incorrect_current_password',
                    ], 422);
                }
            } else {
                UsersModel::where('uniqueid', $userId)
                    ->update([
                        'nickname' => $validatedData['profileNickname'],
                        'username' => $validatedData['profileUsername'],
                        'email' => $validatedData['profileEmail'],
                    ]);
            }
            return response()->json([
                'message' => "User profile updated successfully.",
            ], 200); 
        } else {
            return response()->json([
                'error' => 'user_update_failed',
            ], 422);
        }
    }
}
