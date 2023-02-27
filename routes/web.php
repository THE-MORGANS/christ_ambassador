<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\viewController;
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
    return view('pages.user.index');
});

// Route::get('/');
Route::controller(AuthController::class)->group(function(){
    Route::post("adminlogin", "adminlogin");
    Route::get('logout', 'logout');
});


Route::controller(viewController::class)->group(function(){
   Route::get('paystack/{ref}', 'paystack_verify');
   Route::get('blogs', 'blogs');
   Route::post('search', 'search');
});
