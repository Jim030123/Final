<?php

use App\Http\Controllers\SubjectController;

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


// subject


Route::post('/addSubject/store', [SubjectController::class, 'add'])->name('addSubject');



Route::get('/addSubject', [SubjectController::class, 'create'])->name('createSubject');

Route::get('/showSubject', [SubjectController::class, 'show'])->name('showSubject');
Route::get('/editSubject/{id}',[SubjectController::class,'edit'])->name('editSubject');

Route::post('/updateSubject', [SubjectController::class, 'update'])->name('updateSubject');
Route::get('/deleteSubject/{id}',[SubjectController::class,'delete'])->name('deleteSubject');

Route::get('/search_2',[SubjectController::class,'search_2'])->name('search_2');
