<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models;

class PageController extends Controller
{
    /**
     * Отображение страниц из таблицы page
     *
     * @param  int  $id
     * @return Response
     */
    public function view($slug)
    {
        $page = DB::table('page')->where('slug', $slug)->first();
        if (View::exists('page')) {
            if($page) return view('page', ['page' => $page]);
        }
        return abort(404);
    }
    public function test()
    {
        echo $hr = '<br><hr><br>';
        $dictionaries = Models\Dictionary::with(['values', 'values.meta'])->get()->toArray();//find(1)->toArray();
        print_r($dictionaries);
        
        echo $hr;
        $values = Models\DictionaryValue::all();
        print_r($values);
        echo $hr;
        return $hr;
    }
}