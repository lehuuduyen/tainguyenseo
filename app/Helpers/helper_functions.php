<?php

namespace App\Helpers;

class AppHelper
{
    public function create_slug($str)
    {
        $slug = strtolower($str);
        $slug = str_replace(' ', '_', $slug);
        $slug = preg_replace('/[^a-z0-9_-]/', '', $slug);
        $slug = trim($slug, '_-');

        return $slug;
    }

    public static function instance()
    {
        return new AppHelper();
    }
}
