<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    public function values()
    {
        return $this->hasMany('App\Models\DictionaryValue');
    }
}
