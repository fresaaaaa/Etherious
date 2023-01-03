<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\AnimeController;
use App\Http\Controllers\User\DashboardUserController;
use App\Models\Anime;

// use App\Http\Controllers\User\HomeController;

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

Route::get('/cover', function () {
    return view('cover');
});

Route::get('/index', function () {
    return view('index', [
        'animes' => Anime::all()
    ]);
});

Route::get('/cover', function () {
    return view('cover');
});

// authentication
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

// Route Admin
Route::prefix('/dashboard-admin')->middleware('auth')->group(function () {
    // Dashboard Admin
    Route::get('/', [DashboardAdminController::class, 'index'])->name('dashboard-admin');
    Route::post('/update', [DashboardAdminController::class, 'update']);
    Route::post('/create', [AnimeController::class, 'store']);
});

// Route User
Route::prefix('/dashboard-user')->middleware('auth')->group(function () {
    // Dashboard User
    Route::get('/', [DashboardUserController::class, 'index'])->name('dashboard-user');
    Route::post('/update', [DashboardUserController::class, 'update']);
});

Route::get('/dashboard-admin.home', function () {
    return view('dashboard-admin.home.index');
})->middleware('auth');

Route::get('/dashboard-user.home', function () {
    return view('dashboard-user.home.index');
})->middleware('auth');

Route::get('/animeongoing', function () {
    return view('animeongoing.index');
});

Route::get('/animeterbaik', function () {
    return view('animeterbaik.index');
});

Route::get('/animeterpopuler', function () {
    return view('animeterpopuler.index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/detail', function () {
    return view('detail', [
        'animes' => Anime::all()
    ]);
});

Route::get('/musim', function () {
    return view('musim');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/genre', function () {
    return view('genre');
});

Route::get('/category', function () {
    return view('category');
});
