<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForQuotation extends Model
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
