<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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


Route::middleware('auth')->prefix('admin')->group(function () {
    Route::view('/', 'dashboard');
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('artikel','\App\Http\Controllers\Admin\ArtikelController');

    // PROFIL
    Route::prefix('profil')->group(function() {
        Route::get('/',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'index'])->name('admin.profil-prodi.index');
        Route::get('edit',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'edit'])->name('admin.profil-prodi.edit');
        Route::post('edit/visi',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateVisi'])->name('admin.profil-prodi.update-visi');
        Route::post('edit/misi',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateMisi'])->name('admin.profil-prodi.update-misi');
        Route::post('edit/tujuan',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateTujuan'])->name('admin.profil-prodi.update-tujuan');
        Route::get('struktur-organisasi', [\App\Http\Controllers\Admin\ProfilProdiController::class, 'indexStrukturOrg'])->name('admin.profil-prodi.struktur');
        Route::post('struktur-organisasi/update-kaprodi', [\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateKaprodi'])->name('admin.profil-prodi.struktur.update-kaprodi');
        Route::post('struktur-organisasi/update-sekprodi', [\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateSekprodi'])->name('admin.profil-prodi.struktur.update-sekprodi');
        Route::post('struktur-organisasi/update-bagan', [\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateBagan'])->name('admin.profil-prodi.struktur.update-bagan');

        Route::prefix('lulusan')->group(function() {
            Route::get('/', [\App\Http\Controllers\Admin\ProfilLulusanController::class, 'index'])->name('admin.profil.lulusan.index');
            Route::post('/', [\App\Http\Controllers\Admin\ProfilLulusanController::class, 'store'])->name('admin.profil.lulusan.store');
            Route::get('{id}/edit', [\App\Http\Controllers\Admin\ProfilLulusanController::class, 'edit'])->name('admin.profil.lulusan.edit');
            Route::post('{id}', [\App\Http\Controllers\Admin\ProfilLulusanController::class, 'update'])->name('admin.profil.lulusan.update');
            Route::delete('/', [\App\Http\Controllers\Admin\ProfilLulusanController::class, 'destroy'])->name('admin.profil.lulusan.destroy');
        });

        Route::name('admin.')->group(function(){
            Route::resource('dosen', '\App\Http\Controllers\Admin\DosenController');
        });

        Route::name('admin.')->group(function(){
            Route::resource('fasilitas', '\App\Http\Controllers\Admin\FasilitasController', ['parameters' => ['fasilitas' => 'fasilitas']]);
        });

        Route::name('admin.')->group(function(){
            Route::resource('akreditasi', '\App\Http\Controllers\Admin\AkreditasiController');
        });
    });

    Route::name('admin.')->group(function(){
        Route::resource('unduhan', '\App\Http\Controllers\Admin\UnduhanController');
    });
});

require __DIR__ . '/auth.php';
