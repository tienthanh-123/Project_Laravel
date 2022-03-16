<?php

use App\Http\Controllers\AccountController;
use App\Models\Account;
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
    return view('welcome');
});

Route::get('/login',[AccountController::class,'login']);
Route::get('/register',[AccountController::class,'register']);
Route::get('/main',[AccountController::class,'main']);

Route::post('/register-progress', [AccountController::class, 'register_controller']) -> name('register-progress');
Route::post('/login-progress', [AccountController::class, 'login_controller']) -> name('login-progress');