<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginAdminController;



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
    return view('Dashboard.index');
});


Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/mapel', [MapelController::class, 'index'])->name('mapel')->middleware('auth');

Route::get('/Createmapel', [MapelController::class, 'Createmapel'])->name('Createmapel');

Route::post('/insertmapel', [MapelController::class, 'insertmapel'])->name('insertmapel');

Route::get('/editmapel/{id}', [MapelController::class, 'editmapel'])->name('editmapel');

Route::post('/Updatemapel/{id}', [MapelController::class, 'Updatemapel'])->name('Updatemapel');

Route::get('/deleteMapel/{id}', [MapelController::class, 'deleteMapel'])->name('deleteMapel');

Route::get('/search', [MapelController::class, 'search'])->name('search');


// route kelas

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas')->middleware('auth');

Route::get('/Createkelas', [KelasController::class, 'Createkelas'])->name('Createkelas');

Route::post('/insertkelas', [KelasController::class, 'insertkelas'])->name('insertkelas');

Route::get('/editkelas/{id}', [KelasController::class, 'editkelas'])->name('editkelas');

Route::post('/Updatekelas/{id}', [KelasController::class, 'Updatekelas'])->name('Updatekelas');

Route::get('/deleteKelas/{id}', [KelasController::class, 'deleteKelas'])->name('deleteKelas');

// route siswa

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa')->middleware('auth');

Route::get('/Createsiswa', [SiswaController::class, 'Createsiswa'])->name('Createsiswa');

Route::post('/insertsiswa', [SiswaController::class, 'insertsiswa'])->name('insertsiswa');

Route::get('/editsiswa/{id}', [SiswaController::class, 'editsiswa'])->name('editsiswa');

Route::post('/Updatesiswa/{id}', [SiswaController::class, 'Updatesiswa'])->name('Updatesiswa');

Route::get('/deleteSiswa/{id}', [SiswaController::class, 'deleteSiswa'])->name('deleteSiswa');

// route login
    
Route::get('/loginAdmin', [LoginAdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/loginAction', [LoginAdminController::class, 'loginAction'])->name('loginAction');

Route::get('/registerAdmin', [LoginAdminController::class, 'registerAdmin'])->name('registerAdmin');
Route::post('/registerAction', [LoginAdminController::class, 'registerAction'])->name('registerAction');

Route::post('/logout', [LoginAdminController::class, 'logout'])->name('logout');

// route excel

Route::post('/importExcel', [SiswaController::class, 'importExcel'])->name('importExcel');
