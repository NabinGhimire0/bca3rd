<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//
// Route::resource('student',StudentController::class);

//
Route::get('student',function(){
    return view('pages.Student.create');
});