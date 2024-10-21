<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Your Portfolio' }}</title>

    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Tailwind and custom styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <style>
        /* Sticky header with gradient */
        nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: linear-gradient(to right, #4A90E2, #50B7F5);
            transition: background 0.3s ease;
        }

        /* Hover effect for navigation links */
        .nav-link {
            position: relative;
            display: inline-block;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #fff;
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hover and focus effects */
        .nav-link:hover, .nav-link:focus {
            color: #fff;
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="w-full py-6 shadow-lg">
        <div class="container mx-auto flex items-center justify-between">
            <div class="text-lg font-bold text-white">Nathan Ferreira</div>

            <!-- Mobile menu button -->
            <div class="block lg:hidden">
                <button id="nav-toggle"
                        aria-label="Toggle Navigation Menu"
                        class="flex items-center px-3 py-2 border rounded text-white border-white hover:text-gray-200 hover:border-gray-200">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>

            <!-- Navigation links -->
            <div id="nav-content" class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 text-white p-4 lg:p-0 z-20">
                <div class="lg:flex-grow">
                    <a href="/" class="nav-link block lg:inline-block mx-4 {{ request()->is('/') ? 'active-link' : '' }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                    <a href="/about" class="nav-link block lg:inline-block mx-4 {{ request()->is('about') ? 'active-link' : '' }}">
                        <i class="fas fa-user"></i> About
                    </a>
                    <a href="/works" class="nav-link block lg:inline-block mx-4 {{ request()->is('works') ? 'active-link' : '' }}">
                        <i class="fas fa-briefcase"></i> Works
                    </a>
                    <a href="/contact" class="nav-link block lg:inline-block mx-4 {{ request()->is('contact') ? 'active-link' : '' }}">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                    <a href="/projects" class="nav-link block lg:inline-block mx-4 {{ request()->is('projects') ? 'active-link' : '' }}">
                        <i class="fas fa-project-diagram"></i> Projects
                    </a>
                    <a href="/services" class="nav-link block lg:inline-block mx-4 {{ request()->is('services') ? 'active-link' : '' }}">
                        <i class="fas fa-concierge-bell"></i> Services
                    </a>
                    <a href="/tropicalBeauty" class="nav-link block lg:inline-block mx-4 {{ request()->is('tropicalBeauty') ? 'active-link' : '' }}">
                        <i class="fas fa-spa"></i> Beauty
                    </a>
                </div>
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
