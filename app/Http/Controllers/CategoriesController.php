<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\CategoriesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Helpers\AppHelper;
use stdClass;

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

    public function getSubCategory($categoryId = null)
    {
        $categoriesList = [];
        $categoryId = json_decode($categoryId);
        if (!$categoryId) {
            // Case On load page: All level 0 category will be displayed bellow
            $childCategories = Categories::where('parent_id', '==', 0)->get();
            $parentCategories = null;
        } else {
            $parentCategories = $this->getAllParentIds($categoryId);
            $childCategories = $this->getAllChildIds($categoryId);

            if (count($parentCategories) == 1) {
                // Case when user click on a category but there are no child categories belonging to it
                $categoriesList = Categories::where('parent_id', '==', 0)->get();
                $categoryId = $parentCategories[0]->id;
            } else if (empty($childCategories)) {
                $parentCategories = array_filter($parentCategories, function ($item) use ($categoryId) {
                    return $item->id !== intval($categoryId);
                });
                $lastEle = end($parentCategories);
                $parentCategories = $this->getAllParentIds($lastEle->id);
                // if (count($parentCategories) == 1) {
                //     $categoriesList = Categories::where('parent_id', '==', 0)->get();
                // }
                $childCategories = $this->getAllChildIds($lastEle->id);
            }
        }


        return view('home.partials.sub_categories')->with([
            'parentCategories' => $parentCategories,
            'childCategories' => $childCategories,
            'categoriesList' => $categoriesList,
            'selectedCategory' => $categoryId,
        ]);
    }

    public function getAllParentIds($categoryId, &$parentCategories = [])
    {
        $category = Categories::where('id', $categoryId)
            ->first();

        if ($category) {
            $parentObject = new stdClass();
            $parentObject->id = $category->id;
            $parentObject->name = $category->name;
            array_unshift($parentCategories, $parentObject);

            if ($category->parent_id !== 0) {
                $this->getAllParentIds($category->parent_id, $parentCategories);
            }
        }
        return $parentCategories;
    }

    public function getAllChildIds($categoryId, &$childCategories = [])
    {
        $category = Categories::where('id', $categoryId)
            ->first();

        if ($category) {
            $children = $category->children;

            foreach ($children as $child) {
                $childObject = new stdClass();
                $childObject->id = $child->id;
                $childObject->name = $child->name;
                $childCategories[] = $childObject;
                $this->getAllChildIds($child->id, $childCategories);
            }
        }

        return $childCategories;
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
