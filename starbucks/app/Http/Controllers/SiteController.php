<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index () {
        return view ('site/index');
    }
    public function about(){
        return view('site/about');
    }
    public function logout()
    {
        return view('view/login');
    }
    public function supplier(){
        return view('site/supplier');
    }
    public function penghargaan(){
        return view('site/penghargaan');
    }
    public function sponsor(){
        return view('site/sponsor');
    }
    public function online(){
        return view('site/online');
    }
    public function lokasi(){
        return view('site/lokasi');
    }
}
