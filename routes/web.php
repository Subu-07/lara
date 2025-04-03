<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    return view('jobs',['jobs'=>[
        ['id'=>1,'job'=>'Web Developer'],
        ['id'=>2,'job'=>'Software Engineer'],
        ['id'=>3,'job'=>'Network Engineer'],
        ['id'=>5,'job'=>'Database Administrator'],
        ['id'=>6,'job'=>'System Analyst'],
    ]]);
});
Route::get('/contact', function () {
    return view('contact');
});
