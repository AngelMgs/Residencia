<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UsersController;
use  App\Http\Controllers\PermissionController;
use  App\Http\Controllers\RecordController;
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
    return redirect('login');
});

Route::get('/formato-pr7', function () {
    return view('form-pr7.HDD1-PR7');
});

Route::resource('users',UsersController::class)->middleware('auth', 'Authenticate');
Route::resource('permission',PermissionController::class)->middleware('auth', 'Authenticate');    
Route::resource('records',RecordController::class)->middleware('auth', 'Authenticate');    


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


