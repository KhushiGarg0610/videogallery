<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\video_files;
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
Route::get('/videogallery', function () {
    return view('welcome');
});
Route::post("videoUploaded",[video_files::class,"post"]);
Route::get('gallery',[video_files::class,"index"]);