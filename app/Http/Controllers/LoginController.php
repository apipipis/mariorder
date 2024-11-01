<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view ('auth.auth-signin');
    }

    public function loginProses(request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($request);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'))->with('success', 'Login Berhasil');
        } else {
            return redirect('login')->with('danger', 'Email/Password anda salah');
        }
    }

    public function register(){
        return view('auth.auth-signup');
    }
    
    public function registerProses(request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'tel' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => Hash::make ($request->password),
            'tel' => $request->tel
        ];

        User::create ($data);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'tel' => $request->tel,
        ];

        if (Auth::attempt ($credentials)){
            return redirect()->intended(route('register'))->with('success', 'Register Berhasil');
        } else {
            return redirect('register')->with('danger', '');
        }
    }
    
    public function logout(){
        Auth::logout();
        return redirect('login')->with('success', 'Anda Berhasil Logout');
    }
}
