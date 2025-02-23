@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-3xl font-semibold text-center mb-6">{{ $task->title }}</h2>

        <p class="text-lg text-gray-700 mb-4">{{ $task->description }}</p>

        @if ($task->long_description)
            <p class="text-base text-gray-600 mb-6">{{ $task->long_description }}</p>
        @endif

        <div class="text-sm text-gray-500 mb-6">
            <p><strong>Created at:</strong> {{ $task->created_at->format('F j, Y, g:i a') }}</p>
            <p><strong>Updated at:</strong> {{ $task->updated_at->format('F j, Y, g:i a') }}</p>
        </div>

        <div class="mb-6">
            <form action="{{ route('tasks.toggle-completed', ['task' => $task->id]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button
                    type="submit"
                    class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                    {{ $task->completed ? 'Mark as uncompleted' : 'Mark as completed' }}
                </button>
            </form>
        </div>

        <div class="mb-4">
            <a
                href="{{ route('tasks.edit', ['task' => $task->id]) }}"
                class="text-blue-600 hover:text-blue-800 font-medium">
                Edit Task
            </a>
        </div>

        <div>
            <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
                @csrf
                @method('DELETE')
                <button
                    type="submit"
                    class="bg-red-600 text-white py-2 px-6 rounded-lg shadow hover:bg-red-700 transition duration-300">
                    Delete Task
                </button>
            </form>
        </div>
    </div>
@endsection
