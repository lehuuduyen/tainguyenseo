<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regulation;
use App\Http\Requests\RegulationRequest;
use Illuminate\Support\Facades\Session;

class RegulationsController extends Controller
{
    public function index()
    {
        $this->data['rules'] = Regulation::all();
        return view('admin.regulations.index', $this->data);
    }

    public function create()
    {
        $this->data['headline']     = 'Thêm Quy Định Mới';
        $this->data['mode']         = 'create';
        $this->data['button']       = 'Thêm';

        return view('admin.regulations.form', $this->data);
    }

    public function store(RegulationRequest $request)
    {
        $formData = $request->all();
        if (Regulation::create($formData)) {
            Session::flash('message', 'Công cụ đã được thêm thành công');
        }

        return redirect()->to('regulations-admin');
    }

    public function destroy($id)
    {
        if (Regulation::find($id)->delete()) {
            Session::flash('message', 'Công cụ đã được xóa thành công');
        }

        return redirect()->to('regulations-admin');
    }

    public function edit($id)
    {
        $this->data['rule'] = Regulation::findOrFail($id);
        $this->data['mode']         = 'edit';
        $this->data['headline']     = 'Cập nhật quy định';
        $this->data['button']       = 'Chỉnh sửa';
        return view('admin.regulations.form', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegulationRequest $request, $id)
    {
        $data = $request->all();

        $rule = Regulation::find($id);
        $rule->regulation = $data['regulation'];

        if ($rule->save()) {
            Session::flash('message', 'Cập nhật quy định thành công');
        }

        return redirect()->to('regulations-admin');
    }
}
