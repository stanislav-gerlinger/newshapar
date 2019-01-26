<?php

namespace App\Http\Controllers\Profile;

use App\Models\Yarn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YarnEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile/yarn/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  \App\Models\Yarn  $yarn
     * @return \Illuminate\Http\Response
     */
    public function show(Yarn $yarn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Yarn  $yarn
     * @return \Illuminate\Http\Response
     */
    public function edit(Yarn $yarn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Yarn  $yarn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Yarn $yarn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Yarn  $yarn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Yarn $yarn)
    {
        //
    }
}
