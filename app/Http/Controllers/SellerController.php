<?php

namespace App\Http\Controllers;

use App\Models\seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function seller(Request $request)
    {
        $data = seller::all();
        return view('admin.seller', compact('data'));
    }

    public function create()
    {
        return view('admin.seller');
    }

    public function store(Request $request)
    {
        seller::create($request->all());
        return redirect('/adminseller');
    }
    public function edit($id)
    {
        $data = seller::find($id);
        return view('/adminseller', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = seller::find($id);
        $data->update($request->all());
        $data->save;
        return redirect('/adminseller');
    }
    public function delete($id)
    {
        $data = seller::find($id);
        $data->delete();
        return redirect('/adminseller');
    }
}
