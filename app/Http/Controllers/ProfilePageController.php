<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use App\Models\Page;
use Illuminate\Http\Request;

class ProfilePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        if (View::exists('profile/page-index')) return view('profile/page-index', ['pages' => $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (View::exists('profile/page-create')) return view('profile/page-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page;
        $editable_fields = ['title', 'name', 'description', 'content'];
        $data = $request->all();
        foreach ($editable_fields as $fname) {
            if (isset($data[$fname])) {
                $page->$fname = $data[$fname];
            }
        }
        $res = $page->save();
        var_dump($res);
        return redirect($request->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        if (View::exists('profile/page-show')) return view('profile/page-show', ['page' => $page]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        if (View::exists('profile/page-edit')) return view('profile/page-edit', ['page' => $page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $editable_fields = [
            'title', 'name', 'description', 'content'
        ];
        $data = $request->all();
        foreach ($editable_fields as $fname) {
            if (isset($data[$fname])) {
                $page->$fname = $data[$fname];
            }
        }
        $res = $page->save();
        var_dump($res);
        
        return redirect($request->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        return 'Удаление';
    }
}
