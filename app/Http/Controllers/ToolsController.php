<?php

namespace App\Http\Controllers;

use App\Models\Tools;
use App\Http\Requests\ToolsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ToolsController extends Controller
{
    public function index()
    {
        $this->data['tools'] = Tools::all();
        return view('admin.tools.index', $this->data);
    }

    public function create()
    {
        $this->data['headline']     = 'Thêm Công Cụ Mới';
        $this->data['mode']         = 'create';
        $this->data['button']       = 'Thêm';

        return view('admin.tools.form', $this->data);
    }

    public function store(ToolsRequest $request)
    {
        $formData = $request->all();
        if (Tools::create($formData)) {
            Session::flash('message', 'Công cụ đã được thêm thành công');
        }

        return redirect()->to('tools');
    }

    public function destroy($id)
    {
        if (Tools::find($id)->delete()) {
            Session::flash('message', 'Danh mục đã được xóa thành công');
        }

        return redirect()->to('tools');
    }

    public function edit($id)
    {
        $this->data['tool'] = Tools::findOrFail($id);
        $this->data['mode']         = 'edit';
        $this->data['headline']     = 'Cập nhật công cụ';
        $this->data['button']       = 'Chỉnh sửa';
        return view('admin.tools.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ToolsRequest $request, $id)
    {
        $data = $request->all();

        $tool = Tools::find($id);
        $tool->name = $data['name'];
        $tool->url = $data['url'];
        $tool->tool_description	 = $data['tool_description'];

        if ($tool->save()) {
            Session::flash('message', 'Cập nhật công cụ thành công');
        }

        return redirect()->to('tools');
    }
}
