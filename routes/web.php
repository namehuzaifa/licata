<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsLetterController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/error', function () {
    return view('errors.503');
});

Route::get('/newsletter', [NewsLetterController::class, 'store'])->name('newsletter');

Route::get('/',         [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact',  [HomeController::class, 'contact'])->name('contact');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/service',  [HomeController::class, 'innerService'])->name('innerService');
Route::get('/blog',     [HomeController::class, 'blog'])->name('blog');
