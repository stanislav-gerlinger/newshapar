<?php

namespace App\Http\Controllers;

use App\Models\Directory_element;
use Illuminate\Http\Request;

class DirectoryElementController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo __METHOD__;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Directory_element  $directory_element
     * @return \Illuminate\Http\Response
     */
    public function edit(Directory_element $directory_element)
    {
        echo __METHOD__;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Directory_element  $directory_element
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directory_element $directory_element)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Directory_element  $directory_element
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory_element $directory_element)
    {
        //
    }
}
