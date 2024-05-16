<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Regulation;
use App\Models\Tools;
use Illuminate\Http\Response;

class RssFeedController extends Controller
{
    public function index()
    {
        $posts = Posts::latest()->get();

        return response()->view('rss.index',[
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }

    public function detail($id)
    {
        $post = Posts::findOrFail($id);
        return response()->view('rss.post-details',[
            'post' => $post
        ])->header('Content-Type', 'text/xml');
    }

    public function introduction()
    {
        $tools = Tools::latest()->get();
        return response()->view('rss.introduction',[
            'tools' => $tools
        ])->header('Content-Type', 'text/xml');
    }

    public function regulations()
    {
        $rules = Regulation::latest()->get();
        return response()->view('rss.regulations',[
            'rules' => $rules
        ])->header('Content-Type', 'text/xml');
    }
}
