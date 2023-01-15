<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PerdaController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//perda1
Route::post('create', [PerdaController::class, 'StorePerdagangan1'])->middleware(['auth'])->name('perda1');
Route::get('create/regency', [PerdaController::class, 'CreateRegency'])->middleware(['auth'])->name('perda1.regency');
Route::get('create/province', [PerdaController::class, 'CreateProvince'])->middleware(['auth'])->name('perda1.province');
Route::get('create/distric', [PerdaController::class, 'CreateDistric'])->middleware(['auth'])->name('perda1.distric');
Route::get('create/village', [PerdaController::class, 'CreateVillage'])->middleware(['auth'])->name('perda1.village');

Route::post('create/regency/store', [PerdaController::class, 'StoreRegency'])->middleware(['auth'])->name('perda1.regency.store');
Route::post('create/distric/store', [PerdaController::class, 'StoreDistric'])->middleware(['auth'])->name('perda1.distric.store');
Route::post('create/village/store', [PerdaController::class, 'StoreVillage'])->middleware(['auth'])->name('perda1.village.store');
Route::post('create/province/store', [PerdaController::class, 'StoreProvince'])->middleware(['auth'])->name('perda1.province.store');