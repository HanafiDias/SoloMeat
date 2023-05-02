<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\toko;
use App\Models\User;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $data = Produk::latest()->get();
        return view('welcome', compact('data', 'user'));
    }
}
