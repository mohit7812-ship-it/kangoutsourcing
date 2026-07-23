<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');

Route::get('/portfolio', [CaseStudyController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{slug}', [CaseStudyController::class, 'show'])->name('portfolio.show');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
