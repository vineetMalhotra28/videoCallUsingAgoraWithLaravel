<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/joinMeeting/{url?}', [MeetingController::class, 'joinMeeting'])->name('joinMeeting');
Auth::routes();

Route::get('/home', [MeetingController::class, 'meetingUser'])->name('meetingUser');
Route::get('/createMeeting', [MeetingController::class, 'createMeeting'])->name('createMeeting');
Route::post('/saveUserName', [MeetingController::class, 'saveUserName'])->name('saveUserName');
Route::post('/meetingApprove', [MeetingController::class, 'meetingApprove'])->name('meetingApprove');
