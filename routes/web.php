<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreviewController;

Route::get('/prev', [PreviewController::class, 'index']);
Route::post('/prev', [PreviewController::class, 'show'])->name('prev.show');