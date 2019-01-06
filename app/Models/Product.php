<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $connection = 'mysql';
    protected $table = 'products';
    protected $dateFormat = 'Y-m-d H:i:s';
    public $timestamps = true;

    protected $fillable = ['title'];
}
