<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DictionaryValue extends Model
{
    public function meta()
    {
        return $this->hasMany('App\Models\DictionaryValueMeta');
    }
}
