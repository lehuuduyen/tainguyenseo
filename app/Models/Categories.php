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

    protected $fillable = ['name', 'slug_name', 'parent_id', 'is_validate'];

    public function parent()
    {
        return $this->belongsTo(Categories::class, 'parent_id', 'id')->withDefault();
    }

    public function children()
    {
        return $this->hasMany(Categories::class, 'parent_id', 'id');
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

    public static function getValueToSelectIsValidate()
    {
        $arr = [
            0 => 'Không cần xác minh',
            1 => 'Cần xác minh'
        ];

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
