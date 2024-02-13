<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostsController;

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


Route::get('/test1', function () {
    return view('test1');
});

#Post一覧を表示
Route::get('/posts', [PostsController::class,'index']); 





