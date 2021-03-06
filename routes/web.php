<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\PrivateController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PublicController::class, 'index'])->name('public.index');
Route::get('/show/{id}', [PublicController::class, 'show'])->name('public.show');

Route::get('/home', [PrivateController::class, 'home'])
    ->name('private.home')->middleware('auth');
Route::get('/details/{id}', [PrivateController::class, 'details'])
    ->name('private.details')->middleware('auth');

Route::get('/edit/{id}', [PrivateController::class, 'edit'])
    ->name('private.edit')->middleware('auth');
Route::post('/edit/{id}', [PrivateController::class, 'update'])
    ->name('private.update')->middleware('auth');

Route::post('/delete/{id}', [PrivateController::class, 'delete'])
    ->name('private.delete')->middleware('auth');

Route::get('/create', [PrivateController::class, 'create'])
    ->name('private.create')->middleware('auth');
Route::post('/create', [PrivateController::class, 'store'])
    ->name('private.store')->middleware('auth');

Route::get('/admin', function (){
    return view('admin.index');
})->name('admin')->middleware('role:admin');

Route::get('/admin/categories', [CategoryController::class, 'index'])
    ->name('admin.categories')->middleware('role:admin');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])
    ->name('admin.categories.create')->middleware('role:admin');
Route::post('/admin/categories/create', [CategoryController::class, 'store'])
    ->name('admin.categories.store')->middleware('role:admin');

Route::get('/admin/ingredients', [IngredientController::class, 'index'])
    ->name('admin.ingredients')->middleware('role:admin');
Route::get('/admin/ingredients/add', [IngredientController::class, 'add'])
    ->name('admin.ingredients.add')->middleware('role:admin');
Route::post('/admin/ingredients/add', [IngredientController::class, 'store'])
    ->name('admin.ingredients.store')->middleware('role:admin');

Route::get('/admin/users', [UserController::class, 'index'])
    ->name('admin.users')->middleware('role:admin');
Route::post('/admin/users/delete', [UserController::class, 'delete'])
    ->name('admin.users.delete')->middleware('role:admin');
Route::post('/admin/users/promote', [UserController::class, 'promote'])
    ->name('admin.users.promote')->middleware('role:admin');

require __DIR__.'/auth.php';
