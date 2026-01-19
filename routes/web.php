<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\crudController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;
use App\Models\Crud;


Route::get('/pages', function () {
    return view('pages.create');
})->name('CRUD.create.page');

Route::post('/crud', [crudController::class, 'createData'])->name('CRUD.create');

Route::get('/', [crudController::class, 'getData'])->name('CRUD.home');

Route::get(
    '/edit/{id}',
    function ($id) {
        $user = DB::table('cruds')->where('id', '=', $id)->get()->first();

        // return response()->json([
        //     'success' => !!$user,
        //     'data' => $user,
        //     'id_requested' => $id
        // ]);

        return view('pages.update', compact('user'));
    }
)
->name('CRUD.edit');

Route::put('/crud.save/{id}', [crudController::class, 'editData'])->name('CRUD.edit.save');

Route::delete('/crud.save/{id}', [crudController::class, 'deleteData'])->name('CRUD.delete');
