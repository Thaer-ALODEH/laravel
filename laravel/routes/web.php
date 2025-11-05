<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 5b1d2e041870b02580c18d6b5b363e83d705a7ce

Route::get("/hello",function(){
    return "Merhabalar";
});

Route::get("/goodmorning/{isim}",function($isim){
    return "günaydın " .$isim ;
});
<<<<<<< HEAD
=======
>>>>>>> 89f4e97 (Thaer_ALODEH)
>>>>>>> 5b1d2e041870b02580c18d6b5b363e83d705a7ce
