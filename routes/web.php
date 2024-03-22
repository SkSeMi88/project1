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


// Route::get('/test', [TestController::class, 'index'])->name('test');
// Route::post('/test', [TestController::class, 'store'])->name('users.store');

Route::get('/users/create', [TestController::class, 'index'])->name('users.create');
Route::post('/users/create', [TestController::class, 'store'])->name('users.store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test2', function () {
    return view('kivs.test');
});

Route::get('/create', function () {
    return view('kivs.create');
});

Route::get('/kivs/list', function () {
    return view('kivs.list');
});
