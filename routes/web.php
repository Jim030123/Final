<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;



Route::get('/', function () {
    return view('addClassroom');
});



