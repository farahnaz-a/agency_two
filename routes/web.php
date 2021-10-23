<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
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

Route::get('/', function () {
    return view('frontend.index');
});
// Route::get('/admin', function () {
//     return view('admin.index');
// });
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){


    // Admin Controller
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Banner Controller
    Route::resource('banners', BannerController::class);

    // Service Controller
    Route::resource('services', ServiceController::class);

    // Testimonial Controller
    Route::resource('testimonials', TestimonialController::class);

    // Clinet Controller
    Route::resource('clients', ClientController::class);

    // About Controller
    Route::resource('abouts', AboutController::class);

    // Choose Controller
    Route::resource('chooses', ChooseController::class);



});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
