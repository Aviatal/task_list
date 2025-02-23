<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100">

<header class="bg-blue-600 text-white p-4 h-16">
    <div class="max-w-7xl mx-auto flex justify-between items-center px-4 h-full">
        <a href="{{ route('tasks.index') }}" class="text-2xl font-semibold hover:text-blue-300">
            Task List App
        </a>

        @if(Route::is('tasks.index'))
            <a href="{{ route('tasks.create') }}" class="bg-green-600 hover:bg-green-700 text-white py-2 px-6 rounded-lg shadow">
                Add Task
            </a>
        @endif
    </div>
</header>

<main class="p-8 max-w-7xl mx-auto">
    @yield('content')
</main>
</body>
</html>
