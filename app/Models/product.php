<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'price',
        'featured_image',
        'featured_image_original_name',
    ];
}
