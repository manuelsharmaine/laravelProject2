<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\UserController;
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


Route::get('/users', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'store']);
Route::resource('/posts', PostController::class);