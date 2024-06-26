<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CKFinderController extends Controller
{
    public $_SALT = "APP_TAI_NGUYEN0778899811";
    public function connector()
    {
        require base_path('public/ckfinder/core/connector/php/connector.php');
    }

    public function upload(Request $request)
    {
        $currentYear = date('Y');
        $currentMonth = date('m');
        $currentDate = date('d');
        $imageFolder = "images";

        // Validate the uploaded file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Store the image
        $originalNameImg = str_replace(['-', ' ',], '_', $request->image->getClientOriginalName());
        $imageName = time() . '_' . $originalNameImg;
        $pathImg = "images/$currentYear/$currentMonth/$currentDate/";
        if (!file_exists($pathImg)) {
            mkdir($pathImg, 0777, true);
        }
        $folderPath = public_path($pathImg);
        $request->image->move($folderPath, $imageName);

        // Return the URL of the uploaded image
        return response()->json(['url' => asset($pathImg . $imageName)]);
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
