<?php

use App\Http\Controllers\DonorController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/frontend/index', function () {
    return view('frontend.index');
});

Route::post('/frontend/donor/store', [DonorController::class, 'store'])->name('donor.store');
Route::get('/frontend/donor/create', [DonorController::class, 'create'])->name('donor.create');