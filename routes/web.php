<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RepasController;
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

Route::get('/',[HomeController::class, 'index']);

Route::get('/menu',[HomeController::class, 'menu']);

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::get('/users', [AdminController::class, 'user']);

Route::get('/delete/{id}', [AdminController::class, 'deleteUser']);

Route::get('/deleteRepas/{id}', [AdminController::class, 'deleteRepas']);

Route::get('/repas', [AdminController::class, 'repas']);

Route::get('/addrepas', [AdminController::class, 'addrepas']);

Route::post('/uploadfood', [AdminController::class, 'upload']);

Route::post('/reservation', [AdminController::class, 'reservation']);

Route::get('/voirReservation', [AdminController::class, 'voirReservation']);

Route::get('/editRepas/{id}', [AdminController::class, 'editRepas']);

Route::post('/update/{id}', [AdminController::class, 'update']);

Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

Route::get('/showcart/{id}', [HomeController::class, 'showcart']);

Route::get('/remove/{id}', [HomeController::class, 'remove']);

Route::post('/orderconfirm', [HomeController::class, 'orderconfirm']);

Route::get('/commandes', [AdminController::class, 'commandes']);

Route::get('/decrement/{id}', [HomeController::class, 'decrementQuantity']);

Route::get('/increment/{id}', [HomeController::class, 'incrementQuantity']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
