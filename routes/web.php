<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[BlogController::class,'index']);




Route::get('/blogs/{blog:slug}', [BlogController::class,'show']);

Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);


Route::get('/about', function(){
    return view('blogs.about');
});

Route::get('/home',function(){
    return view('blogs.home');
});