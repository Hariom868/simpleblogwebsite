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


Route::resource('posts', PostController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $employeeData = DB::table('posts')->paginate(6);
    return view('dashboard', compact('employeeData'));
})->name('dashboard');
Route::middlewn0are(['auth:sanctum', 'verified'])->get('/editblog', function () {
    $data = DB::table('posts')->paginate(6); 
    return view('posts.index',compact('data'));
})->name('editblog');
Route::middleware(['auth:sanctum', 'verified'])->get('/addblog', function () {
    return view('addblog');
})->name('addblog');
