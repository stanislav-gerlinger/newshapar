<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Directory;
use App\Models\DirectoryElement;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Htp\Response
     */
    public function index()
    {
        $directories = Directory::all();
        if (View::exists('directories/directory-index')) return view('directories/directory-index', ['directories'=> $directories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (View::exists('directories/directory-create')) return view('directories/directory-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $directory = new Directory;
        $editable_fields = ['title', 'code'];
        $data = $request->all();
        foreach ($editable_fields as $fname) {
            if (isset($data[$fname])) {
                $directory->$fname = $data[$fname];
            }
        }
        $res = $directory->save();
        return redirect($request->path());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Directory $directory)
    {
        $DirectoryElements = DirectoryElement::where('directory_code', $directory->code)->get();
        if (View::exists('directories/directory-show')) return view('directories/directory-show', ['directory' => $directory, 'DirectoryElements' => $DirectoryElements]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $directory
     * @return \Illuminate\Http\Response
     */
    public function edit(Directory $directory)
    {
        $options = DirectoryElement::where('directory', $directory->ID)->get();
        // print_r($directory_elements);
        if (View::exists('directories/directory-edit'))
            return view('directories/directory-edit', ['directory'=>$directory, 'options' => $options]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $directory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directory $directory)
    {
        $editable_fields = [
            'title', 'code'
        ];
        $data = $request->all();
        foreach ($editable_fields as $fname) {
            if (isset($data[$fname])) {
                $directory->$fname = $data[$fname];
            }
        }
        $saved = $directory->save();

        if ($saved) {
          print_r($data);
          foreach ($data['options'] as $option_id => $option_data) {
              $option = DirectoryElement::find($option_id);
              foreach ($option_data as $key => $value) {
                  $option->$key = $value;
              }
              $option->save();
          }
        }

        // return redirect($request->path());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $directory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directory $directory)
    {
        $directory->delete();
        return redirect()->route('directories.index');
    }
}
