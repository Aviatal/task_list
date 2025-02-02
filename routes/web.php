<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
Route::get('/{id}', [TasksController::class, 'show'])->name('tasks.show');
