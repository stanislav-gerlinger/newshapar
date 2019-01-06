<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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
}