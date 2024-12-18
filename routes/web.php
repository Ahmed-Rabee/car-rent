<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Branches;
use App\Http\Controllers\pages\Employees;
use App\Http\Controllers\pages\Permissions;
use App\Http\Controllers\pages\Cars;
use App\Http\Controllers\pages\Technical;
use App\Http\Controllers\pages\Reservations;
use App\Http\Controllers\pages\Clients;
use App\Http\Controllers\pages\Contracts;
use App\Http\Controllers\pages\Reports;



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
Route::get('/employees/penalties', [Employees::class, 'penalties'])->name('employees-penalties-index');
Route::get('/employees/advances', [Employees::class, 'advances'])->name('employees-advances-index');
Route::get('/employees/rewards', [Employees::class, 'rewards'])->name('employees-rewards-index');

// Permissions Routes
Route::get('/permissions', [Permissions::class, 'index'])->name('permissions-index');
Route::get('/permissions/create', [Permissions::class, 'create'])->name('permissions-create');
Route::get('/permissions/{id}/edit', [Permissions::class, 'edit'])->name('permissions-edit');
Route::get('/permissions/{id}/view', [Permissions::class, 'view'])->name('permissions-view');

// Cars Routes
Route::get('/cars', [Cars::class, 'index'])->name('cars-index');
Route::get('/cars/create', [Cars::class, 'create'])->name('cars-create');
Route::get('/cars/{id}/edit', [Cars::class, 'edit'])->name('cars-edit');
Route::get('/cars/{id}/view', [Cars::class, 'view'])->name('cars-view');
Route::get('/cars/brands', [Cars::class, 'brandsIndex'])->name('cars-brands-index');
Route::get('/cars/models', [Cars::class, 'modelsIndex'])->name('cars-models-index');
Route::get('/cars/categories', [Cars::class, 'categoriesIndex'])->name('cars-categories-index');

// Technical Management Routes
Route::get('/technical', [Technical::class, 'index'])->name('technical-index');
Route::get('/technical/create', [Technical::class, 'create'])->name('technical-create');
Route::get('/technical/{id}/edit', [Technical::class, 'edit'])->name('technical-edit');
Route::get('/technical/{id}/view', [Technical::class, 'view'])->name('technical-view');
Route::get('/technical/periodic-maintenance', [Technical::class, 'periodicMaintenanceIndex'])->name('technical-.periodic-maintenance.index');

// Reservations Routes
Route::get('/reservations', [Reservations::class, 'index'])->name('reservations-index');
Route::get('/reservations/create', [Reservations::class, 'create'])->name('reservations-create');
Route::get('/reservations/{id}/edit', [Reservations::class, 'edit'])->name('reservations-edit');
Route::get('/reservations/{id}/view', [Reservations::class, 'view'])->name('reservations-view');

// Clients Routes
Route::get('/clients', [Clients::class, 'index'])->name('clients-index');
Route::get('/clients/create', [Clients::class, 'create'])->name('clients-create');
Route::get('/clients/{id}/edit', [Clients::class, 'edit'])->name('clients-edit');
Route::get('/clients/{id}/view', [Clients::class, 'view'])->name('clients-view');

// Contracts Routes
Route::get('/contracts', [Contracts::class, 'index'])->name('contracts-index');
Route::get('/contracts/create', [Contracts::class, 'create'])->name('contracts-create');
Route::get('/contracts/{id}/edit', [Contracts::class, 'edit'])->name('contracts-edit');
Route::get('/contracts/{id}/view', [Contracts::class, 'view'])->name('contracts-view');
Route::get('/contracts/{id}/confirmation', [Contracts::class, 'confirmation'])->name('contracts-confirmation');
Route::get('/contracts/print', [Contracts::class, 'print'])->name('contracts-print');

// Reports Routes
Route::get('/reports', [Reports::class, 'index'])->name('reports-index');



