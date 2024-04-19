<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\AppHelper;

class Categories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    protected $fillable = ['name', 'slug_name', 'parent_id'];

    public function getParentIdAttribute()
    {
        $parentId = $this->attributes['parent_id'];
        $parentCategory = [];
        $parentCategory['id'] = null;
        $parentCategory['name'] = null;
        if (intval($parentId) > 0) {
            $categoriesByParentId = $this->find($parentId);
            $parentCategory['id'] = $categoriesByParentId['id'];
            $parentCategory['name'] = $categoriesByParentId['name'];
        }

        return $parentCategory;
    }

    /**
     * Getting array for select option
     **/
    public static function arrayForSelect()
    {
        $arr = [];
        $categories = Categories::orderBy('name')->get();
        foreach ($categories as $category) {
            $arr[$category->id] = $category->name;
        }

        return $arr;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($value) {
            $value->slug_name = AppHelper::instance()->create_slug($value->name);
        });
    }
}
