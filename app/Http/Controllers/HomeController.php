<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $this->data['selectedCategory'] = null;
        $this->data['searchKeyword'] = null;
        $searchKeyword = trim(request('search_keyword'));
        $categoryParam = request('category');

        if ($categoryParam) {
            $this->data['selectedCategory'] = $categoryParam;
        }

        if ($searchKeyword) {
            $this->data['searchKeyword'] = $searchKeyword;
        }

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
