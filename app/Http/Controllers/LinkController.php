<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function destroy(Link $link)
    {
        $link->delete();
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
}
