<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Category;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = ['category_id', 'title', 'description', 'demo', 'domain', 'min_price'];

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    /**
     * 
     *
     * @param $value
     * @return string
     */
    public function setMinPriceAttribute($value)
    {
        $this->attributes['min_price'] = (int) str_replace(",", "", $value);
    }
}
