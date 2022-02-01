<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    public function profileindex()
    {
        if(Auth::check()){
            return view('profile', ['profile' => 'active-nav']);
        }
        return view('login');
    }

    public function indexlist()
    {
        $user = User::all();

        if(auth()->user()->auth == 'Panitia'){
            return view('panitia.userlist', ['user' => $user]);
        } else {
            return redirect('/')->with('forbidden', 'maap');
        }
        return view('login');
    }

    public function deleteUser($id)
    {
        User::where('id', $id)->delete();
        return back()->with('sukses', 'Sukses Menghapus Akun');
    }


    public function login(Request $request)
    {

        $attr = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('username', $request->username)->first();
        if (Auth::attempt($attr)){
            Auth::login($user);
            return redirect()->intended('/')->with('login-sukses', "Irasshaimase :)");
        } else {
            return back()->with('login-gagal', 'Username / Password Salah!')->withInput();
        }
    }

    public function createUser(Request $request)
    {
        try {
            User::create([
                'username' => $request->username,
                'nama'  => $request->nama,
                'auth'  => $request->auth,
                'jc'  => $request->jc,
                'gender'  => $request->gender,
                'password'  => bcrypt($request->password)
            ]);
            return back()->with('sukses', 'Sukses Menambahkan Akun');
        } catch (Exception $e) {
            return back()->with('gagal', 'Akun tidak dibuat')->withInput();
        }
    }

    public function EditUser(Request $req)
    {
        try {
            if($req->password == ''){
                User::where('id', $req->id)->update([
                    'username' => $req->username,
                    'nama'  => $req->nama,
                    'auth'  => $req->auth,
                    'jc'  => $req->jc,
                    'gender'  => $req->gender,
                ]);
                return back()->with('sukses', 'Sukses Mengedit Akun');
            } else {
                User::where('id', $req->id)->update([
                    'username' => $req->username,
                    'nama'  => $req->nama,
                    'auth'  => $req->auth,
                    'jc'  => $req->jc,
                    'gender'  => $req->gender,
                    'password'  => bcrypt($req->password)
                ]);
                return back()->with('sukses', 'Sukses Mengedit Akun & Ganti Password');
            }

        } catch (Exception $e) {
            return back()->with('gagal', 'Akun Gagal Diedit')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
