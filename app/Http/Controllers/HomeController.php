<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }

    public function introduction() 
    {
        return view('home.introduction');
    }

    public function regulations() 
    {
        return view('home.regulations');
    }
}