<?php

use App\Http\Controllers\subjectController;
use App\Http\Controllers\taskController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('index');
});
Route::get("/task",[taskController::class,"index"]);
Route::get("/subject",[subjectController::class,"index"]);
Route::get('/subject/{id}', [subjectController::class, 'show'])
    ->name('subject.show');