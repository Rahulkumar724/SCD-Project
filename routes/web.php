<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| SkillSwap Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/mentors', [PageController::class, 'mentors'])->name('mentors');
Route::get('/contact', [PageController::class, 'contactShow'])->name('contact.show');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');
