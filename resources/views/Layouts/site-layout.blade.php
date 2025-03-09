<!-- resources/views/layouts/site-layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fantasy League - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">
<x-site-layout-header/>

<main class="container mx-auto flex-grow p-4">
    @yield('content')
</main>

<x-site-layout-footer/>
</body>
</html>
