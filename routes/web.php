<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogController;
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


Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('member', function () {
    return view('member');
})->name('member');

// Route::get('blog', function () {
//     return view('blog');
// })->name('blog');
Route::get('blog', [BlogController::class, 'show'])->name('blog');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('signup', function () {
    return view('signup');
})->name('signup');

Route::post('login', [LoginController::class, 'authenticate']);
Route::post('signup', [RegisterController::class, 'store']);
Route::post('blog', [BlogController::class, 'store']);

Route::get('logout', [LoginController::class, 'logout'])->name('logout');



// Route::get('welcome', function () {
//     return view('welcome');
// });