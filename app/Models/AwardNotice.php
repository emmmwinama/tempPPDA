<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardNotice extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'pde_id',
        'reference',
        'datepublished',
        'downloads',
    ];

    public  function pde()
    {
        return $this->belongsTo(PDE::class);
    }
}
