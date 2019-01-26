<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entities;
use App\Models;

class TestController extends Controller
{
    public function router($method_name = false)
    {
        if(method_exists($this, $method_name)){
            return $this->$method_name();
        }
        return 'wrong method name';
    }
    public function test()
    {
        $test = new Entities\Test;
        print_r($test);

        echo $hr = '<br><hr><br>';
        $dictionaries = Models\Dictionary::with(['values', 'values.meta'])->get()->toArray();//find(1)->toArray();
        print_r($dictionaries);
        
        //$values = Models\DictionaryValue::all();
        //$meta = Models\DictionaryValueMeta::all();
        
        return 'test';
    }
    public function test1()
    {
        $data = Models\Product::with(['attributes', 'categories'])->get()->toArray();//find(1)->toArray();
        print_r($data);
        return 'test1';
    }
}
