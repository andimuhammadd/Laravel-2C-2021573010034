<?php

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
use App\Http\Controllers\admin\PageController;

Route::get('/', [PageController::class, 'index']);

Route::get('/mahasiswa', [PageController::class, 'tampil']);

Route::get('/coba-facade', [PageController::class, 'cobaFacade']);

Route::get('/coba-class', [PageController::class, 'cobaClass']);
