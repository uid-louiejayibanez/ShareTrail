<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Authentication\RegisterController;
use App\Http\Controllers\Authentication\ForgotPasswordController;
use App\Http\Controllers\Authentication\LogoutController;
use App\Http\Controllers\Authentication\CheckUserController;
// ==============================================================
use App\Http\Controllers\Dashboard\OnboardingController;
use App\Http\Controllers\Dashboard\UserUpdateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main Layout File
Route::get('/', [CheckUserController::class, 'checkUser']);

// Login-Register-ForgotPassword-Logout Authentication
Route::post('/loginUser', [LoginController::class, 'loginUser'])->middleware('throttle:preventMassiveRequest')->name('loginUser');
Route::post('/registerUser', [RegisterController::class, 'registerUser'])->middleware('throttle:preventMassiveRequest')->name('registerUser');
Route::post('/forgotPasswordUser', [ForgotPasswordController::class, 'forgotPasswordUser'])->middleware('throttle:preventMassiveRequest')->name('forgotPasswordUser');
Route::post('/logoutUser', [LogoutController::class, 'logoutUser'])->middleware('throttle:preventMassiveRequest')->name('logoutUser');

// Onboarding 
Route::post('/updateNickname', [OnboardingController::class, 'updateNickname'])->middleware('throttle:preventMassiveRequest')->name('updateNickname');

// User
Route::post('/updateUser', [UserUpdateController::class, 'updateUser'])->middleware('throttle:preventMassiveRequest')->name('updateUser');