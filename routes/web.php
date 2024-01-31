<?php

use App\Http\Controllers\servicesController;
use App\Models\Service;
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
Route::get('/', [ServicesController::class, 'index'])->name("services.index");
Route::get('/services', [ServicesController::class, 'index'])->name("services.index");
Route::get('/services/create', [ServicesController::class, 'create']);
Route::post('/services', [servicesController::class, 'store'])->name("services.store");