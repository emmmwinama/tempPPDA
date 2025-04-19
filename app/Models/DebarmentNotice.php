<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebarmentNotice extends Model
{
    use HasFactory;
    protected $table = 'debarment_notices';

    protected $fillable = [
        'title',
        'publish_date',
        'attachment'
    ];
}
