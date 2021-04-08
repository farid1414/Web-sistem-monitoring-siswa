<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\LoginController;
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

Route::Group(['middleware' => ['auth:web']], function () {
    // Ortu
    Route::get('/Ortu/Homeortu', [OrtuController::class, 'homeortu']);
});

Route::get('/', function () {
    return view('/home');
});

// Route::get('/login', function () {
    //     return view('/login');
    // })->name('login');
    
Route::get('/dashboard', [HomeController::class, 'dashboard']);

Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/registrasi', [HomeController::class, 'registrasi'])->name('registrasi');

Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::post('/simpanregistrasi', [LoginController::class, 'simpanregistrasi'])->name('simpanregistrasi');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

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
    Route::post('/Admin/buatwalikelas', [AdminController::class, 'buatwalikelas']);
    Route::get('/Admin/datauser', [AdminController::class, 'datauser']);
    Route::get('/Admin/dataguru', [AdminController::class, 'dataguru']);
    Route::get('/Admin/datawalikelas', [AdminController::class, 'datawalikelas']);
    Route::get('/Admin/datajadwalpelajaran', [AdminController::class, 'datajadwalpelajaran']);
    Route::get('/Admin/datajadwalguru', [AdminController::class, 'datajadwalguru']);
    
});


// Guru
Route::Group(['middleware' => ['auth','CekLevel:guru']], function () {
    Route::get('/Guru/Homeguru', [GuruController::class, 'homeguru']);
    Route::get('/Guru/loginguru', [GuruController::class, 'loginguru']); 
    Route::get('/Guru/daftarsiswa', [GuruController::class, 'daftarsiswa']); 
    Route::get('/Guru/{id}/viewsiswa', [GuruController::class, 'viewsiswa']); 
    Route::post('/Guru/{id}/addnilai', [GuruController::class, 'addnilai']); 
});

// Siswa
Route::Group(['middleware' => ['auth','CekLevel:siswa']], function () {
Route::get('/Siswa/Homesiswa', [SiswaController::class, 'homesiswa']);
});