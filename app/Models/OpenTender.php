<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenTender extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'pde_id',
        'reference',
        'dateposted',
        'closingdate',
        'downloads',
    ];

    public  function pde()
    {
        return $this->belongsTo(PDE::class);
    }

}
