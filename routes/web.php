<?php

use App\Http\Controllers\FrontendController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'landing'])->name('landing');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/project/gallery', [FrontendController::class, 'project_gallery'])->name('gallery');
Route::get('/project/references', [FrontendController::class, 'project_references'])->name('project');
Route::get('/our-client', [FrontendController::class, 'client'])->name('client');
Route::get('/our-product', [FrontendController::class, 'product'])->name('product');
Route::get('/our-product/{id}', [FrontendController::class, 'product_detail'])->name('product.detail');
Route::get('/k9-vision', [FrontendController::class, 'k9_vision'])->name('product.k9-vision');
Route::get('/rfid', [FrontendController::class, 'securetag'])->name('product.securetag');

Route::get('/download/building', [FrontendController::class, 'pdf_building'])->name('download.building');
Route::get('/download/contractor', [FrontendController::class, 'pdf_contractor'])->name('download.contractor');
Route::get('/download/dokumentasi', [FrontendController::class, 'pdf_dokumentasi'])->name('download.dokumentasi');
