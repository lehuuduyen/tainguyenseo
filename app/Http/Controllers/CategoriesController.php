<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display Categories page.
     * 
     * @return Renderable
     */
    public function index()
    {
        return view('admin.categories.index');
    }
}
