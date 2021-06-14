<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountsController;
use App\Http\Controllers\SearchesController;
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

Route::redirect('/', 'counts');

Route::resource('counts', CountsController::class);

Route::get('search', [SearchesController::class, 'index']);

Route::post('result', [SearchesController::class, 'res']);

Route::get('/import-form', [SearchesController::class, 'importForm']);

Route::post('/import', [SearchesController::class, 'import'])->name('search.import');
