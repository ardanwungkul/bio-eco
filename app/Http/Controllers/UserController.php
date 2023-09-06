<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('master.user.index', compact('user'));
    }

    public function destroy($user)
    {
        $user = User::findOrFail($user);
        $user->delete();
        return redirect()->route('user.index')->with(['success' => 'User Berhasil Dihapus']);
        // dd($user);
    }
}
