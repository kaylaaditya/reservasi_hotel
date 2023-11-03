<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }

    public function formLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username'=>'required|exists:admins',
            'password' =>'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials, $request->remember)){
           $request->session()->regenerate();
           return redirect()->intended(config('admin.path'));
        }
        return back()->withErrors([
            'username' => 'kredensial yg diberikan tidak cocok dg catatan kami.',
        ]);
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
