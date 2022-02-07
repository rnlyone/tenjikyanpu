<?php

use App\Http\Controllers\Auth\AbsenController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\NotifController;
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
    Route::get('login', function () {return view('login');})->name('login');
    Route::post('login', [UserController::class, 'login']);
});

Route::group(['middleware'=>['auth']], function(){
    Route::get('logout', [UserController::class, 'logout']);
    Route::get('registqr/{id}', [AbsenController::class, 'registqr']);

    Route::get('/notifhandler', [NotifController::class, 'index']);
    Route::post('notifhandler/create', [NotifController::class, 'createNotif']);
    Route::get('notifhandler/delete/{id}', [NotifController::class, 'deleteNotif']);
    Route::post('notifhandler/edit', [NotifController::class, 'editNotif']);

    Route::get('user', [UserController::class, 'indexlist']);
    Route::get('user/delete/{id}', [UserController::class, 'deleteUser']);
    Route::post('user/create', [UserController::class, 'createUser']);
    Route::post('user/edit', [UserController::class, 'editUser']);
});

Route::get('profile', [UserController::class, 'profileindex']);


Route::get('/', function () {return view('welcome', ['home' => 'active-nav']);});

Route::get('/radio', function () {return view('radio', ['radio' => 'active-nav']);});

Route::get('/notifications', function () {return view('notifications', ['notifications' => 'active-nav']);});
Route::get('/topnotif', [NotifController::class, 'indexNotif']);

Route::get('/schedule', function () {return view('Layout.comingsoon', ['schedule' => 'active-nav']);});

Route::get('/media', function () {return view('media', ['media' => 'active-nav']);});

Route::get('/sidebar', function () {return view('Layout.main-menu');});

Route::get('/notforpc', function () {return view('Layout.notforpc');});

Route::get('/registlist', function () {return view('panitia.registlist');});

Route::get('/cc', function () {return view('Lomba.cc');});

Route::get('/seiyuu', function () {return view('Lomba.seiyuu');});

