<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

// Route::get('/', [ContactController::class, 'index']);
Route::get('/', [StudentController::class, 'index']);
