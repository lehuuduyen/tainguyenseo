<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Regulation;
use App\Models\Tools;
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

        $this->data['categoriesList'] = Categories::where('parent_id', 0)->get();

        return view('home.index', $this->data);
    }

    public function introduction()
    {
        $this->data['tools'] = Tools::all();
        return view('home.introduction', $this->data);
    }

    public function regulations()
    {
        $this->data['rules'] = Regulation::all();
        return view('home.regulations', $this->data);
    }
}
