<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('landing-page');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('registration');
    }
    public function dashboard(){
        return view('Dashboard');
    }
}
