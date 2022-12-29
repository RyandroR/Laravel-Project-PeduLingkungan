<?php

use App\Models\Details;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\RegisterController;


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

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "theme" => $_COOKIE["theme"]
    ]);
});

Route::get('/map', function () {
    return view('map', [
        "title" => "Map",
        "theme" => $_COOKIE["theme"]
    ]);
});
 
Route::get('/donasi', [DetailController::class, 'index']);

route::get('/donasi/{detail:slug}', [DetailController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
/*
route::get('/user/{user:slug}', function(User $user){
    return view('user')
});

Route::redirect("/h","/hr")
*/
