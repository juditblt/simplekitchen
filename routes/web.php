<?php

use App\Http\Controllers\PrivateController;
use App\Http\Controllers\PublicController;
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
Route::get('details{id}', [PublicController::class, 'details'])->name('public.details');

Route::get('/home', [PrivateController::class, 'home'])
    ->name('private.home')->middleware(['auth']);
Route::get('details{id}', [PrivateController::class, 'details'])
    ->name('private.details')->middleware(['auth']);

Route::get('/create', [PrivateController::class, 'create'])
    ->name('private.create')->middleware('auth');
Route::post('/create', [PrivateController::class, 'store'])
    ->name('private.store')->middleware('auth');


require __DIR__.'/auth.php';
