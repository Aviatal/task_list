<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

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

    public function store(TaskRequest $request): \Illuminate\Http\RedirectResponse
    {
        $request->validated();

        $newTask = Task::query()->create($request->except('_token'));
        return redirect()->route('tasks.show', ['task' => $newTask->id])
            ->with('success', 'Task created successfully');
    }

    public function update(TaskRequest $request, Task $task): \Illuminate\Http\RedirectResponse
    {
        $request->validated();

        $task->update($request->except('_token'));
        return redirect()->route('tasks.show', ['task' => $task->id])
            ->with('success', 'Task updated successfully');
    }
}
