@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    @forelse ($tasks as $task)
        <div class="bg-white p-4 mb-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" class="text-xl text-blue-600 hover:text-blue-800">{{ $task->title }}</a>
        </div>
    @empty
        <div class="bg-white p-4 rounded-lg shadow-md">
            <p class="text-center text-gray-500">There are no tasks!</p>
        </div>
    @endforelse

    @if($tasks->count())
        <nav class="mt-6">
            <div class="flex justify-center">
                {{ $tasks->links() }}
            </div>
        </nav>
    @endif
@endsection
