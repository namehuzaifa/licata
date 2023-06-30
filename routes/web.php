<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactQueryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin'], function(){
    Route::resource('testimonial', TestimonialController::class)->middleware('auth');
    Route::resource('service', ServiceController::class)->middleware('auth');
    Route::resource('blog', BlogController::class)->middleware('auth');
    Route::resource('faq', FaqController::class)->middleware('auth');
    Route::get('/contact-list', [ContactQueryController::class, 'index'])->name('contact-list')->middleware(['auth', 'verified']);
    Route::get('/newsletter-list', [NewsLetterController::class, 'index'])->name('newsletter-list')->middleware(['auth', 'verified']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard')->middleware(['auth', 'verified']);
});

Route::controller(UsersController::class)->group(function (){
    Route::get('user-create', 'create')->name('user-create')->middleware('auth');
    Route::post('user-create', 'store')->name('user-store')->middleware('auth');

    Route::get('user-edit/{id}', 'edit')->name('user-edit')->middleware(['auth']);
    Route::post('user-update/{id}', 'update')->name('user-update')->middleware(['auth']);

    Route::get('user-list', 'index')->name('user-list')->middleware('auth');
    Route::get('user-delete/{id}', 'destroy')->name('user-delete')->middleware('auth');

    Route::get('add-user-session/{id}', 'addSession')->name('add-user-session')->middleware('auth');
    Route::post('coaching-detail', 'coachingDetail')->name('coaching-detail')->middleware('auth');
});

Route::get('/error', function () {
    return view('errors.503');
});

Route::get('/newsletter', [NewsLetterController::class, 'store'])->name('newsletter');

Route::get('/',         [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact',  [HomeController::class, 'contact'])->name('contact');
Route::post('/contact-query', [ContactQueryController::class, 'store'])->name('contact-store');

Route::get('/products', [HomeController::class, 'services'])->name('services');
Route::get('/product-detail/{id}',  [HomeController::class, 'serviceDetail'])->name('service-detail');
Route::get('/blog',     [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-detail/{id}',     [HomeController::class, 'blogDetail'])->name('blog-detail');
Route::get('/faq',     [HomeController::class, 'faq'])->name('faq');
// Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth',])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
