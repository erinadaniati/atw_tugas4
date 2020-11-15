<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BelijusController;


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

Route::get('/layout', function () {
    return view('layouts/layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about2', function () {
    return view('about2');
});

Route::get('/belijus', function () {
    return view('belijus');
});

Route::get('/belijus2', function () {
    return view('belijus2');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/testimoni2', function () {
    return view('testimoni2');
});

Route::get('/kontakkami', function () {
    return view('kontakkami');
});

Route::get('/kontakkami2', function () {
    return view('kontakkami2');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/admin', function () {
    return view('layouts/admin');
});

Route::get('about2', [HomeController::class, 'showAbout']);

Route::get('belijus2', [BelijusController::class, 'index']);
Route::get('belijus2/create', [BelijusController::class, 'create']);
Route::post('belijus2', [BelijusController::class, 'store']);
Route::get('belijus2/{belijus2}', [BelijusController::class, 'show']);
Route::get('belijus2/{belijus2}/edit', [BelijusController::class, 'edit']);
Route::put('belijus2/{belijus2}', [BelijusController::class, 'update']);
Route::delete('belijus2/{belijus2}', [BelijusController::class, 'destroy']);

Route::get('testimoni2', [HomeController::class, 'showTestimoni']);
Route::get('kontakkami2', [HomeController::class, 'showKontakKami']);
Route::get('login2', [AuthController::class, 'showLogin']);