<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacancy extends Model
{
    use HasFactory;
    protected $table = 'vacancies';

    protected $fillable = [
        'title',
        'description',
        'publish_date',
        'close_date',
        'location',
        'attachment',
        'archive',
        'type'
    ];
}
