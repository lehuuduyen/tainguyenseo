<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Helpers\AppHelper;

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
        $this->data['headline']     = 'Thêm Danh Mục Mới';
        $this->data['mode']         = 'create';

        return view('admin.categories.form', $this->data);
    }

    public function store(Request $request)
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
        // echo "<pre>";
        // var_dump($this->data['categories']->getParentIdAttribute());
        // echo "</pre>";
        // exit;
        $this->data['categoriesList'] = Categories::arrayForSelect();
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
    // public function update(UpdateUserRequest $request, $id)
    // {
    //     $data               = $request->all();

    //     $user               = Categories::find($id);
    //     $user->group_id     = $data['group_id'];
    //     $user->name         = $data['name'];
    //     $user->email        = $data['email'];
    //     $user->phone        = $data['phone'];
    //     $user->address      = $data['address'];

    //     if ($user->save()) {
    //         Session::flash('message', 'User Updated Successfully');
    //     }

    //     return redirect()->to('users');
    // }
}
