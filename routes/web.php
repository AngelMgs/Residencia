<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UsersController;
use  App\Http\Controllers\PermissionController;
use  App\Http\Controllers\RecordController;
use  App\Http\Controllers\FileController;
use  App\Http\Controllers\FormController;
use  App\Http\Controllers\Form2Controller;
use  App\Http\Controllers\Form3Controller;
use  App\Http\Controllers\PageController;
use  App\Http\Controllers\DomainController;
use  App\Http\Controllers\PageRedirectController;
use  App\Http\Controllers\EventController;
use  App\Http\Controllers\NewsController;

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
    return redirect('estudiantes');
});



Route::resource('users',UsersController::class)->middleware('auth', 'Authenticate');
Route::resource('permission',PermissionController::class)->middleware('auth', 'Authenticate');    
Route::resource('records',RecordController::class)->middleware('auth', 'Authenticate');
Route::resource('forms',FormController::class)->middleware('auth', 'Authenticate'); 
Route::resource('forms2',Form2Controller::class)->middleware('auth', 'Authenticate');
Route::resource('forms3',Form3Controller::class)->middleware('auth', 'Authenticate'); 
Route::resource('files',FileController::class)->middleware('auth', 'Authenticate');  
Route::resource('pages',PageController::class)->middleware('auth', 'Authenticate');  
Route::resource('events',EventController::class)->middleware('auth', 'Authenticate');  
Route::resource('news',NewsController::class)->middleware('auth', 'Authenticate');   


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/estudiantes', [App\Http\Controllers\HomeController::class, 'indexEstudiantes'])->name('student');
Route::get('/eventos', [App\Http\Controllers\HomeController::class, 'indexEventos'])->name('eventos');
Route::get('/reset/{id}', [App\Http\Controllers\ResetPaswordController::class, 'index'])->name('reset');
Route::post('/resetpasword/{id}', [App\Http\Controllers\ResetPaswordController::class, 'resetpasword'])->name('resetpasword');


Route::get('/pdf/{id}', [App\Http\Controllers\PDFController::class, 'generatepdf'])->name('pdf');

Route::get('/hhh', function () {
   return view('form-pr7.index.prueba'); 
});

Route::post('validation',[UsersController::class,'validation'])->middleware('auth', 'Authenticate')->name('validation');