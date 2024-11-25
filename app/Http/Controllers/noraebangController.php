<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noraebangController extends Controller
{
    //INDEX
    function index() {
        return view('landing.index');
    }
    function signup(){
        return view('signup');
    }
    function signin() {
        return view('signin');
    }
    function lagu(){
        return view('lagu');
    }
    function lagu1() {
        return view('lagu1');
    }

    public function create()
    {
        return view('register');
    }
}