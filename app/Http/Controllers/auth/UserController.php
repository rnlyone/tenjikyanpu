<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {

        $attr = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('username', $request->username)->first();
        if (Auth::attempt($attr)){
            Auth::login($user);
            return redirect()->intended('/');
        } else {
            return back()->with('error', 'Username / Password Salah!')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
