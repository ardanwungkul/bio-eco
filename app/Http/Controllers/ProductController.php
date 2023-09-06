<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index()
    {
        $produk = Product::all();
        return view('master.product.index', compact('produk'));
    }
    public function create()
    {
        return view('master.product.create');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
                'image' => 'required',
            ]
        );

        $produk = new Product();
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->deskripsi = $request->deskripsi;

        $file = $request->file('image');
        $nama_file = date('YmdHi') . $file->getClientOriginalName();
        $path = 'storage/images/product/' . $nama_file;
        Image::make($file)->widen(400)->save(public_path($path));

        $produk->gambar = $nama_file;
        $produk->save();

        return redirect()->route('product.index')->with(['success' => 'Produk Berhasil Ditambahkan']);
    }

    public function destroy($product)
    {
        $product = Product::findOrFail($product);
        $file_path = public_path('storage/images/product/' . $product->gambar);
        unlink($file_path);
        $product->delete();
        return redirect()->route('product.index')->with(['success' => 'Produk Berhasil Dihapus']);
    }
}
