<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-post',[PostController::class,'addPost']);
Route::post('/create_post',[PostController::class,'createPost'])->name('post.create');

Route::get('/posts',[PostController::class,'getPosts']);

Route::get('/posts/{id}',[PostController::class,'getPostById']);


Route::get('/delete-post/{id}',[PostController::class,'deletePost']);


Route::get('/edit-post/{id}',[PostController::class,'editPost']);
Route::post('/update_post/{id}',[PostController::class,'updatePost'])->name('post.update');

