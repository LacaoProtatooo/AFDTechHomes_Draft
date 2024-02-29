<?php

use Illuminate\Support\Facades\Route;

// Classes
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;

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

/*  Routing FORMAT

    get Request from /home 
    index method of HomeController class
    (dont forget to add use/app/http/controllers/name-of-your-controller)

    ->name(<module>.<action>);
    naming convention used to identify routes and corresponding controllers and actions

    @ - Seperator between controller name and method name
*/

// Homepopulate
Route::get('/', [PropertyController::class, 'homepopulate'])->name('home');

// LOGIN & LOGOUT
Route::get('/login', [LoginController::class, 'loginpage'])->name('login.loginpage');
Route::post('/home', [LoginController::class, 'login'])->name('login.submit');
Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->name('logout');

// SIGNUP
Route::get('/register/{role}', [LoginController::class, 'signup'])->name('signup.show');
Route::post('/register/{role}', [LoginController::class, 'signupuser'])->name('signup.submit');

Route::get('/agents', [AgentController::class, 'index'])->name('agent.home');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.home');

// Admin
Route::get('/admin/dashboard', [Admincontroller::class, 'index'])->name('admin.dashboard');

// Customer
Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');

// Agent
Route::get('/agent/dashboard', [AgentController::class, 'index'])->name('agent.dashboard');

// Property
Route::get('/property/create', [PropertyController::class, 'create'])->name('property.create');
Route::post('/property/store', [PropertyController::class, 'store'])->name('property.store');
Route::get('/property/{id}/edit', [PropertyController::class, 'edit'])->name('property.edit');
Route::post('/property/{id}/update', [PropertyController::class, 'update'])->name('property.update');
Route::get('/property/{id}/delete', [PropertyController::class, 'delete'])->name('property.delete');

Route::get('/property/info', [PropertyController::class, 'propertyinfo'])->name('property.info');

