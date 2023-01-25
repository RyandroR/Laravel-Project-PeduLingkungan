<?php

use App\Models\Details;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ItemDetailController;

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
    return view('home', [
        "title" => "Home",
        "theme" => isset($_COOKIE["theme"])
    ]);
});


route::get('/donasi/{detail:slug}', [DetailController::class, 'show']);
Route::get('/shop', [ItemDetailController::class, 'index']);

Route::get('/donasi', [DonationController::class, 'index'])->middleware('auth');
Route::post('/donasi', [DonationController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

/*
route::get('/user/{user:slug}', function(User $user){
    return view('user')
});

Route::redirect("/h","/hr")
*/
