<?php

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

// Beranda
Route::view('/', 'pages.home');

// Tentang Kami
Route::view('/tentang-kami', 'pages.about');

// Layanan
Route::view('/layanan', 'pages.service');
Route::view('/layanan/jasa-cleaning-service', 'pages.service.cleaning');
Route::view('/layanan/jasa-konstruksi', 'pages.service.konstruksi');
Route::view('/layanan/jasa-pengadaan', 'pages.service.pengadaan');

// Kontak
Route::view('/kontak', 'pages.contact');

Route::get('/download-profil', function () {
    $filePath = storage_path('app/private/company-profile-patdara-kusuma-jaya.pdf');
    if (! file_exists($filePath)) {
        abort(404);
    }
    return response()->download($filePath, 'company-profile-patdara-kusuma-jaya.pdf');
});