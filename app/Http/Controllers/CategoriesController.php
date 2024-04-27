<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Helpers\AppHelper;
use Illuminate\Support\Facades\View;

class CategoriesController extends Controller
{
    /**
     * Display Categories page.
     * 
     * @return Renderable
     */
    public function index()
    {
        $this->data['categories'] = Categories::all();
        return view('admin.categories.index', $this->data);
    }

    /**
     * Display Categories creation page.
     * 
     * @return Renderable
     */
    public function create()
    {
        $this->data['categoriesList'] = Categories::arrayForSelect();
        $this->data['is_validate'] = Categories::getValueToSelectIsValidate();
        $this->data['headline']     = 'Thêm Danh Mục Mới';
        $this->data['mode']         = 'create';

        return view('admin.categories.form', $this->data);
    }

    public function store(CategoriesRequest $request)
    {
        $formData = $request->all();
        if (Categories::create($formData)) {
            Session::flash('message', 'Danh mục đã được thêm thành công');
        }

        return redirect()->to('categories');
    }

    public function destroy($id)
    {
        if (Categories::find($id)->delete()) {
            Session::flash('message', 'Danh mục đã được xóa thành công');
        }

        return redirect()->to('categories');
    }

    /**
     * Display Categories Edit page.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['category'] = Categories::findOrFail($id);
        $this->data['categoriesList'] = Categories::arrayForSelect();
        $this->data['is_validate'] = Categories::getValueToSelectIsValidate();
        $this->data['mode']         = 'edit';
        $this->data['headline']     = 'Cập nhật danh mục';
        return view('admin.categories.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request, $id)
    {
        $data = $request->all();

        $category = Categories::find($id);
        $category->name = $data['name'];
        $category->slug_name = AppHelper::instance()->create_slug($category->name);
        $category->parent_id = $data['parent_id'];
        $category->is_validate = $data['is_validate'];

        if ($category->save()) {
            Session::flash('message', 'Cập nhật danh mục thành công');
        }

        return redirect()->to('categories');
    }

    public function getSubCategory($categoryId)
    {
        $categories = Categories::where('id', $categoryId)
            ->orWhere('parent_id', $categoryId)
            ->get();
        return view('home.partials.sub_categories')->with(['categories' => $categories]);
    }

    public function getParentCategory($parentCategoryId)
    {
        $categoriesList = Categories::all();
        $selectedCategory = Categories::where('id', $parentCategoryId)->first();

        return view('home.partials.categories_select')->with([
            'selectedCategory' => $selectedCategory->id,
            'categoriesList' => $categoriesList
        ]);
    }
}
