<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

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

Route::get('/test', [TestController::class, 'index'])->name('test');
Route::post('/users/create', [TestController::class, 'store'])->name('store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function () {
    return view('kivs.create');
});

Route::get('/kivs/list', function () {
    return view('kivs.list');
});
