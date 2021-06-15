<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\forgotpassword;
use GuzzleHttp\Middleware;
use Illuminate\Routing\RouteGroup;

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
    return view('/home');
});


// Route::get('/login', function () {
    //     return view('/login');
    // })->name('login');
    
    Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/cobaradio', [HomeController::class, 'cobaradio']);
Route::post('/buat', [HomeController::class, 'buat'])->name('buat');
// Mencari email user dari siswa guru dan orang tua
Route::get('/daftaruser', [HomeController::class, 'daftaruser']);
Route::get('/daftaruser/cariuser', [HomeController::class, 'cariuser']);
Route::get('/rating', [HomeController::class, 'rating']);
Route::post('/rating/kirim', [HomeController::class, 'kirim']);

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/registrasi', [HomeController::class, 'registrasi'])->name('registrasi');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// forgot password
Route::get('/lupapassword', 'App\Http\Controllers\forgotpassword@getemail')->name('lupapassword');
Route::post('/lupapassword', 'App\Http\Controllers\forgotpassword@postemail')->name('lupapassword');

// reset password
Route::get('/otp/{token}', 'App\Http\Controllers\Resetpassword@getpassword');
Route::post('/otp', 'App\Http\Controllers\Resetpassword@updatepassword');


// Admin
Route::Group(['middleware' => ['auth:admin']], function () {
    Route::get('/Admin/Homeadmin', [AdminController::class, 'homeadmin']);
    Route::get('/Admin/loginadmin', [AdminController::class, 'loginadmin']);
    Route::post('/Admin/create', [AdminController::class, 'create']);
    Route::post('/Admin/buatakun', [AdminController::class, 'buatakun']);
    Route::get('/Admin/{id}/hapus', [AdminController::class, 'hapus']);
    Route::get('/Admin/{id}/edit', [AdminController::class, 'edit']);
    Route::post('/Admin/{id}/ubah', [AdminController::class, 'ubah']);
    Route::get('/Admin/{id}/hapussiswa', [AdminController::class, 'hapussiswa']);
    Route::get('/Admin/{id}/editsiswa', [AdminController::class, 'editsiswa']);
    Route::post('/Admin/{id}/ubahsiswa', [AdminController::class, 'ubahsiswa']);
    Route::get('/Admin/datasiswa', [AdminController::class, 'datasiswa']);
    Route::get('/Admin/datamatapelajaran', [AdminController::class, 'datamatapelajaran']);
    Route::get('/Admin/{id}/hapusmapel', [AdminController::class, 'hapusmapel']);
    Route::post('/Admin/buatmapel', [AdminController::class, 'buatmapel']);
    Route::get('/Admin/datakelas', [AdminController::class, 'datakelas']);
    Route::post('/Admin/createkelas', [AdminController::class, 'createkelas']);
    Route::get('/Admin/{id}/deletekelas', [AdminController::class, 'deletekelas']);
    Route::get('/Admin/{id}/editkelas', [AdminController::class, 'editkelas']);
    Route::post('/Admin/{id}/ubahkelas', [AdminController::class, 'ubahkelas']);
    Route::post('/Admin/buatwalikelas', [AdminController::class, 'buatwalikelas']);
    Route::get('/Admin/datauser', [AdminController::class, 'datauser']);
    Route::get('/Admin/dataguru', [AdminController::class, 'dataguru']);
    Route::get('/Admin/datawalikelas', [AdminController::class, 'datawalikelas']);
    Route::get('/Admin/datajadwalpelajaran', [AdminController::class, 'datajadwalpelajaran']);
    Route::get('/Admin/{id}/{idmapel}/hapusjadwal', [AdminController::class, 'hapusjadwal']);
    Route::get('/Admin/{id}/{idmapel}/hapusjadwalguru', [AdminController::class, 'hapusjadwalguru']);
    Route::get('/Admin/datajadwalguru', [AdminController::class, 'datajadwalguru']);
    Route::get('/Admin/{id}/viewjadwal', [AdminController::class, 'viewjadwal']);
    Route::post('/Admin/{id}/addjadwal', [AdminController::class, 'addjadwal']); 
    Route::get('/Admin/{id}/viewjadwalguru', [AdminController::class, 'viewjadwalguru']);
    Route::post('/Admin/{id}/addjadwalguru', [AdminController::class, 'addjadwalguru']); 
    Route::get('/Admin/export', [AdminController::class, 'export']);
    Route::get('/Admin/exportsiswa', [AdminController::class, 'exportsiswa']);
    Route::get('/Admin/exportpdf', [AdminController::class, 'exportpdf']);
    Route::get('/Admin/datarating', [AdminController::class, 'datarating']);
    
});


