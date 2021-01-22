<?php

use App\Http\Controllers\GuimailController;
use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use App\Models\theloai;
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

Route::get('/', [TinController::class, 'index']);
// Route::get('/test', function () {
//     $kq = theloai::all();
//     print_r($kq);
// });
Route::get('/ttl', [TinController::class, 'tintrongloai']);
Route::get('ctt/{id}', [TinController::class, 'chitiettin']);
Route::get('ttl/{id}', [TinController::class, 'tintrongloai']);
Route::get('lienhe/', [TinController::class, 'lienhe']);
Route::post('lienhe/', [GuimailController::class, 'guimaillienhe']);
