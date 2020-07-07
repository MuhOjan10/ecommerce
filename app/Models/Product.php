<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function categoryDetail()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
