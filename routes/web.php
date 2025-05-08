<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\cvControllerCRUD;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[CVController::class,'index']);
Route::get('/', function () {
    return view('home');
});

Route::get('/tugas-akhir', function () {
    return view('tugas-akhir');
})->name('tugas-akhir');

Route::get('/sertifikat', function () {
    return view('sertifikat');
})->name('sertifikat');


Route::get('/Obstacle-Avoidance-Robot', function () {
    return view('Obstacle-Avoidance-Robot');
})->name('Obstacle-Avoidance-Robot');

Route::get('/INTEGRASI-DATA-PADA-PLC-UNTUK-PLATFORM-ANDROID', function () {
    return view('INTEGRASI-DATA-PADA-PLC-UNTUK-PLATFORM-ANDROID');
})->name('INTEGRASI-DATA-PADA-PLC-UNTUK-PLATFORM-ANDROID');


Route::get('/perpustakaan', function () {
    return view('perpustakaan');
})->name('perpustakaan');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::resource('123', cvControllerCRUD::class);