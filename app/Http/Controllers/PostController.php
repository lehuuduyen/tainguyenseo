<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display Categories page.
     * 
     * @return Renderable
     */
    public function index()
    {
        $this->data['posts'] = Categories::all();
        return view('admin.post.index', $this->data);
    }
}
