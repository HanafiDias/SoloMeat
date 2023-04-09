<?php

namespace App\Http\Controllers;

use App\Models\toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{

    public function toko(Request $request)
    {
        $data = toko::all();
        return view('admin.product', compact('data'));
    }

    public function create()
    {
        return view('admin.product');
    }

    public function store(Request $request)
    {
        $data = toko::create($request->all());
        if ($request->hasFile('gambar')) {
            // $request->file('gambar')->move('store/', $request->file('gambar')->getClientOriginalName());
            // $data->gambar = $request->file('gambar')->getClientOriginalName();

            $filename = time() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('image/store'), $filename);
            $data->gambar = $filename;
            $data->save();
        }
        return redirect('/adminproduct');
    }
    public function edit($id)
    {
        $data = toko::find($id);
        return view('/adminproduct', compact('data'));
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
        return redirect('/adminproduct');
    }
    public function delete($id)
    {
        $data = toko::find($id);
        $data->delete();
        return redirect('/adminproduct');
    }
}
