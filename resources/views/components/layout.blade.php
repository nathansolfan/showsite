<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Your Portfolio' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="w-full py-6 bg-white shadow">
        <div class="container mx-auto flex items-center justify-between">
            <div class="text-lg font-bold">YourName</div>
            <div>
                <a href="/" class="text-gray-800 hover:text-gray-600 mx-4">Home</a>
                <a href="#about" class="text-gray-800 hover:text-gray-600 mx-4">About</a>
                <a href="#work" class="text-gray-800 hover:text-gray-600 mx-4">Work</a>
                <a href="#contact" class="text-gray-800 hover:text-gray-600 mx-4">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 YourName. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
