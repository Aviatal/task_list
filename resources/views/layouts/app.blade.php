<!DOCTYPE html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task list app</title>
</head>
<body>
    <h1>@yield('title')</h1>
    @if(session()->has('success'))
        <div>{{ session('success') }}</div>
    @endif
    <div>
        @yield('content')
    </div>
</body>
</html>
