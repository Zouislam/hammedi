<?php

use App\Http\Controllers\CertificateController;



Route::get('/', [CertificateController::class, 'index'])->name('certificates.index');
Route::get('/search', [CertificateController::class, 'search'])->name('certificates.search');
Route::get('/create', [CertificateController::class, 'create'])->name('certificates.create');
Route::post('/store', [CertificateController::class, 'store'])->name('certificates.store');