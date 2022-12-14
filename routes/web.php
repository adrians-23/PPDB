<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController,
    JurusanController,
    SiswaController,
    ProfileController,
    PesertadidikController,
};
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

//Login & Register
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('login.postlogin');

//Register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister'])->name('register.postregister');

//Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkrole:1']], function(){
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    //Jurusan
    Route::get('/jurusan/data', [JurusanController::class, 'data'])->name('jurusan.data');
    Route::resource('/jurusan', JurusanController::class);
    
    //Siswa
    Route::get('/siswa/data', [SiswaController::class, 'data'])->name('siswa.data');
    Route::resource('/siswa', SiswaController::class);
    Route::get('/siswa/pdf/{id}', [SiswaController::class, 'pdf'])->name('siswa.pdf');
    
    //Profile
    // Route::get('/profile/data', [ProfileController::class, 'data'])->name('profile.data');
    // Route::resource('/profile', ProfileController::class)->name('profile');
});

Route::group(['middleware' => ['auth', 'checkrole:1, 2']], function(){
    //Profile
    Route::resource('/profile', ProfileController::class);

    //userSiswa
    Route::get('/pesertadidik/data', [PesertadidikController::class, 'data'])->name('pesertadidik.data');
    Route::resource('/pesertadidik', PesertadidikController::class);
});