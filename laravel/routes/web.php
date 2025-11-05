<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello",function(){
    return "Merhabalar";
});

Route::get("/goodmorning/{isim}",function($isim){
    return "günaydın " .$isim ;
});
