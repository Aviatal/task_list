@extends('layouts.app')
@section('title', 'Edit Task')

@section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6 text-center">Edit Task</h2>

        <form method="POST" action="{{ route('tasks.update', ['task' => $task->id]) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-lg font-medium text-gray-700">Title</label>
                <input
                    name="title"
                    id="title"
                    type="text"
                    value="{{ $task->title }}"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600" />
                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="description" class="block text-lg font-medium text-gray-700">Description</label>
                <textarea
                    name="description"
                    id="description"
                    rows="5"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">{{ $task->description }}</textarea>
                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="long_description" class="block text-lg font-medium text-gray-700">Long Description</label>
                <textarea
                    name="long_description"
                    id="long_description"
                    rows="10"
                    class="mt-2 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-600">{{ $task->long_description }}</textarea>
            </div>

            <div class="flex justify-center">
                <button
                    type="submit"
                    class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow hover:bg-blue-700 transition duration-300">
                    Edit Task
                </button>
            </div>
        </form>
    </div>
@endsection
