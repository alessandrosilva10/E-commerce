<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function admin(){
        return view('admin');
    }
}