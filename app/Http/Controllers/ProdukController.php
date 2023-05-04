<?php

namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\toko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $data = Produk::latest()->get();


        return view('welcome', compact('data', 'user'));
    }

    // public function index(Request $request)
    // {
    //     $id = $request->id;
    //     $user = User::find($id);
    //     $data = Produk::latest()->get();

    //     if ($request->isMethod('post')) {
    //         $produkId = $request->input('counter');
    //         // ambil data produk dari database
    //         $produk = DB::table('table_tokos')->where('id', $produkId)->first();

    //         if ($produk) {
    //             // tambahkan 1 ke nilai counter
    //             $counter = $produk->counter + 1;
    //             // simpan nilai counter ke database
    //             DB::table('table_tokos')->where('id', $produkId)->update(['counter' => $counter]);
    //             // kembalikan response JSON yang berisi nilai counter yang baru
    //             return response()->json(['counter' => $counter]);
    //         } else {
    //             // Jika produk tidak ditemukan, kembalikan response error
    //             return response()->json(['error' => 'Produk tidak ditemukan']);
    //         }
    //     }

    //     return view('welcome', compact('data', 'user'));
    // }

    // public function updateCounter(Request $request)
    // {
    //     $count = $request->input('counter');

    //     // Simpan nilai hitungan ke database
    //     DB::table('table_tokos')->where('id', 1)->update(['counter' => $count]);

    //     // Kembalikan response JSON yang berisi pesan sukses
    //     return response()->json(['message' => 'Hitungan berhasil diperbarui.']);
    // }

    // public function updateCounter(Request $request)
    // {
    //     $id = $request->input('id');
    //     $produk = Produk::find($id);

    //     dd($id);

    //     if ($produk) {
    //         // tambahkan 1 ke nilai counter
    //         $counter = $produk->counter + 1;
    //         // simpan nilai counter ke database
    //         $produk->update(['counter' => $counter]);

    //         // kembalikan response JSON yang berisi nilai counter yang baru
    //         return response()->json(['counter' => $counter]);
    //     } else {
    //         // Jika produk tidak ditemukan, kembalikan response error
    //         return response()->json(['error' => 'Produk tidak ditemukan'], 404);
    //     }
    // }


    // public function show($id)
    // {
    //     // ambil data produk dari database
    //     $produk = Produk::find($id);

    //     if ($produk) {
    //         // tambahkan 1 ke nilai counter
    //         $counter = $produk->counter + 1;
    //         // simpan nilai counter ke database
    //         $produk->update(['counter' => $counter]);

    //         // tampilkan halaman detail produk
    //         return view('welcome', compact('produk'));
    //     } else {
    //         // jika produk tidak ditemukan, kembalikan response error
    //         abort(404);
    //     }
    // }


    // public function updateCounter($id, Request $request)
    // {
    //     $produk = Produk::find($id);

    //     if ($produk) {
    //         $counter = $produk->counter ?? 0;
    //         $produk->counter = $counter + 1;
    //         $produk->save();

    //         return redirect()->away('https://wa.me/628123456789?text=Halo,%20saya%20tertarik%20dengan%20produk%20anda.%20Berapa%20harganya?');
    //     } else {
    //         return response()->json(['error' => 'Produk tidak ditemukan'], 404);
    //     }
    // }
}
