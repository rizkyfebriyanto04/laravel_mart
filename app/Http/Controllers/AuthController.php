<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $title = 'Karya Midas Mandiri';
        return view('backoffice.login', compact('title'));
    }

    public function loginaksi(Request $request)
    {
        $title = 'Karya Midas Mandiri';

        if ($request->isMethod('post')) {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            } else {
                session()->flash('error', 'Username and Password Salah !!!');
                return back();
            }
        }

        return view('backoffice.login', compact('title'));
    }

    public function logoutaksi()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
