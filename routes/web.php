<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostersController;

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


Route::get("posts", [PostersController::class, "list"]);
Route::get("admin", [PostersController::class, "admin"]);
Route::post("admin", [PostersController::class, "addDeleteUpdate"]);



