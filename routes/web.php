<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SchedulesController;
use App\Models\Lecturers;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[SchedulesController::class, 'index'])->name('index');
Route::get('/cari-jadwal',[SchedulesController::class, 'index'])->name('search')->middleware('admin');
Route::get('/tambah-jadwal',[SchedulesController::class, 'create'])->middleware('admin');
Route::post('/tambah-jadwal',[SchedulesController::class, 'store'])->middleware('admin');
Route::get('/edit/{id}', [SchedulesController::class, 'edit'])->middleware('admin');
Route::post('/edit/{id}', [SchedulesController::class, 'update'])->middleware('admin');
Route::get('/delete/{id}', [SchedulesController::class, 'destroy'])->middleware('admin');
Route::get('/mata-kuliah',[CoursesController::class, 'index'])->name('course');
Route::get('/cari-mata-kuliah',[CoursesController::class, 'index'])->middleware('admin');
Route::get('/tambah-mata-kuliah',[CoursesController::class, 'create'])->middleware('admin');
Route::post('/tambah-mata-kuliah',[CoursesController::class, 'store'])->middleware('admin');
Route::get('/delete-mata-kuliah/{id}',[CoursesController::class, 'destroy'])->middleware('admin');
Route::get('/edit-mata-kuliah/{id}',[CoursesController::class, 'edit'])->middleware('admin');
Route::post('/edit-mata-kuliah/{id}',[CoursesController::class, 'update'])->middleware('admin');
Route::get('/pengajar',[LecturersController::class, 'index'])->name('lecturer');
Route::get('/cari-pengajar',[LecturersController::class, 'index'])->middleware('admin');
Route::get('/tambah-pengajar',[LecturersController::class, 'create'])->middleware('admin');
Route::post('/tambah-pengajar',[LecturersController::class, 'store'])->middleware('admin');
Route::get('/edit-pengajar/{id}',[LecturersController::class, 'edit'])->middleware('admin');
Route::post('/edit-pengajar/{id}',[LecturersController::class, 'update'])->middleware('admin');
Route::get('/delete-pengajar/{id}',[LecturersController::class, 'destroy'])->middleware('admin');
Route::get('/upload-jadwal',[SchedulesController::class, 'upload'])->middleware('admin');
Route::post('/upload-jadwal',[SchedulesController::class, 'import'])->middleware('admin');
Route::get('/upload-mata-kuliah',[CoursesController::class, 'upload'])->middleware('admin');
Route::post('/upload-mata-kuliah',[CoursesController::class, 'import'])->middleware('admin');
Route::get('/upload-pengajar',[LecturersController::class, 'upload'])->middleware('admin');
Route::post('/upload-pengajar',[LecturersController::class, 'import'])->middleware('admin');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/cari-jadwal',[SchedulesController::class, 'search'])->name('search');
Route::post('/cari-mata-kuliah',[CoursesController::class, 'search']);
Route::post('/cari-pengajar',[LecturersController::class, 'search']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/logout', function(){
    return redirect('/');
});
