<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class crudController extends Controller
{
    //

    function getData()
    {
        // $data = Crud::all();
        $data = Crud::orderBy('id', 'asc')->get();

        return view('welcome', ['data' =>  $data]);
    }

    function createData(Request $request)
    {
        Crud::create([
            'name'    => $request->name,
            'section' => $request->section,
            'age'     => $request->age,

        ]);

        $data = Crud::orderBy('id', 'asc')->get();

        return view('welcome', ['data' =>  $data]);
    }
}
