<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard') | Mural</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-gray-900 text-white px-6 py-3 flex justify-between items-center shadow">
        <a href="/" class="font-semibold text-lg">📘 Stuarz</a>
        <div class="flex space-x-4">
            <a href="{{ route('novels.index') }}" class="hover:text-gray-300">Novels</a>
            <a href="{{ route('series.index') }}" class="hover:text-gray-300">Series</a>
            <a href="{{ route('genres.index') }}" class="hover:text-gray-300">Genres</a>
        </div>
    </nav>

    <!-- Main Layout -->
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-200 h-screen p-4 border-r border-gray-300">
            <ul class="space-y-2">
                <li><a href="{{ route('novels.index') }}" class="block hover:bg-gray-300 rounded px-2 py-1">All Novels</a></li>
                <li><a href="{{ route('series.index') }}" class="block hover:bg-gray-300 rounded px-2 py-1">All Series</a></li>
                <li><a href="{{ route('genres.index') }}" class="block hover:bg-gray-300 rounded px-2 py-1">All Genres</a></li>
            </ul>
        </aside>

        <!-- Content -->
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-4">@yield('page_title')</h1>
            @yield('content')
        </main>
    </div>

</body>
</html>
