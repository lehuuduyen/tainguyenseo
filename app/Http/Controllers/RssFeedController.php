<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Response;

class RssFeedController extends Controller
{
    public function index()
    {
        $posts = Posts::latest()->get();

        return response()->view('rss',[
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }
}
