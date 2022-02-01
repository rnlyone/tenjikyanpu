<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use Illuminate\Http\Request;
use App\Models\User;

class AbsenController extends Controller
{
    public function registqr($user)
    {
        if (auth()->user()->auth == 'Panitia'){
            Absen::create([
                'user_id' => $user,
            ]);
            return redirect()->intended('/registlist')->with('sukses', 'Sukses Registrasi :)');
        } else {
            return redirect()->intended('/')->with('forbidden', 'Maaf Nda Boleh Akses :(');
        }
    }
}
