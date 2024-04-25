<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $this->data['posts'] = Posts::all();
        $this->data['categoriesList'] = Categories::all();
        return view('home.index', $this->data);
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