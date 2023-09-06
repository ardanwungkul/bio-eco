<?php

namespace App\Http\Controllers;

use App\Models\Socmed;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocmedController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $toko = Toko::where('user_id', $user->id)->first();
        $facebook = $request->input('facebook');
        $instagram = $request->input('instagram');
        $youtube = $request->input('youtube');

        if (!empty($facebook)) {
            $socmed = new Socmed();
            $socmed->nama = 'facebook';
            $socmed->gambar = 'facebook.svg';
            $socmed->url = $facebook;
            $socmed->toko_id = $toko->id;
            $socmed->save();
            return redirect()->back()->with(['success' => 'Social Media Berhasil Di Tambahkan']);
        } elseif (!empty($instagram)) {
            $socmed = new Socmed();
            $socmed->nama = 'instagram';
            $socmed->gambar = 'instagram.svg';
            $socmed->url = $instagram;
            $socmed->toko_id = $toko->id;
            $socmed->save();
            return redirect()->back()->with(['success' => 'Social Media Berhasil Di Tambahkan']);
        } elseif (!empty($youtube)) {
            $socmed = new Socmed();
            $socmed->nama = 'youtube';
            $socmed->gambar = 'youtube.svg';
            $socmed->url = $youtube;
            $socmed->toko_id = $toko->id;
            $socmed->save();
            return redirect()->back()->with(['success' => 'Social Media Berhasil Di Tambahkan']);
        } else {
            return redirect()->back()->withErrors('Anda Belum Menambahkan Url');
        }
    }
}
