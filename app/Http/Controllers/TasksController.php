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
    public function edit(Task $task): \Illuminate\Contracts\View\View
    {
        return view('tasks.edit', compact('task'));
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

    public function update(Request $request, Task $task): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $task->update($request->except('_token'));
        return redirect()->route('tasks.show', ['task' => $task->id])
            ->with('success', 'Task updated successfully');
    }
}
