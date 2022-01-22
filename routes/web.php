<?php

use App\Http\Controllers\auth\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>['guest']], function(){
    Route::get('/login', function () {return view('login');});
    Route::post('login', [UserController::class, 'login']);
});

Route::group(['middleware'=>['auth']], function(){
    Route::get('logout', [UserController::class, 'logout']);
});

Route::get('profile', [UserController::class, 'profileindex']);


Route::get('/', function () {return view('welcome', ['home' => 'active-nav']);});

Route::get('/radio', function () {return view('radio', ['radio' => 'active-nav']);});

Route::get('/notifications', function () {return view('notifications', ['notifications' => 'active-nav']);});

Route::get('/schedule', function () {return view('schedule', ['schedule' => 'active-nav']);});

Route::get('/live', function () {return view('live', ['live' => 'active-nav']);});

Route::get('/sidebar', function () {return view('Layout.main-menu');});

Route::get('/highlights', function () {return view('Layout.menu-highlights');});

Route::get('/notifications', function () {return view('Layout.menu-bell');});

Route::get('/notforpc', function () {return view('Layout.notforpc');});


