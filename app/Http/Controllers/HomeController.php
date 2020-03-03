<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
    public function __construct()
    {
        //$this->middleware('auth');
    }

   
    public function index()
    {
        return view('home');
    }
    public function buttons(){
        return view('pages.buttons.index');
    }
    public function tables(){
        return view('pages.tables.index');
    }
}
