<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PekerjaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PerpustakaanController;


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

// Pekerja
Route::get('/pekerja',[PekerjaController::class, 'index'])->name('pekerja');

Route::get('/tambahpekerja',[PekerjaController::class, 'tambahpekerja'])->name('tambahpekerja');

Route::post('/insertdata',[PekerjaController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}',[PekerjaController::class, 'tampilkandata'])->name('tampilkandata');

Route::put('/updatedata/{id}',[PekerjaController::class, 'updatedata'])->name('updatedata');

Route::delete('/deletedata/{id}',[PekerjaController::class, 'deletedata'])->name('deletedata');

// Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

Route::get('/tambahsiswa', [SiswaController::class, 'tambahsiswa'])->name('tambahsiswa');
Route::post('/insertdatasiswa', [SiswaController::class, 'insertdatasiswa'])->name('insertdatasiswa');

Route::get('/tampilkandatasiswa/{id}', [SiswaController::class, 'tampilkandatasiswa'])->name('tampilkandatasiswa');
Route::post('/updatedatasiswa/{id}', [SiswaController::class, 'updatedatasiswa'])->name('updatedatasiswa');

Route::get('/deletedatasiswa/{id}', [SiswaController::class, 'deletedatasiswa'])->name('deletedatasiswa');

// perpustakaan
Route::get('/perpustakaan', [PerpustakaanController::class, 'index'])->name('perpustakaan');

Route::get('/tambahperpustakaan', [PerpustakaanController::class, 'tambahperpustakaan'])->name('tambahperpustakaan');

Route::post('/insertperpustakaan', [PerpustakaanController::class, 'insertperpustakaan'])->name('insertperpustakaan');

Route::get('/tampilkandataperpustakaan/{id}', [PerpustakaanController::class, 'tampilkandataperpustakaan'])->name('tampilkandataperpustakaan');

Route::post('/updateperpustakaan/{id}', [PerpustakaanController::class, 'updateperpustakaan'])->name('updateperpustakaan');

Route::get('/deleteperpustakaan/{id}', [PerpustakaanController::class, 'deleteperpustakaan'])->name('deleteperpustakaan');
