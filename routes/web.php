<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\crudController;
use Illuminate\Support\Facades\Route;


Route::get('/pages', function () {
    return view('pages.create');
})->name('CRUD.create.page');

Route::post('/crud', [crudController::class, 'createData'])->name('CRUD.create');

Route::get('/', [crudController::class, 'getData'])->name('CRUD.home');
