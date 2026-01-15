<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    //
    protected $fillable = ['name', 'section', 'age']; // columns that only asigned
    protected $guarded = ['year']; // this will be ignore

    use HasFactory;
}
