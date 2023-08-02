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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('public.home');
Route::get('/visi-misi', [\App\Http\Controllers\HomeController::class, 'visiMisi'])->name('public.visi-misi');
Route::get('/struktur-organisasi', [\App\Http\Controllers\HomeController::class, 'strukturOrg'])->name('public.struktur-org');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::view('/', 'dashboard');
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // PROFIL
    Route::name('admin.')->group(function() {
        Route::prefix('profile-prodi')->name('profile-prodi.')->group(function() {
            Route::prefix('visi-misi')->group(function(){
                Route::get('/',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'indexVisiMisi'])->name('visi-misi.index');
                Route::get('edit',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'editVisiMisi'])->name('visi-misi.edit');
                Route::post('update-visi',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateVisi'])->name('visi-misi.update-visi');
                Route::post('update-misi',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateMisi'])->name('visi-misi.update-misi');
                Route::post('update-tujuan',[\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateTujuan'])->name('visi-misi.update-tujuan');
            });
            Route::prefix('struktur-organisasi')->group(function(){
                Route::get('/', [\App\Http\Controllers\Admin\ProfilProdiController::class, 'indexStrukturOrg'])->name('struktur-org.index');
                Route::post('update-kaprodi', [\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateKaprodi'])->name('struktur-org.update-kaprodi');
                Route::post('update-sekprodi', [\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateSekprodi'])->name('struktur-org.update-sekprodi');
                Route::post('update-bagan', [\App\Http\Controllers\Admin\ProfilProdiController::class, 'updateBagan'])->name('struktur-org.update-bagan');
            });
            Route::resource('lulusan', '\App\Http\Controllers\Admin\ProfilLulusanController')->except(['show']);
        });

        Route::resource('dosen', '\App\Http\Controllers\Admin\DosenController');
        Route::resource('fasilitas', '\App\Http\Controllers\Admin\FasilitasController', ['parameters' => ['fasilitas' => 'fasilitas']]);
        Route::resource('akreditasi', '\App\Http\Controllers\Admin\AkreditasiController')->except(['show']);
        Route::resource('unduhan', '\App\Http\Controllers\Admin\UnduhanController')->except(['show']);
        Route::resource('artikel','\App\Http\Controllers\Admin\ArtikelController');
        Route::resource('prestasi','\App\Http\Controllers\Admin\PrestasiController')->except(['show']);
        Route::resource('event-mahasiswa','\App\Http\Controllers\Admin\EventMahasiswaController');

        Route::get('himti', [\App\Http\Controllers\Admin\HimtiController::class, 'index'])->name('himti.index');
        Route::get('himti/proker/create', [\App\Http\Controllers\Admin\HimtiController::class, 'createProker'])->name('himti.proker.create');
        Route::post('himti/proker', [\App\Http\Controllers\Admin\HimtiController::class, 'storeProker'])->name('himti.proker.store');
        Route::get('himti/proker/{id}/edit', [\App\Http\Controllers\Admin\HimtiController::class, 'editProker'])->name('himti.proker.edit');
        Route::put('himti/proker/{id}', [\App\Http\Controllers\Admin\HimtiController::class, 'updateProker'])->name('himti.proker.update');
        Route::delete('himti/proker/{id}', [\App\Http\Controllers\Admin\HimtiController::class, 'destroyProker'])->name('himti.proker.destroy');

        Route::prefix('akademik')->name('akademik.')->group(function() {
            Route::resource('info-akademik', '\App\Http\Controllers\Admin\InfoAkademikController');

            Route::get('/kurikulum', [\App\Http\Controllers\Admin\AkademikViewController::class, 'indexKurikulum'])->name('kurikulum');
            Route::get('/tugas-akhir', [\App\Http\Controllers\Admin\AkademikViewController::class, 'indexTugasAkhir'])->name('tugas-akhir');
            Route::get('/kerja-praktek', [\App\Http\Controllers\Admin\AkademikViewController::class, 'indexKerjaPraktek'])->name('kerja-praktek');
            Route::get('/kampus-merdeka', [\App\Http\Controllers\Admin\AkademikViewController::class, 'indexKampusMerdeka'])->name('kampus-merdeka');
            Route::get('/kalender-akademik', [\App\Http\Controllers\Admin\AkademikViewController::class, 'indexKalenderAkademik'])->name('kalender-akademik');
        });

    });
});

require __DIR__ . '/auth.php';
