<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/students', function () {

    // Create an array of students (static data)
    $students = [
        [
            'id' => 1,
            'name' => 'Juan Cruz',
            'course' => 'BS Information Science',
            'year' => '3rd Year'
        ],
        [
            'id' => 2,
            'name' => 'Maria Santos',
            'course' => 'BS Computer Science',
            'year' => '2nd Year'
        ]
    ];

    // Pass the data to the view
    return view('students.index', compact('students'));
});

Route::get('/students/create', function () {
    return view('students.create');
});

Route::get('/students/{id}', function ($id) {

    // Sample static student
    $student = [
        'id' => $id,
        'name' => 'Juan Cruz',
        'email' => 'juan@email.com',
        'course' => 'BS Information Science',
        'year' => '3rd Year'
    ];

    return view('students.show', compact('student'));
});

Route::get('/students/{id}/edit', function ($id) {

    // Sample static student
    $student = [
        'id' => $id,
        'name' => 'Juan Cruz',
        'email' => 'juan@email.com',
        'course' => 'BS Information Science',
        'year' => '3rd Year'
    ];

    return view('students.edit', compact('student'));
});
