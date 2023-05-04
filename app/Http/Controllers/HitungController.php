<?php

namespace App\Http\Controllers;

// use App\Models\produk;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class HitungController extends Controller
// {
//     public function hitung(Request $request, $id)
//     {
//         $produk = produk::find($id);
//         $produk->counter++;
//         $produk->save();

//         return response()->json(['success' => 'Counter berhasil diperbarui.']);
//     }
//     // // ambil data produk dari database
//     // $produk = DB::table('table_tokos')->where('id', $id)->first();

//     // // tambahkan 1 ke nilai counter
//     // $counter = $produk->counter + 1;

//     // // simpan nilai counter ke database
//     // DB::table('table_tokos')->where('id', $id)->update(['counter' => $counter]);

//     // // kembalikan response JSON yang berisi nilai counter yang baru
//     // return response()->json(['counter' => $counter]);

// }

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\toko;

class HitungController extends Controller
{
    // public function hitung($id)
    // {
    //     $toko = toko::findOrFail($id);
    //     $toko->increment('counter');

    //     return redirect()->back();
    // }

    public function hitung($id)
    {
        $data = toko::findOrFail($id);
        $data->increment('counter');
        // $data->counter += 1;
        $data->save();

        // return view('/welcome', compact('data'));
        return redirect()->away("https://wa.me/{$data->nomor_whatsapp}?text=Halo,apakah produk ini '{$data->produk}' ready?");
    }
    public function hitungshp($id)
    {
        $data = toko::findOrFail($id);
        $data->increment('counter');;
        $data->save();
        // return view('/welcome', compact('data'));
        // return redirect($data->link_toko_online);
        return redirect()->away($data->link_toko_online);
    }
}
