<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Category;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = ['category_id', 'title', 'description', 'demo', 'domain', 'min_price','is_validated','status', 'created_by', 'is_prestige'];

    public function category()
    {
        return $this->belongsTo(Categories::class)->withDefault();
    }

    public static function statusArr()
    {
        $arr = [
            0 => 'Đóng bài đăng',
            1 => 'Mở bài đăng'
        ];

        return $arr;
    }

    public function getGapTime()
    {
        $createdDateTime = new DateTime($this->created_at);
        $currentDateTime = new DateTime();

        $timeDiff = $currentDateTime->diff($createdDateTime);

        if ($timeDiff->days > 0) {
            $gapTimeMessage = $timeDiff->days . " ngày trước";
        } elseif ($timeDiff->h > 0) {
            $gapTimeMessage = $timeDiff->h . " giờ trước";
        } elseif ($timeDiff->i > 0) {
            $gapTimeMessage = $timeDiff->i . " phút trước";
        } else {
            $gapTimeMessage = " mới nãy";
        }
        return $gapTimeMessage;
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

    public function setMaxPriceAttribute($value)
    {
        $this->attributes['max_price'] = (int) str_replace(",", "", $value);
    }
}
