<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\StudentController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/about', [WelcomeController::class, 'about'])->name('about');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/password', [WelcomeController::class, 'password'])->name('password');
Route::get('/detail/{id}', [WelcomeController::class, 'detail'])->name('detail');

Route::post('/make-full-name', [WelcomeController::class, 'makeFullName'])->name('make-full-name');
Route::post('/calculator', [WelcomeController::class, 'calculator'])->name('calculator');
Route::post('/password-generator', [WelcomeController::class, 'passwordGenerator'])->name('password-generator');

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/all', [StudentController::class, 'index'])->name('student.all');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/student/destroy/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
