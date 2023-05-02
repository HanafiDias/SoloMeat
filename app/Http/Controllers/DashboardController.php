<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\seller;
use App\Models\toko;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function toko($id, Request $request)
    {
        $seller = User::find($id);
        if (!$seller) {
            return redirect()->back()->with('error', 'Seller not found');
        }
        $data = toko::where('user_id', $seller->id)->get();
        return view('seller.sell', compact('data', 'seller'));
    }


    public function create()
    {
        return view('seller.sell');
    }

    public function store(Request $request)
    {
        $data = toko::create($request->all());
        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('image/store'), $filename);
            $data->gambar = $filename;
            $data->save();
        }
        return redirect('/seller/{id}');
    }
    public function edit($id)
    {
        $data = toko::find($id);
        return view('/seller/{id}', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = toko::find($id);
        $data->update($request->all());
        if ($request->hasFile('gambar')) {
            // $request->file('gambar')->move('store/', $request->file('gambar')->getClientOriginalName());
            // $data->gambar = $request->file('gambar')->getClientOriginalName();

            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('image/store'), $filename);
            $data->gambar = $filename;
            $data->save();
        }
        $data->save;
        return redirect('/seller/{id}');
    }
    public function delete($id)
    {
        $data = toko::find($id);
        $data->delete();
        return redirect('/seller/{id}');
    }



    // public function index($id, Request $request)
    // {
    //     $seller = User::find($id);
    //     return view('seller.sell', compact('seller'));
    // }



    //     public function create()
    //     {
    //         // Tampilkan form input data produk
    //         return view('seller.product.create');
    //     }

    //     public function store(Request $request)
    //     {
    //         // Validasi data produk yang diinput oleh user
    //         $request->validate([
    //             'nama_toko' => 'required|string|max:255',
    //             'produk' => 'required|string',
    //             'harga' => 'required|numeric',
    //             'link_toko_online' => 'required|string',
    //             'no_whatsapp' => 'required|numeric',
    //             'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         ]);

    //         // Simpan data produk yang diinput oleh user
    //         $seller = new toko();
    //         $seller->nama_toko = $request->input('nama_toko');
    //         $seller->produk = $request->input('produk');
    //         $seller->harga = $request->input('harga');
    //         $seller->link_toko_online = $request->input('link_toko_online');
    //         $seller->no_whatsapp = $request->input('no_whatsapp');
    //         $seller->gambar = $request->input('gambar');
    //         // $seller->seller_id = $request->user()->id;

    //         // Upload gambar produk
    //         $imageName = time() . '.' . $request->gambar->extension();
    //         $request->gambar->move(public_path('images/store'), $imageName);
    //         $seller->gambar = $imageName;

    //         $seller->save();

    //         return redirect('/seller/sell')->with('success', 'Produk berhasil disimpan.');
    //     }

    //     public function edit($id)
    //     {
    //         // Ambil data produk yang akan diedit
    //         $seller = seller::where('id', '=', \auth()::user()->id)->findOrFail($id);

    //         // Tampilkan form edit data produk
    //         return view('seller.sell', compact('seller'));
    //     }

    //     public function update(Request $request, $id)
    //     {
    //         // Validasi data produk yang diinput oleh user
    //         $request->validate([
    //             'nama_toko' => 'required|string|max:255',
    //             'produk' => 'required|string',
    //             'harga' => 'required|numeric',
    //             'link_toko_online' => 'required|string',
    //             'no_whatsapp' => 'required|numeric',
    //             'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         ]);

    //         // Ambil data produk yang akan diupdate
    //         $seller = toko::where('id', '=', \auth()::user()->id)->findOrFail($id);
    //         $seller->nama_toko = $request->input('nama_toko');
    //         $seller->produk = $request->input('produk');
    //         $seller->harga = $request->input('harga');
    //         $seller->link_toko_online = $request->input('link_toko_online');
    //         $seller->no_whatsapp = $request->input('no_whatsapp');
    //         $seller->gambar = $request->input('gambar');

    //         // Upload gambar produk jika ada
    //         if ($request->hasFile('gambar')) {
    //             $imageName = time() . '.' . $request->gambar->extension();
    //             $request->gambar->move(public_path('images/products'), $imageName);
    //             $seller->gambar = $imageName;
    //         }

    //         $seller->save();

    //         return redirect('/seller/sell')->with('success', 'Produk berhasil diupdate.');
    //     }

    //     public function delete($id)
    //     {
    //         // Hapus data produk yang dipilih
    //         $seller = toko::where('seller_id', '=', \auth()::user()->id)->findOrFail($id);
    //         $seller->delete();

    //         return redirect()->route('seller.sell')->with('success', 'Produk berhasil dihapus');
    //     }
}
