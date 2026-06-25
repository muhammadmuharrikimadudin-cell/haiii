<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationHistoryController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;

Route::get('/', [ProfileController::class, 'index'])->name('home');
Route::redirect('/profile', '/');
Route::get('/education', [EducationHistoryController::class, 'index'])->name('education.index');
Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
Route::post('/messages', [MessageController::class, 'store']);
Route::get('/admin/messages', [MessageController::class, 'index']);
Route::delete('/admin/messages/{id}', [MessageController::class, 'destroy']);
Route::get('/admin/messages/{id}', [MessageController::class, 'show']);
