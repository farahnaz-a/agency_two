<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitleSettingController;
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

Route::get('/',  [FrontendController::class, 'index'])->name('home');
Route::post('/message-save', [FrontendController::class, 'messageSave'])->name('message.store');
 
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){


    // Admin Controller
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/list-user', [AdminController::class, 'indexUser'])->name('user.index');
    Route::get('/create-user', [AdminController::class, 'createUser'])->name('user.create');
    Route::post('/store-user', [AdminController::class, 'storeUser'])->name('user.store');
    Route::post('/delete-user', [AdminController::class, 'deleteUser'])->name('user.destroy');

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
    
    // Social Controller
    Route::resource('socials', SocialController::class);

    // Contact Controller
    Route::resource('contacts', ContactController::class);

    // TitleSetting Controller
    Route::resource('titleSettings', TitleSettingController::class);

    // Setting Controller
    Route::resource('settings', SettingController::class);

    // Color Controller
    Route::resource('colors', ColorController::class);


});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
