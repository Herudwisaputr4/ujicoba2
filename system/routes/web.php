<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/deswita', function () {
    return "Saya Deswita Mutia Putri";
});

Route::get('/jodoh', function () {
    return "kami adalah jodoh";
});

Route::get('/heru', function () {
    return "Saya Heru Dwi Saputra";
});