<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Category_controller;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [HomeController::class, 'allcategories']);

Route::get('/about', function(){
    return view('about2');
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
});

Route::get('/measure', function(){
    return view('measure2');
})->middleware('auth');

//Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [HomeController::class, 'allcategories']);

//Category
Route::get('/categories', [Category_controller::class, 'allcategories'])->middleware('auth');
Route::get('/category/{category:slug}', [Category_controller::class, 'show'])->middleware('auth');

Route::get('/post/{post:slug}', [PostController::class, 'show'])->middleware('auth');

// dashboard
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
