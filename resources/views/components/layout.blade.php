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
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/home.js', 'resources/js/projectAnimation.js', 'resources/js/textAnimation.js','resources/js/scrollText.js'
])

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
    @include('partials.nav')



    <!-- Main Content -->
    <main id="main-content" class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
<footer class="bg-gradient-to-b from-yellow-100 to-green-100 text-gray-900 py-12 mt-auto">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Top Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border-b border-gray-300 pb-10">

            <!-- Company Info -->
            <div class="text-center md:text-left">
                <h2 class="text-xl font-semibold">Nathan Ferreira</h2>
                <p class="text-gray-600 mt-2">
                    High-quality products with a commitment to excellence.
                </p>
            </div>

            <!-- Navigation Links -->
            <div class="text-center">
                <h3 class="text-lg font-semibold">Quick Links</h3>
                <ul class="mt-2 space-y-2">
                    <li><a href="{{ url('/shop') }}" class="hover:text-gray-800">Shop</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-gray-800">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-gray-800">Contact</a></li>
                    <li><a href="{{ url('/policy') }}" class="hover:text-gray-800">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Newsletter Subscription -->
            <div class="text-center md:text-right">
                <h3 class="text-lg font-semibold">Subscribe to Our Emails</h3>
                <p class="text-gray-600 mt-2">
                    Join our email list for exclusive offers and the latest news.
                </p>
                <form class="mt-4 flex justify-center md:justify-end">
                    <input type="email" placeholder="Email"
                        class="px-4 py-2 w-64 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-green-500">
                    <button type="submit"
                        class="px-4 py-2 bg-green-500 text-white rounded-r-md hover:bg-green-600">
                        ➝
                    </button>
                </form>
            </div>

        </div>

        <!-- Bottom Section -->
        <div class="flex flex-col md:flex-row justify-between items-center mt-10 text-gray-600 text-sm">
            <!-- Copyright -->
            <p>&copy; 2025 Nathan Ferreira. All rights reserved.</p>

            <!-- Social Media Links -->
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="hover:text-gray-800">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="hover:text-gray-800">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="hover:text-gray-800">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="hover:text-gray-800">
                    <i class="fab fa-tiktok"></i>
                </a>
            </div>
        </div>

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
