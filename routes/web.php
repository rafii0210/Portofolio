<?php

use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('login');
});

// Portofolio
Route::get('dashboard/aboutview', [ContentController::class, 'aboutview']);
Route::get('dashboard/resumeview', [ContentController::class, 'resume']);
Route::get('dashboard/scholl', [ContentController::class, 'scholl']);
Route::get('dashboard/profesional', [ContentController::class, 'profesional']);

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);

// Profile
Route::resource('profile', \App\Http\Controllers\ProfileController::class);

// experiences
Route::resource('experiences', \App\Http\Controllers\ExperiencesController::class);

// pendidikan
Route::resource('education', \App\Http\Controllers\EducationController::class);

// Skill
Route::resource('skill', \App\Http\Controllers\SkillController::class);
