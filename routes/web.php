<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationHistoryController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProfileController;

Route::get('/', [ProfileController::class, 'index'])->name('home');
Route::redirect('/profile', '/');
Route::get('/education', [EducationHistoryController::class, 'index'])->name('education.index');
Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');