<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UsersController;
use  App\Http\Controllers\PermissionController;
use  App\Http\Controllers\RecordController;
use  App\Http\Controllers\FileController;
use  App\Http\Controllers\FormController;
use  App\Http\Controllers\PageController;
use  App\Http\Controllers\DomainController;
use  App\Http\Controllers\PageRedirectController;

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



Route::resource('users',UsersController::class)->middleware('auth', 'Authenticate');
Route::resource('permission',PermissionController::class)->middleware('auth', 'Authenticate');    
Route::resource('records',RecordController::class)->middleware('auth', 'Authenticate');
Route::resource('forms',FormController::class)->middleware('auth', 'Authenticate'); 
Route::resource('files',FileController::class)->middleware('auth', 'Authenticate');  
Route::resource('pages',PageController::class)->middleware('auth', 'Authenticate');    


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/{host}',[PageRedirectController::class,'PageRedirect'])->middleware('page')->name('PageRedirect');