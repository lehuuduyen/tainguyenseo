<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public $_SALT = "APP_TAI_NGUYEN0778899811";
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $currentYear =
            date('Y');
            $currentMonth = date('m');
            $currentDate = date('d');
            $imageFolder = "images";
            $pathImg = "images/$currentYear/$currentMonth/$currentDate/";
            $originName = str_replace(['-', ' ',], '_', $request->file('upload')->getClientOriginalName());
            $imageName = time() . '_' . $originName;
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $path = storage_path('app/public/tmp/uploads');
            $fileName = $request->file('upload')->move($pathImg, $imageName)->getFilename();
    
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset($pathImg . $imageName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
    
            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
        return false;
    }
    public function uploadDomain(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'domain' => 'required',
        ]);

        // Store the image
        $domain = $request->domain;
        $hash =app('hash')->make($domain . $this->_SALT);
        // Return the URL of the uploaded image
        return response()->json(['hash' => $hash]);
    }
    
}
