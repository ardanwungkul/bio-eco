<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TokoController extends Controller
{
    public function create()
    {
        return view('master.toko.create');
    }
    public function store(Request $request)
    {
        $item = $request->input('link');
        $user_id = Auth::user()->id;
        $request->validate(
            [
                'nama' => 'required',
                'bio' => 'required',
                'image' => 'required',
            ]
        );
        $toko = new Toko();
        $toko->nama = $request->nama;
        $toko->bio = $request->bio;
        $toko->user_id = $user_id;

        $file = $request->file('image');
        $nama_file = date('YmdHi') . $file->getClientOriginalName();
        $path = 'storage/images/fotoProfil/' . $nama_file;
        Image::make($file)->widen(400)->save(public_path($path));

        $toko->gambar = $nama_file;

        $toko->url = Str::random(3) . $request->nama;
        $toko->save();
        return redirect()->route('dashboard.user');
    }

    public function update(Toko $toko, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'bio' => 'required',
            'url' => 'required',
        ]);

        $toko->nama = $request->nama;
        $toko->bio = $request->bio;
        $toko->url = $request->url;
        $toko->no_hp = $request->no_hp;
        $toko->alamat = $request->alamat;
        $toko->save();
        return redirect()->back()->with(['success' => 'Profil Berhasil Disimpan']);
    }

    public function template(Request $request, $id)
    {
        // Validasi permintaan jika diperlukan
        $request->validate([
            'templateValue' => 'required',
        ]);

        // Temukan toko berdasarkan ID
        $toko = Toko::findOrFail($id);

        // Lakukan perubahan template atau tindakan lain yang Anda inginkan
        $toko->template = $request->input('templateValue');
        $toko->save();
        session()->flash('success', 'Template telah diubah.');

        // Kirim respons sukses
        return response()->json(['success' => 'Template telah diubah.']);
    }
}
