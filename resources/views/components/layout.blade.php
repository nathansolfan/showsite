<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Your Portfolio' }}</title>
    <meta name="description" content="Nathan Ferreira Portfolio - Web Developer, Designer, and more.">
    <meta name="keywords" content="Nathan Ferreira, Web Developer, Portfolio">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Font Awesome & AOS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Tailwind CSS and Vite assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Smooth Scroll -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

    <!-- Skip Navigation Link -->
    <a href="#main-content" class="sr-only focus:not-sr-only">Skip to Content</a>

    <!-- Navigation -->
    <nav role="navigation" class="w-full top-0 z-50 bg-gradient-to-r from-blue-500 to-blue-400">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <div class="text-lg font-bold text-white">
                <a href="/">
                    <img src="{{ asset('images/bgimage.png') }}" alt="Nathan Ferreira Logo" class="h-20 w-auto">
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button id="nav-toggle" aria-label="Toggle Navigation Menu" class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-gray-200 hover:border-gray-200 transition-colors duration-300">
                    <i id="menu-icon" class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Unified Navigation Links -->
            <div class="hidden lg:flex space-x-6" id="nav-content">
                <a href="/" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Home</a>
                <a href="/about" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">About</a>
                <a href="/portfolio" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Portfolio</a>
                <a href="/contact" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Contact</a>
                <a href="{{ route('workss') }}" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Workss</a>
                <a href="{{ route('feedback') }}" class="text-white hover:text-gray-100">Feedback</a>
            </div>
        </div>

        <!-- Mobile Menu (matching desktop links) -->
        <div id="mobile-menu" class="lg:hidden hidden transition-all duration-300">
            <div class="px-6 pt-4 pb-6 space-y-4 bg-blue-400">
                <a href="/" class="block text-white hover:text-gray-100">Home</a>
                <a href="/about" class="block text-white hover:text-gray-100">About</a>
                <a href="/portfolio" class="block text-white hover:text-gray-100">Portfolio</a>
                <a href="/contact" class="block text-white hover:text-gray-100">Contact</a>
                <a href="{{ route('workss') }}" class="block text-white hover:text-gray-100">Workss</a>
                <a href="{{ route('feedback') }}" class="block text-white hover:text-gray-100">Feedback</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main id="main-content" class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Nathan Ferreira. All rights reserved.</p>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('nav-toggle').onclick = function() {
            var mobileMenu = document.getElementById('mobile-menu');
            var menuIcon = document.getElementById('menu-icon');

            mobileMenu.classList.toggle('hidden');

            // Toggle icon between bars and times (X)
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.classList.replace('fa-times', 'fa-bars');
            } else {
                menuIcon.classList.replace('fa-bars', 'fa-times');
            }
        };
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 400,
            once: true
        });
    </script>
</body>
</html>
