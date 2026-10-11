<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Blog') | Blog Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">Blog Laravel</a>
            <a class="btn btn-success btn-sm" href="{{ route('posts.create') }}">Tulis post</a>
        </div>
    </nav>

    <main class="container pb-5">
        @if (session('success'))
            <x-alert type="success">{{ session('success') }}</x-alert>
        @endif

        @yield('content')
    </main>
</body>
</html>