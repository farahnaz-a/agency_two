<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
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
    //Banner Controller
    Route::resource('banners', BannerController::class);



});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
