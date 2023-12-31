<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\UserManagementController;

Route::get('/', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['auth', 'role:admin'], function () {
	Route::get('/dashboard-admin', [HomeController::class, 'dashboardadm'])->name('dashboard-admin');
	Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
	Route::get('/product/add', [ProductController::class, 'add'])->name('add');
    Route::get('/category/add', [CategoryController::class, 'add']) ->name('category-add');
	Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
	Route::post('/profile-contact', [UserProfileController::class, 'Contactupdate'])->name('contact.update');
	Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static');
	Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
	Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static');
	Route::get('/user-management', [UserManagementController::class, 'index'])->name('user-management');
	Route::get('/user-management/add', [UserManagementController::class, 'add'])->name('user-management.add');
	Route::post('/user-management/post', [UserManagementController::class, 'store'])->name('user-management.store');
	Route::get('/user-management/{id}/edit', [UserManagementController::class, 'edit'])->name('user-management.edit');
	Route::post('/user-management/update', [UserManagementController::class, 'update'])->name('user-management.update');
	Route::get('/user-management/{id}/detail', [UserManagementController::class, 'detail'])->name('user-management.detail');
	Route::delete('/user-management/{id}', [UserManagementController::class, 'destroy'])->name('user-management.destroy');

	//Product
	Route::get('/product', [PageController::class, 'product'])->name('product-index');
	Route::get('/product/add', [ProductController::class, 'add'])->name('product-add');
	Route::post('/product/post', [ProductController::class, 'store'])->name('product-store');

	//Category
    Route::get('/category', [PageController::class, 'category'])->name('category-index');
	Route::post('/category/post', [CategoryController::class, 'store'])->name('category-post');
	Route::get('/category/detail/{id}', [CategoryController::class, 'detail'])->name('category-detail');
	Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
	Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category-destroy');

	Route::get('/{page}', [PageController::class, 'index'])->name('page');
	Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['auth', 'role:user'], function() {
	Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
	Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
	Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
});
