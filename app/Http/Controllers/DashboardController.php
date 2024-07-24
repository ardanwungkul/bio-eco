<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Product;
use App\Models\Productuser;
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
            $product = Productuser::where('toko_id', $toko->id)->get();
            return view('dashboard', compact('toko', 'product'));
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
        $toko = Toko::where('url', $url)->with('socmed')->first();
        if (!$toko) {
            abort(404);
        }
        $product = Product::all();
        $productUser = Productuser::where('toko_id', $toko->id)->get();
        $shuffleProduk = $product->shuffle();
        $shuffleProdukUser = $productUser->shuffle();
        return view('view', compact('toko', 'product', 'shuffleProduk', 'shuffleProdukUser'));
    }
}
