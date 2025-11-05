<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======

Route::get("/hello",function(){
    return "Merhabalar";
});

Route::get("/goodmorning/{isim}",function($isim){
    return "günaydın " .$isim ;
});
>>>>>>> 89f4e97 (Thaer_ALODEH)
