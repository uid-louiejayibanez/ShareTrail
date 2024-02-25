<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Authentication\UsersModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class OnboardingController extends Controller
{
    public function updateNickname(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'onboardingNickname' => 'required|min:3|max:20',
        ]);

        // Identify the user ID from Session or Cookie
        $userId = Session::get('userid') ?? Cookie::get('userid');

        if (isset($userId)) {
            // Update the nickname in the database
            UsersModel::where('uniqueid', $userId)
                ->update(['nickname' => $validatedData['onboardingNickname']]);

            return response()->json([
                'message' => "Nickname updated successfully.",
            ], 200);
        } else {
            return response()->json([
                'error' => 'nickname_update_failed',
            ], 422);
        }
    }
}


