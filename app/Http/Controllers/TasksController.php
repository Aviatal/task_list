<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function show(int $id): \Illuminate\Contracts\View\View
    {
        $task = Task::query()->findOrFail($id);
        return view('tasks.show', compact('task'));
    }
}
