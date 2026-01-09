<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {
    // create an array of students  
    
    return view('students.index');
});

Route::get('/students/create', function () {
    return view('students.create');
});

Route::get('/students/{id}', function () {
    return view('students.show');
});

Route::get('/students/{id}/edit', function () {
    return view('students.edit');
});
