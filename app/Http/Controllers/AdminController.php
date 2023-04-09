<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin(Request $request)
    {
        $data = Admin::all();
        return view('admin.master', compact('data'));
    }

    public function create()
    {
        return view('admin.master');
    }

    public function store(Request $request)
    {
        Admin::create($request->all());
        return redirect('/admin.master');
    }
    public function edit($id)
    {
        $data = Admin::find($id);
        return view('/admin.master', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = Admin::find($id);
        $data->update($request->all());
        $data->save;
        return redirect('/admin.master');
    }
    public function delete($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect('/admin.master');
    }
}
