<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;

use App\Models\Student;
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
    return view('welcome');
});

Route::resource('guru', App\Http\Controllers\GuruController::class);
Route::delete('/guru/{id}/destroy',  [GuruController::class, 'destroy'])->name('guru.delete');

Route::resource('mapel', App\Http\Controllers\MapelController::class);
Route::delete('/mapel/{id}/destroy',  [GuruController::class, 'destroy'])->name('guru.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/siswa', function () {
    return view('profile.siswa');
})->middleware(['auth', 'verified'])->name('siswa.profile');

Route::get('/info', function () {
    return view('profile.tes');
})->middleware(['auth', 'verified'])->name('siswa.tes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});  
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
require __DIR__.'/auth.php';

Route::get('/ppdb', [StudentController::class, 'index'])->name('public.home');
Route::get('/loginAdmin', [StudentController::class, 'login'])->name('web.loginAdmin');
Route::get('/admin', [StudentController::class, 'admin'])->name('web.admin');
Route::get('/daftar',  [StudentController::class, 'daftar'])->name('web.daftar'); 
Route::post('/ppdb',  [StudentController::class, 'store'])->name('student.store'); 
Route::get('/ppdb/{student}/edit',  [StudentController::class, 'edit'])->name('student.edit'); 
Route::put('/ppdb/{student}/update',  [StudentController::class, 'update'])->name('student.update'); 
Route::delete('/ppdb/{student}/destroy',  [StudentController::class, 'destroy'])->name('student.destroy'); 
