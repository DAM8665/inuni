<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UniversityController;
use App\Models\University;
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
    $title='Home';
    return view('index',compact('title'));
})->name('index');

Route::get('/auth', [AuthController::class,'showPage'])->name('auth');

Route::post('/sign', [AuthController::class,'sign'])->name('sign');

Route::get('/contact', function () {
    $title='Contact Us';
    return view('contact',compact('title'));
})->name('contact');

Route::resource('/universities', UniversityController::class)->only(['index','show']);

Route::get('/view-clear', function () {
    Artisan::call("view:clear");
    dd('view cache cleared!');
});
