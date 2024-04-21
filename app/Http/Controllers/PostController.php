<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use App\Http\Requests\PostsRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display Posts page.
     * 
     * @return Renderable
     */
    public function index()
    {
        $this->data['posts'] = Posts::all();
        return view('admin.posts.index', $this->data);
    }

    /**
     * Display Posts creation page.
     * 
     * @return Renderable
     */
    public function create()
    {
        $this->data['categoriesList'] = Categories::arrayForSelect();
        $this->data['headline']     = 'Tạo bài đăng';
        $this->data['mode']         = 'create';

        return view('admin.posts.form', $this->data);
    }

    /**
     * Display Posts Edit page.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['posts'] = Posts::arrayForSelect();
        $this->data['categoriesList'] = Categories::arrayForSelect();
        $this->data['headline']     = 'Tạo bài đăng';
        $this->data['mode']         = 'create';

        return view('admin.posts.form', $this->data);
    }
}
