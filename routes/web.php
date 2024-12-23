<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestsListController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\RegisterController;
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
    return view('index');
})->name('root');

Route::post('/', [RequestController::class, 'store'])->name('request.store');

Route::get('/request', [RequestController::class, 'index'])->name('requests.list');
Route::get('/requests', [RequestsListController::class, 'index'])->name('list');


Route::get('/login', [UserController::class, 'loginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.post');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('auth.register');



Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks');
Route::post('/feedbacks', [FeedbackController::class, 'store'])->name('feedbacks.store');


Route::get('/admin', [AdminController::class, 'index'])->name('admin');




