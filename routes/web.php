<?php

use App\Http\Controllers\berandaController;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\beritaController;
use App\Http\Controllers\visimisiController;
use App\Http\Controllers\sejarahController;
use App\Http\Controllers\pemdesController;
use App\Http\Controllers\palohbugakController;
use App\Http\Controllers\palohpanyangController;
use App\Http\Controllers\palohsawangController;
use App\Http\Controllers\cotteungeuhController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\informasidesaController;
use App\Http\Controllers\dusunController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [berandaController::class, 'beranda']);
Route::get('/tentang', [tentangController::class, 'tentang']);
Route::get('/informasi-desa', [informasidesaController::class, 'informasidesa']);
Route::get('/dusun', [dusunController::class, 'dusun']);
Route::get('/sejarah', [sejarahController::class, 'sejarah']);
Route::get('/visi-misi', [visimisiController::class, 'visiMisi']);
Route::get('/pemerintah-desa', [pemdesController::class, 'pemdes']);
Route::get('/agenda', [agendaController::class, 'agenda']);
Route::get('/berita', [beritaController::class, 'berita']);
Route::get('/produk', [produkController::class, 'produk']);
Route::get('/dusun/cot-teungoh', [cotteungeuhController::class, 'cotTeungoh']);
Route::get('/dusun/paloh-bugak', [palohbugakController::class, 'palohBugak']);
Route::get('/dusun/paloh-panyang', [palohpanyangController::class, 'palohPanyang']);
Route::get('/dusun/paloh-sawang', [palohsawangController::class, 'palohSawang']);
Route::get('/kontak', [kontakController::class, 'kontak']);