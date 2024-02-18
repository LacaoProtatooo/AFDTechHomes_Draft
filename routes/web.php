<?php

use Illuminate\Support\Facades\Route;

// Classes
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

/*  Routing FORMAT

    get Request from /home 
    index method of HomeController class
    (dont forget to add use/app/http/controllers/name-of-your-controller)

    ->name(<module>.<action>);
    naming convention used to identify routes and corresponding controllers and actions
*/

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/login', [AuthController::class, 'login'])->name('login.login'); 
Route::get('/signup', [AuthController::class, 'signup'])->name('login.signup');

