<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class LogoutController extends Controller
{
    public function logoutUser(Request $request)
    {
        // Delete Cookies and Sessions for Logout Process
        Cookie::queue(Cookie::forget('remember_me')); 
        Cookie::queue(Cookie::forget('userid')); 
        Session::forget('userid');

        return response()->json([
            'message' => "Logged-out successfully. Redirecting to Login UI...",
        ], 200);
    }
}
