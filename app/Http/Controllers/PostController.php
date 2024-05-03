<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Categories;
use App\Models\Posts;
use App\Http\Requests\PostsRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CategoriesController;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display Posts page.
     * 
     * @return Renderable
     */
    public $_SALT = "APP_TAI_NGUYEN0778899811";

    public function index()
    {
        if (auth()->user()->role == 1) {
            $this->data['posts'] = Posts::all();
        } else {

            $this->data['posts'] = Posts::where('created_by', auth()->user()->id)->get();
        }
        return view('admin.posts.index', $this->data);
    }

    /**
     * Display Posts creation page.
     * 
     * @return Renderable
     */
    public function create()
    {
        $this->data['categoriesList'] = Categories::getAll();
        $this->data['status']       = Posts::statusArr();
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

        if ((auth()->user()->role != 1) && $this->data['post']->created_by != auth()->user()->id) {
            abort(404);
        }
        $this->data['status']       = Posts::statusArr();
        $this->data['categoriesList'] = Categories::getAll();
        $this->data['headline']     = 'Tạo bài đăng';
        $this->data['mode']         = 'edit';
        $this->data['headline']     = 'Cập nhật bài đăng';
        $this->data['button']       = 'Chỉnh sửa bài đăng';

        return view('admin.posts.form', $this->data);
    }

    public function store(PostsRequest $request)
    {
        $formData = $request->all();
        $formData["created_by"] = auth()->user()->id;

        if (Posts::create($formData)) {
            Session::flash('message', 'Bài đăng đã được tạo thành công');
        }

        return redirect()->to('posts');
    }
    public function verify(Request $request)
    {
        $request->validate([
            'domain' => 'required',
        ]);
        $domain = $request->domain;
        $checkVerifyDomain = $this->checkVerifyDomain($domain);
        return response()->json(['status' => $checkVerifyDomain]);
    }
    public function checkVerifyDomain($domain)
    {
        $pass = $domain . $this->_SALT;
        if (auth()->user()->role != 1) {

            $checkSame = Posts::where('domain', $domain)->where('is_validated', 1)->first();
            if ($checkSame) {
                return false;
            }
        } else {
            return true;
        }

        try {
            $url = 'https://' . $domain . '/verify.txt';
            $getContent = file_get_contents($url);

            if (app('hash')->check($pass, $getContent)) {
                // The value matches the hash
                // Do something...
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            //throw $th;
            try {
                $url = 'http://' . $domain . '/verify.txt';
                $getContent = file_get_contents($url);

                if (app('hash')->check($pass, $getContent)) {
                    // The value matches the hash
                    // Do something...
                    return true;
                }
                return false;
            } catch (\Throwable $th) {
                //throw $th;
                return false;
            }
        }
    }

    public function destroy($id)
    {
        $post = Posts::find($id);
        if ((auth()->user()->role != 1) && $post->created_by != auth()->user()->id) {
            abort(404);
        }
        if ($post->delete()) {
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
        $post->status = $data['status'];
        if (!empty($data['domain'])) {
            $checkVerifyDomain = $this->checkVerifyDomain($data['domain']);
            $post->is_validated = $checkVerifyDomain;
        }


        if ($post->save()) {
            Session::flash('message', 'Cập nhật bài đăng thành công');
        }

        return redirect()->to('posts');
    }

    public function getListByCategory(Request $request)
    {
        $categoryId = $request->input('category_id');
        $searchKeyword = json_decode($request->input('search_keyword'));
        $page = $request->input('page');
        $minPrice = $request->input('mix_price') ? (int) str_replace(",", "", $request->input('mix_price')) : null;
        $maxPrice = $request->input('max_price') ? (int) str_replace(",", "", $request->input('max_price')) : null;
        $sort = $request->input('sort') ? $request->input('sort') : null;

        if ($categoryId) {
            $category = Categories::findOrFail($categoryId);

            $categoryIds  = $category->children()->pluck('id')->prepend($category->id);
            $categoryIds = $category->getAllDescendantsIds($category);
            $categoryIds[] = $category->id;
            $postsQ = Posts::whereIn('category_id', $categoryIds);

            if ($minPrice) {
                $postsQ->where('min_price', '>=', $minPrice);
            }

            if ($maxPrice) {
                $postsQ->where('max_price', '<=', $maxPrice);
            }

            if ($sort) {
                if ($sort == "budget_min") {
                    $postsQ->orderBy('min_price', 'ASC');
                    $postsQ->orderBy('max_price', 'ASC');
                }
                if ($sort == "budget_max") {
                    $postsQ->orderBy('min_price', 'DESC');
                    $postsQ->orderBy('max_price', 'DESC');
                }
            }

            if ($searchKeyword) {
                $postsQ->where(function ($query) use ($searchKeyword) {
                    $query->where('title', 'LIKE', '%' . $searchKeyword . '%')
                        ->orWhere('demo', 'LIKE', '%' . $searchKeyword . '%');
                });
            }
        } else {
            $postsQ = new Posts();
        }

        $total = $postsQ->get()->count();
        $posts = $postsQ->orderBy('created_at', 'DESC')->paginate(10, ['*'], 'page', $page);

        return view('home.partials.list_posts', compact('posts', 'categoryId', 'searchKeyword', 'page', 'total'));
    }

    public function getPostDetails($postId)
    {
        $post = Posts::findOrFail($postId);
        $CategoriesController = new CategoriesController();
        $parentCategories = $CategoriesController->getAllParentIds($post->category_id);

        return view('admin.posts.details')->with([
            'post' => $post,
            'parentCategories' => $parentCategories,
        ]);
    }
}
