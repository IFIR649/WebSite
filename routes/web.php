<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
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


Route::post('/submit-form', [ContactController::class, 'store'])->name('submit.form');

Route::get('/', function () {
    return view('index');
});

Route::get('index', function () {
    return view('index');
});

Route::get('lastProyect', function () {
    return view('myProjects');
});

Route::get('contact', function () {
    return view('contact');
})->name('contact') ;

Route::get('cv', function () {
    return view('cv');
});

Route::get('all', function () {
    return view('projects-compact-grid');
});
