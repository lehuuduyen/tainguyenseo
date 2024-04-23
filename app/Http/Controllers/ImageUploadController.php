<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Store the image
        $originalNameImg = str_replace(['-', ' ',], '_', $request->image->getClientOriginalName());
        $imageName = time() . '_' . $originalNameImg;
        $request->image->move(public_path('images'), $imageName);

        // Return the URL of the uploaded image
        return response()->json(['url' => asset('images/' . $imageName)]);
    }
}
