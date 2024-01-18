<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\Category\CategoryController;
use App\Http\Controllers\Backend\Brand\BrandController;

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





Route::get('/', [HomeController::class, 'master'])->name('admin.master');

Route::get('/user-list', [UserController::class, 'userList'])->name('users.list');
Route::get('/create-new-user-form', [UserController::class, 'CreateNewUserForm'])->name('create.new.user.form');
Route::post('/users-post', [UserController::class, 'userPost'])->name('users.store');

Route::get('/categories-list', [CategoryController::class, 'categoriesList'])->name('categories.list');
Route::get('/create-new-category-form', [CategoryController::class, 'createNewCategoryForm'])->name('create.new.category.form');
Route::post('/category-post', [CategoryController::class, 'categoryPost'])->name('category.post');

Route::get('/brands-list', [BrandController::class, 'brandList'])->name('brand.list');
Route::get('/create-new-brand-form', [BrandController::class, 'CreateNewBrandForm'])->name('create.new.brand.form');
Route::post('/brand-post', [BrandController::class, 'brandPost'])->name('brand.store');
