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
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="w-full py-6 shadow-lg bg-gradient-to-r from-blue-500 to-blue-400 sticky top-0 z-50">
        <div class="relative container mx-auto flex justify-center lg:justify-center items-center">
            <!-- Left-aligned logo, absolutely positioned so it doesn't interfere with centering -->
            <div class="absolute left-0 text-lg font-bold text-white">Nathan Ferreira</div>

            <!-- Navigation links, centered using flexbox -->
            <div id="nav-content" class="flex space-x-6">
                <a href="/" class="text-white hover:text-gray-100 {{ request()->is('/') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-home"></i> Home
                </a>
                <a href="/about" class="text-white hover:text-gray-100 {{ request()->is('about') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-user"></i> About
                </a>
                <a href="/works" class="text-white hover:text-gray-100 {{ request()->is('works') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-briefcase"></i> Works
                </a>
                <a href="/contact" class="text-white hover:text-gray-100 {{ request()->is('contact') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-envelope"></i> Contact
                </a>
                <a href="/projects" class="text-white hover:text-gray-100 {{ request()->is('projects') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-project-diagram"></i> Projects
                </a>
                <a href="/services" class="text-white hover:text-gray-100 {{ request()->is('services') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-concierge-bell"></i> Services
                </a>
                <a href="/tropicalBeauty" class="text-white hover:text-gray-100 {{ request()->is('tropicalBeauty') ? 'font-bold text-white' : '' }} transition-transform duration-300 transform hover:scale-105">
                    <i class="fas fa-spa"></i> Beauty
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="absolute right-0 block lg:hidden">
                <button id="nav-toggle" aria-label="Toggle Navigation Menu" class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-gray-200 hover:border-gray-200 transition-colors duration-300">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
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
            var navContent = document.getElementById('nav-content');
            navContent.classList.toggle('hidden');
        };
    </script>
</body>
</html>
