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

    public function show(Task $task): \Illuminate\Contracts\View\View
    {
        return view('tasks.show', compact('task'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $newTask = Task::query()->create($request->except('_token'));
        return redirect()->route('tasks.show', ['task' => $newTask->id])
            ->with('success', 'Task created successfully');
    }
}
