<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Authentication\UsersModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class CheckUserController extends Controller
{
    public function checkUser(Request $request) 
    {
        $cookie_rememberMe = Cookie::get('remember_me');
        $cookie_userid = Cookie::get('userid');
        $session_userid = Session::get('userid');
        $checkpoint = false;
        $userDashboardID = "";

        if (isset($cookie_rememberMe)) {
            $checkUserID = UsersModel::where('uniqueid', $cookie_userid)->first();
            if (isset($checkUserID)) {
                $userDashboardID = "#".strtoupper(substr($checkUserID->uniqueid, 3, 2).substr($checkUserID->uniqueid, 14, 2).substr($checkUserID->uniqueid, 20, 2));
                $checkpoint = true;
            } else {
                $checkpoint = false;
            }
        } else {
            $checkUserID = UsersModel::where('uniqueid', $session_userid)->first();
            if (isset($checkUserID)) {
                $userDashboardID = "#".strtoupper(substr($checkUserID->uniqueid, 3, 2).substr($checkUserID->uniqueid, 14, 2).substr($checkUserID->uniqueid, 20, 2));
                $checkpoint = true;
            } else {
                $checkpoint = false;
            }
        }

        return view('app', compact('checkpoint', 'cookie_userid', 'session_userid', 'checkUserID', 'userDashboardID'));
    }
}
