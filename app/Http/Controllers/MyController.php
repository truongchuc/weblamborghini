<?php

namespace App\Http\Controllers;
 use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getshop(){
        return view('shop');
    }
    public function getmen(){
        return view('men');
    }
    public function getwoman(){
        return view('woman');
    }
    public function getkid(){
        return view('kid');
    }
    public function gettravel(){
        return view('travel');
    }
    public function gethomepage(){
        return view('homepage');
    }
    public function getmodel(){
        return view('model');
    }
}
