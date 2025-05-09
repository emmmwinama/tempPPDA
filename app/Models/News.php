<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
/** @mixin Builder */
use Illuminate\Database\Eloquent\Model;



class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'publishdate',
        'ispublished'
    ];

}
