<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    protected $table = 'tools';

    protected $fillable = ['name', 'url', 'tool_description'];

}
