<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Toko;
use App\Models\WhatsappLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->back()->with(['success' => 'Link Berhasil Dihapus']);
    }
    public function whatsappDestroy(WhatsappLink $whatsapp)
    {
        $whatsapp->delete();
        return redirect()->back()->with(['success' => 'Link Berhasil Dihapus']);
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $toko = Toko::where('user_id', $user->id)->first();
        $item = $request->input('link');
        foreach ($item as $itemData) {
            $newItem = new Link();
            $newItem->toko_id = $toko->id;
            $newItem->nama = $itemData['nama'];
            $newItem->url = $itemData['url'];
            $newItem->save();
        }
        return redirect()->back()->with(['success' => 'Link Berhasil Ditambahkan']);
    }

    public function update($id, Request $request)
    {
        $link = Link::findOrFail($id);
        $link->nama = $request->nama;
        $link->url = $request->url;
        $link->save();
        return redirect()->back()->with(['success' => 'Link Berhasil Di Ubah']);
    }
    public function whatsappUpdate($id, Request $request)
    {
        $cleanedNumber = $this->cleanPhoneNumber($request->input('nohp'));
        $whatsapp = WhatsappLink::findOrFail($id);
        $whatsapp->nama = $request->nama;
        $whatsapp->no_hp = $cleanedNumber;
        $whatsapp->pesan = urlencode($request->pesan);
        $whatsapp->save();
        return redirect()->back()->with(['success' => 'Link Berhasil Di Ubah']);
    }
    public function whatsapp(Request $request)
    {
        $cleanedNumber = $this->cleanPhoneNumber($request->input('no_hp'));
        $user = Auth::user();
        $toko = Toko::where('user_id', $user->id)->first();
        $whatsapp = new WhatsappLink();
        $whatsapp->no_hp = $cleanedNumber;
        $whatsapp->nama = $request->nama;
        $whatsapp->pesan = urlencode($request->pesan);
        $whatsapp->toko_id = $toko->id;
        $whatsapp->save();
        return redirect()->back()->with(['success' => 'Berhasil Menambahkan Whatsapp']);
    }

    private function cleanPhoneNumber($number)
    {
        $cleanedNumber = preg_replace('/\s+|-/', '', $number);
        $cleanedNumber = preg_replace('/\D/', '', ltrim($cleanedNumber, '+'));

        if (substr($cleanedNumber, 0, 1) === '0') {
            $replacedNumber = '62' . substr($cleanedNumber, 1);
        } else {
            $replacedNumber = $cleanedNumber;
        }

        return $replacedNumber;
    }
}
