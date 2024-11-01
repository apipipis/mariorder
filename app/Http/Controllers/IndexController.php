<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }

    public function profile(){
        return view('profile.profile');
    }

    public function features(){
        return view('dashboard.features');
    }


}
