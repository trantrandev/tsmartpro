<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
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
require __DIR__.'/auth.php';

Route::get('dashboard', [DashboardController::class, 'show'])->middleware(['auth'])->name('dashboard');
Route::get('admin', [DashboardController::class, 'show'])->middleware(['auth'])->name('dashboard');
//LOGOUT
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');

Route::get('admin/user/list', [AdminUserController::class, 'show'])->name('user.list');
Route::get('admin/user/add', [AdminUserController::class, 'add'])->name('user.add');