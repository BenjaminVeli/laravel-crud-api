<?php

use App\Http\Controllers\gradeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::get("/grades", [gradeController::class,"getAllGrades"])->name("");

Route::get('/students', [studentController::class, 'index']);

Route::get('/students/{id}', [StudentController::class,'show']);

Route::post('/students', [StudentController::class,'store']);

Route::patch('/students/{id}', [StudentController::class,'updatePartial']);

Route::put('/students/{id}', [  StudentController::class,'update']);

Route::delete('/students/{id}', [StudentController::class,'destroy']);