<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/',[TaskController::class, 'index']);
Route::post('/store', [TaskController::class, 'store']);
Route::get('/details/{task}', [TaskController::class, 'getDataByID']);

Route::get('/delete/{task}', [TaskController::class, 'destroy']);
Route::get('/update/{task}', [TaskController::class, 'edit']);
Route::post('/update/{task}/edit', [TaskController::class, 'update']);
