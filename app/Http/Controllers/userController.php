<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    public function login(){
        return view('dashboard.loginPages');
    }
}
