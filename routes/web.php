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

// Kontak
Route::view('/kontak', 'pages.contact');