<?php

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
use App\Http\Controllers\loginController;
use App\Http\Controllers\customer_controller;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\account_controller;
use App\Http\Controllers\sales_controller;

Route::get('/login', [loginController::class, 'login']);
Route::get('/admin_profile', [loginController::class, 'onSelect']);


//route for custormer data insert
Route::get('/add', [customer_controller::class, 'add']);
Route::get('/add_user', [customer_controller::class, 'onInsert']);

//route for admin data insert
Route::get('/add', [admin_controller::class, 'add']);
Route::get('/add_accountent', [admin_controller::class, 'onInsert']);

//route for accountan data insert
Route::get('/add', [account_controller::class, 'add']);
Route::get('/add_salesman', [account_controller::class, 'onInsert']);

//route for salesman data insert
Route::get('/add', [sales_controller::class, 'add']);
Route::get('/add_admin', [sales_controller::class, 'onInsert']);