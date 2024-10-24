<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Your Portfolio' }}</title>

    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Smooth Scroll -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="w-full py-6 shadow-lg bg-gradient-to-r from-blue-500 to-blue-400 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-lg font-bold text-white">
                <a href="/">
                    <img src="{{ asset('images/nf-logo.png.webp') }}" alt="Nathan Ferreira Logo" class="h-10 w-auto"> <!-- Adjust height as needed -->
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button id="nav-toggle" aria-label="Toggle Navigation Menu" class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-gray-200 hover:border-gray-200 transition-colors duration-300">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Navigation links for desktop (hidden on mobile) -->
            <div class="hidden lg:flex space-x-6" id="nav-content">
                <a href="/" class="text-white hover:text-gray-100 {{ request()->is('/') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    Home
                </a>
                <a href="/portfolio" class="text-white hover:text-gray-100 {{ request()->is('portfolio') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    Portfolio
                </a>
                <a href="/projects" class="text-white hover:text-gray-100 {{ request()->is('projects') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    Projects
                </a>
                <a href="/contact" class="text-white hover:text-gray-100 {{ request()->is('contact') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    Contact
                </a>
            </div>
        </div>

        <!-- Mobile Menu (hidden by default, toggled on click) -->
        <div id="mobile-menu" class="lg:hidden hidden">
            <div class="px-6 pt-4 pb-6 space-y-4">
                <a href="/" class="block text-white hover:text-gray-100">Home</a>
                <a href="/portfolio" class="block text-white hover:text-gray-100">Portfolio</a>
                <a href="/projects" class="block text-white hover:text-gray-100">Projects</a>
                <a href="/contact" class="block text-white hover:text-gray-100">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Nathan Ferreira. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Toggle the navigation menu on small screens
        document.getElementById('nav-toggle').onclick = function() {
            var mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        };
    </script>
</body>
</html>
