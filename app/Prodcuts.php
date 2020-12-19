<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodcuts extends Model
{
    protected $fillable = [
        'name', 'status', 'description', 'url', 'store_id', 
    ];
}
