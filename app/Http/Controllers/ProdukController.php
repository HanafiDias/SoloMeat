<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\toko;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $data = produk::all();
        return view('/welcome', compact('data'));
    }
}
