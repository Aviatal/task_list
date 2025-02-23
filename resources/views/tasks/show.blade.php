@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>{{ $task->description }}</p>

    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <div>
        <form action="{{ route('tasks.toggle-completed', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit">
                {{ $task->completed ? 'Mark as uncompleted' : 'Mark as completed' }}
            </button>
        </form>
    </div>

    <div>
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>
    </div>

    <form method="POST" action="{{ route('tasks.destroy', ['task' => $task->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
