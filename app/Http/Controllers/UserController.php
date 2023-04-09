<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\produk;
use App\Models\seller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User(Request $request)
    {
        $data = User::all();
        return view('admin.user', compact('data'));
    }

    public function create()
    {
        return view('admin.user');
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect('/adminuser');
    }
    public function edit($id)
    {
        $data = User::find($id);
        return view('/adminuser', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = User::find($id);
        $data->update($request->all());
        $data->save;
        return redirect('/adminuser');
    }
    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/adminuser');
    }


    public function  jumlah()
    {

        $TotalUser = User::all()->count();
        $TotalProduk = produk::all()->count();
        $TotalSeller = seller::all()->count();
        $admin = Admin::all();


        return view('admin.master', compact('TotalUser', 'TotalProduk', 'TotalSeller', 'admin'));
    }
}
