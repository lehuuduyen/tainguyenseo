<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Category;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'posts';

    protected $fillable = ['category_id', 'title', 'description', 'demo', 'domain', 'min_price','is_validated','status'];

    public function category()
    {
        return $this->belongsTo(Categories::class)->withDefault();
    }

    public function getGapTime()
    {
        $createdDateTime = new DateTime($this->created_at);
        $currentDateTime = new DateTime();

        $timeDiff = $currentDateTime->diff($createdDateTime);

        if ($timeDiff->days > 0) {
            $gapTimeMessage = $timeDiff->days . " day" . ($timeDiff->days > 1 ? "s" : "") . " ago";
        } elseif ($timeDiff->h > 0) {
            $gapTimeMessage = $timeDiff->h . " hour" . ($timeDiff->h > 1 ? "s" : "") . " ago";
        } elseif ($timeDiff->i > 0) {
            $gapTimeMessage = $timeDiff->i . " minute" . ($timeDiff->i > 1 ? "s" : "") . " ago";
        } else {
            $gapTimeMessage = "just now";
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
}
