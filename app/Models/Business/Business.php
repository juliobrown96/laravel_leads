<?php

namespace App\Models\Business;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = [
        'name',
        'document',
        'postal_code',
        'phone',
        'email',
        'website',
        'status',
    ];
}
