<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntentionToAward extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'pde_id',
        'reference',
        'fyi',
        'daterecorded',
        'downloads',
    ];

    public  function pde()
    {
        return $this->belongsTo(PDE::class);
    }
}
