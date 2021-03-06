<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function attributes()
    {
        return $this->hasMany('App\Models\ProductAttribute');
    }
    public function categories()
    {
        return $this->hasMany('App\Models\ProductCategory');
    }
}
