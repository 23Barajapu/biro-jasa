<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/', [HomeController::class , 'index'])->name('index');
Route::get('/about', [HomeController::class , 'about'])->name('about');
Route::get('/contact', [HomeController::class , 'contact'])->name('contact');
Route::get('/service', [HomeController::class , 'service'])->name('service');

// Optional: Add other routes referenced in the template
Route::get('/blog-details', function () {
    return view('index');
})->name('blogDetails');
Route::get('/team-details', function () {
    return view('index');
})->name('teamDetails');
Route::get('/project-details', function () {
    return view('index');
})->name('projectsDetails');
