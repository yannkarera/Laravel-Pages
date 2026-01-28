<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;


Route::get('/', [ExampleController::class, "homepage"]); 
Route::get('/about', [ExampleController::class, "AboutPage"]);
Route::post('/register', [UserController::class, "register"]); 
Route::post('/login', [UserController::class, "login"]);
Route::post('/logout', [UserController::class, "logout"]);
Route::get('/welcome', [UserController::class, "showConnectedHomepage"]);

Route::middleware('auth')->group(function () {
    Route::get('/posts/create', [PostController::class, 'create']);
    Route::post('/posts', [PostController::class, 'store']);
});








