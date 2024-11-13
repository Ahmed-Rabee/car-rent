<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Branches;
use App\Http\Controllers\pages\Employees;

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('home');

// Branches Routes
Route::get('/branches', [Branches::class, 'index'])->name('branches-index');
Route::get('/branches/create', [Branches::class, 'create'])->name('branches-create');
Route::get('/branches/{id}/edit', [Branches::class, 'edit'])->name('branches-edit');
Route::get('/branches/{id}/view', [Branches::class, 'view'])->name('branches-view');

// Employees Routes
Route::get('/employees', [Employees::class, 'index'])->name('employees-index');
Route::get('/employees/create', [Employees::class, 'create'])->name('employees-create');
Route::get('/employees/{id}/edit', [Employees::class, 'edit'])->name('employees-edit');
Route::get('/employees/{id}/view', [Employees::class, 'view'])->name('employees-view');
