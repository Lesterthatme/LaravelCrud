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
        //without validation
        Crud::create([
            'name'    => $request->name,
            'section' => $request->section,
            'age'     => $request->age,

        ]);

        $data = Crud::orderBy('id', 'asc')->get();

        return view('welcome', ['data' =>  $data]);
    }

    function editData(Request $request, $id)
    {

        $specificData = Crud::find($id);

        $specificData->name = $request->name;
        $specificData->section = $request->section;
        $specificData->age = $request->age;

        if (!$specificData->isDirty()) {
            return redirect()->back()->with('info', 'no changes detected.');
        }

        $specificData->save();
        
        // $data = Crud::orderBy('id', 'asc')->get();
        // return view('welcome', compact('data'));

        return redirect()->route('CRUD.home')->with('success', 'Updated!');
    }

    function deleteData($id)
    {
        Crud::findOrFail($id)->delete();

        return redirect()->route('CRUD.home')->with('success', 'deleted!');
    }
}
