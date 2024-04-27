<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Session;
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
        $this->data['button']       = 'Tạo bài đăng';

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
        $this->data['post'] = Posts::findOrFail($id);
        $this->data['categoriesList'] = Categories::arrayForSelect();
        $this->data['headline']     = 'Tạo bài đăng';
        $this->data['mode']         = 'edit';
        $this->data['headline']     = 'Cập nhật bài đăng';
        $this->data['button']       = 'Chỉnh sửa bài đăng';

        return view('admin.posts.form', $this->data);
    }

    public function store(PostsRequest $request)
    {
        $formData = $request->all();
        if (Posts::create($formData)) {
            Session::flash('message', 'Bài đăng đã được tạo thành công');
        }

        return redirect()->to('posts');
    }

    public function destroy($id)
    {
        if (Posts::find($id)->delete()) {
            Session::flash('message', 'Bài đăng đã được xóa thành công');
        }

        return redirect()->to('posts');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\PostsRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostsRequest $request, $id)
    {
        $data = $request->all();

        $post = Posts::find($id);
        $post->category_id = $data['category_id'];
        $post->title = $data['title'];
        $post->description = $data['description'];
        $post->demo = $data['demo'];
        $post->domain = $data['domain'];
        $post->min_price = $data['min_price'];
        $post->max_price = $data['max_price'];


        if ($post->save()) {
            Session::flash('message', 'Cập nhật bài đăng thành công');
        }

        return redirect()->to('posts');
    }

    public function getListByCategory($categoryId, $searchKeyword = null)
    {
        $categories = Categories::where('id', $categoryId)
            ->orWhere('parent_id', $categoryId)
            ->get();
        $categoryIds = $categories->pluck('id')->toArray();

        $postsQ = Posts::whereIn('category_id', $categoryIds);

        if ($searchKeyword && $searchKeyword != "null") {
            $postsQ->where(function ($query) use ($searchKeyword) {
                $query->where('title', 'LIKE', '%' . $searchKeyword . '%')
                    ->orWhere('demo', 'LIKE', '%' . $searchKeyword . '%');
            });
        }
        $posts = $postsQ->get();

        return view('home.partials.list_posts')->with(['posts' => $posts]);
    }

    public function getPostDetails($postId)
    {
        $this->data['post'] = Posts::findOrFail($postId);

        return view('admin.posts.details', $this->data);
    }
}
