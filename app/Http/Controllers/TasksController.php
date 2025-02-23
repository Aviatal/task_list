<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TasksController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $tasks = Task::query()->paginate(15);
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
        $newTask = Task::query()->create($request->validated()->except('_token'));
        return redirect()->route('tasks.show', ['task' => $newTask->id])
            ->with('success', 'Task created successfully');
    }

    public function update(TaskRequest $request, Task $task): \Illuminate\Http\RedirectResponse
    {
        $task->update($request->validated()->except('_token'));
        return redirect()->route('tasks.show', ['task' => $task->id])
            ->with('success', 'Task updated successfully');
    }

    public function toggleCompleted(Task $task): \Illuminate\Http\RedirectResponse
    {
        $task->completed = !$task->completed;
        $task->save();
        return redirect()->back()->with('success', 'Task updated successfully');
    }
    public function destroy(Task $task): \Illuminate\Http\RedirectResponse
    {
        $task->delete();
        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully');
    }
}
