<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />
    <x-header>{{ $title }}</x-header>
    <main class="max-w-7xl mx-auto p-4 lg:p-0">
        {{ $slot }}
    </main>
</body>
</html>