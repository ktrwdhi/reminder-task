<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function(){
    Route::get('/', [dashboardController::class,"index"])->name("home");
    Route::get("/task/{id?}",[taskController::class,"index"]);
    Route::get("/subject",[subjectController::class,"index"]);
    Route::get('/subject/{id}', [subjectController::class, 'show'])->name('subject.show');
    Route::post("/logout",[userController::class,"logout"])->name("logout");
});
    
Route::middleware("guest")->group(function(){
    Route::get('/login',[userController::class,"indexLogin"])->name("login");
    Route::post("/login",[userController::class,"login"])->name("login.store");
});