// Guru
Route::Group(['middleware' => ['auth','CekLevel:guru']], function () {
    Route::get('/Guru/loginguru', [GuruController::class, 'loginguru']); 
    Route::get('/Guru/daftarsiswa', [GuruController::class, 'daftarsiswa']); 
    Route::get('/Guru/{id}/viewsiswa', [GuruController::class, 'viewsiswa']); 
    Route::get('/Guru/{id}/nilaisiswa', [GuruController::class, 'nilaisiswa']); 
    Route::get('/Guru/{id}/view', [GuruController::class, 'view']); 
    Route::post('/Guru/{id}/addnilai', [GuruController::class, 'addnilai']);
    Route::get('/Guru/{id}/{idmapel}/deletenilai', [GuruController::class, 'deletenilai']);
    Route::get('/Guru/jadwalmengajar', [GuruController::class, 'jadwalmengajar']); 
    Route::get('/Guru/{id}/viewjadwalguru', [GuruController::class, 'viewjadwalguru']);
    Route::get('/Guru/jadwalpelajaran', [GuruController::class, 'jadwalpelajaran']); 
    Route::get('/Guru/{id}/viewjadwalpelajaran', [GuruController::class, 'viewjadwalpelajaran']);
    Route::get('/Guru/tugassiswa', [GuruController::class, 'tugassiswa']);
    Route::get('/Guru/{id}/viewtugaskelas', [GuruController::class, 'viewtugaskelas']);
    Route::post('/Guru/{id}/addtugas', [GuruController::class, 'addtugas']);
    Route::get('/Guru/{id}/{idguru}/tugasselesai', [GuruController::class, 'tugasselesai']);
    Route::get('/Guru/datatugas', [GuruController::class, 'datatugas']);
    Route::get('/Guru/{id}/daftartugas', [GuruController::class, 'daftartugas']);
    Route::get('/Guru/dataabsen', [GuruController::class, 'dataabsen']);
    Route::get('/Guru/{id}/viewabsen', [GuruController::class, 'viewabsen']);
    Route::get('/Guru/{id}/hasilabsen', [GuruController::class, 'hasilabsen']);
    Route::get('/Guru/{id}/editpassword', [GuruController::class, 'editpassword']);
    Route::post('/Guru/{id}/ubahpassword', [GuruController::class, 'ubahpassword']);
});

// Siswa
Route::Group(['middleware' => ['auth','CekLevel:siswa']], function () {
    Route::get('/Siswa/daftartugas', [SiswaController::class, 'daftartugas']);
    Route::get('/Siswa/{id}/viewtugaskelas', [SiswaController::class, 'viewtugaskelas']);
    Route::get('/Siswa/jadwalpelajaran', [SiswaController::class, 'jadwalpelajaran']);
    Route::get('/Siswa/{id}/viewjadwalpelajaran', [SiswaController::class, 'viewjadwalpelajaran']);
    Route::post('/Siswa/{id}/addtugas', [SiswaController::class, 'addtugas']);
    Route::get('/Siswa/absensiswa', [SiswaController::class, 'absensiswa']);
    Route::post('/Siswa/addabsen', [SiswaController::class, 'addabsen']);
    Route::get('/Siswa/daftarkelas', [SiswaController::class, 'daftarkelas']);
    Route::get('/Siswa/{id}/viewsiswa', [SiswaController::class, 'viewsiswa']);
    Route::get('/Siswa/{id}/nilaisiswa', [SiswaController::class, 'nilaisiswa']);
    Route::get('/Siswa/{id}/editpassword', [SiswaController::class, 'editpassword']);
    Route::post('/Siswa/{id}/ubahpassword', [SiswaController::class, 'ubahpassword']);
});


//Orangtua 
Route::Group(['middleware' => ['auth:web']], function () {
    // Ortu
    Route::get('/Ortu/Homeortu', [OrtuController::class, 'homeortu']);
    Route::get('/Ortu/kelas10', [OrtuController::class, 'kelas10']);
    Route::get('/Ortu/kelas11', [OrtuController::class, 'kelas11']);
    Route::get('/Ortu/kelas12', [OrtuController::class, 'kelas12']);    
    Route::get('/Ortu/{id}/viewsiswa', [OrtuController::class, 'viewsiswa']);    
    Route::get('/Ortu/{id}/raportsiswa', [OrtuController::class, 'raportsiswa']);
    Route::get('/Ortu/{id}/editpassword', [OrtuController::class, 'editpassword']);
    Route::post('/Ortu/{id}/ubahpassword', [OrtuController::class, 'ubahpassword']);        
});