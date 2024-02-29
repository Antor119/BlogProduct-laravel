<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

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
Route::get('/blog',[BlogController::class,'index']);
Route::get('/blog1',[BlogController::class,'index1']);
Route::get('/blog2',[BlogController::class,'index2']);
Route::get('/blog3',[BlogController::class,'index3']);
