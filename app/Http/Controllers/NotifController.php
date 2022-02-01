<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use Exception;
use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function index()
    {
        $notifs = Notif::all();
        if(auth()->user()->auth == 'Panitia'){
            return view('panitia.notifhandler', ['notifs' => $notifs->reverse()]);
        } else {
            return redirect('/')->with('forbidden', 'maaf terlarang');
        }
    }

    public function indexNotif()
    {
        $notifs = Notif::all();
        return view('Layout.menu-bell', ['notifs' => $notifs->reverse()]);
    }

    public function createNotif(Request $request)
    {
        try {
            if($request->links == ''){
                $links = '#';
            } else {
                $links = $request->links;
            }
            Notif::create([
                'title' => $request->title,
                'subject' => $request->subject,
                'links' => $links,
                'icons' => $request->icons,
            ]);
            return back()->with('sukses', 'notifikasi telah dibuat');
        } catch (Exception $e) {
            dd($e);
            return back()->with('gagal', 'notifikasi gagal dibuat');
        }
    }

    public function editNotif(Request $request)
    {
        try {
            if($request->links == ''){
                $links = '#';
            } else {
                $links = $request->links;
            }
            Notif::where('id', $request->id)->update([
                'title' => $request->title,
                'subject' => $request->subject,
                'links' => $links,
                'icons' => $request->icons,
            ]);
            return back()->with('sukses', 'notifikasi telah dibuat');
        } catch (Exception $e) {
            dd($e);
            return back()->with('gagal', 'notifikasi gagal dibuat');
        }
    }

    public function deleteNotif($id)
    {
        Notif::where('id', $id)->delete();
        return back()->with('sukses', 'notifikasi telah dihapus');
    }
}
