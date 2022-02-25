<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use Exception;
use Illuminate\Http\Request;

class RadioController extends Controller
{
    public function reqindex()
    {
        $requests = Radio::all();
        return view('panitia.radioreqs', ['reqs' => $requests]);
    }

    public function submitreqs(Request $req)
    {
        #ini fungsi untuk memasukkan form request ke database
        // try {
        //     // if ($req->nama || $req->asal || $req->request || $req->pesan == '') {
        //     //     return back()->with('gagal', 'Are, gagal mengirim, coba cek formnya :(')->withInput();
        //     // } else {
        //     //     Radio::create([
        //     //         'nama' => $req->nama,
        //     //         'asal' => $req->asal,
        //     //         'request' => $req->request,
        //     //         'pesan' => $req->pesan
        //     //     ]);
        //     //     return back()->with('sukses', 'Yatta, Masukmi Request ta` :)');
        //     // }
        //     Radio::create([
        //         'nama' => $req->nama,
        //         'asal' => $req->asal,
        //         'request' => $req->request,
        //         'pesan' => $req->pesan
        //     ]);
        //     return back()->with('sukses', 'Yatta, Masukmi Request ta` :)');

        // } catch (Exception $e) {
        //     dd($e);
        // }

        Radio::create([
            'nama' => $req->get('nama'),
            'asal' => $req->get('asal'),
            'request' => $req->get('request'),
            'pesan' => $req->get('pesan')
        ]);
        return back()->with('sukses', 'Yatta, Masukmi Request ta` :)');


    }
}
