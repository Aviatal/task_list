<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
Route::view('/create', 'tasks.create')->name('tasks.create');
Route::get('/{id}', [TasksController::class, 'show'])->name('tasks.show');
Route::post('/', [TasksController::class, 'store'])->name('tasks.store');
