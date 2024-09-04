<?php

use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('login');
});

// Portofolio
Route::get('profiles',[ContentController::class,'index'])->name('profiles');
Route::get('experience',[ContentController::class,'experience'])->name('experience');
Route::get('education',[ContentController::class,'education'])->name('education');
Route::get('skills',[ContentController::class,'skill'])->name('skills');

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);

// Profile
Route::resource('profile', \App\Http\Controllers\ProfileController::class);

// experiences
Route::resource('experiences', \App\Http\Controllers\ExperiencesController::class);

// pendidikan
Route::resource('educations', \App\Http\Controllers\EducationController::class);

// Skill
Route::resource('skill', \App\Http\Controllers\SkillController::class);
