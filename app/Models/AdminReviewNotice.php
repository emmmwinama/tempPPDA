<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminReviewNotice extends Model
{
    use HasFactory;

    protected $table = 'admin_review_notices';

    protected $fillable = [
        'title',
        'publish_date',
        'attachment'
    ];
}
