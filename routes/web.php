<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;


Route::get('/addClassroom', function () {
    return view('addClassroom');
});

Route::post('/addClassroom/store', [ClassroomController::class, 'add'])->name('addClassroom');

Route::get('/showClassroom', [ClassroomController::class, 'show'])->name('showClassroom');

Route::get('/editClassroom/{id}', [ClassroomController::class, 'edit'])->name('editClassroom');
Route::post('/updateClassroom', [ClassroomController::class, 'update'])->name('updateClassroom');

Route::get('/deleteClassroom/{id}', [ClassroomController::class, 'delete'])->name('deleteClassroom');



Route::get('/search', [ClassroomController::class, 'search'])->name('search');
