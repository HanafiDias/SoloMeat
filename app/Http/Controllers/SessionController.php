<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("login");
    }
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin'
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/admin');
        } else {
            $infologin = [
                'email' => $request->email,
                'password' => $request->password,
                'role' => 'user'
            ];
            if (Auth::attempt($infologin)) {
                return redirect('/');
            } else {
                return redirect('/login');
            }
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    function register()
    {
        return view('register');
    }

    function create(Request $request)
    {
        Session::flash('fullname', $request->fullname);
        Session::flash('username', $request->username);
        Session::flash('email', $request->email);
        Session::flash('no_wa', $request->no_wa);
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'no_wa' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|same:password'
        ], [
            'fullname.required' => 'Fullname wajib diisi',
            'username.required' => 'Username wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Silahkan masukan Email yang valid',
            'email.unique' => 'Email sudah digunakan, sialahkan pakai email yang lain',
            'no_wa.required' => 'Nomer WA wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal harus 6 karakter',
            'password_confirmation.required' => 'Masukan password yang sama'
        ]);

        $data = [
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'no_wa' => $request->no_wa,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/');
        } else {
            return redirect('register');
        }
    }
}
