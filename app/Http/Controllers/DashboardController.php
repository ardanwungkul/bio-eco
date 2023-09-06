<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Product;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ($user->toko->count() > 0) {
            $users = Auth::user()->id;
            $toko = Toko::where('user_id', $user->id)->first();
            return view('dashboard', compact('toko'));
        } else {
            return redirect()->route('signup-next-step');
        }
    }
    public function home()
    {
        return view('welcome');
    }

    public function urlUser($url)
    {
        $toko = Toko::where('url', $url)->first();
        if (!$toko) {
            abort(404);
        }
        // $shuffleToko = $shuffleToko->pluck('nama_kolom')->toArray();
        $product = Product::all();
        $shuffleProduk = $product->shuffle();
        return view('view', compact('toko', 'product', 'shuffleProduk'));
    }
}
