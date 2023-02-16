<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Models\Upload;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Spatie\Permission\Models\Role;

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
    return view('auth.login');
});

Route::middleware(['auth','role:admin|user'])->controller(RoleController::class)->group(function () {
    Route::get('user','index')->name('user');
    Route::get('dashboard', 'admin')->name('dashboard');
    Route::get('home', 'users')->name('home');
});

// Route::middleware('auth')->controller(RoleController::class)->group(function () {
//     Route::get('home', 'users')->name('home');
//     Route::get('dashboard', 'admin')->name('dashboard');
//     route::get('user', 'index')->name('user');
// });


// Route::middleware(['auth','role:user'])->controller(RoleController::class)->group(function () {
//     Route::get('home', 'users')->name('home');
// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

#Route::resource('upload', UploadController::class);

Route::middleware('auth')->group(function () {
    Route::resource('upload', UploadController::class);
});

Route::middleware('auth')->group(function () {
    Route::resource('user', UserController::class);
});

require __DIR__.'/auth.php';