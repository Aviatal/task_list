<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
Route::view('/create', 'tasks.create')->name('tasks.create');
Route::get('/{task}/edit', [TasksController::class, 'edit'])->name('tasks.edit');
Route::get('/{task}', [TasksController::class, 'show'])->name('tasks.show');
Route::post('/', [TasksController::class, 'store'])->name('tasks.store');
Route::put('/{task}', [TasksController::class, 'update'])->name('tasks.update');
Route::delete('/{task}/delete', [TasksController::class, 'destroy'])->name('tasks.destroy');
Route::patch('/{task}/toggle-completed', [TasksController::class, 'toggleCompleted'])->name('tasks.toggle-completed');
