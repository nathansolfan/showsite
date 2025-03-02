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
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/home.js', 'resources/js/projectAnimation.js', 'resources/js/textAnimation.js', 'resources/js/scrollText.js'])

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
    <!-- Footer -->
    <footer class="bg-gradient-to-b from-yellow-100 to-green-100 text-gray-900 py-4 mt-auto">
        <div class="max-w-4xl mx-auto px-4 space-y-4">

            <!-- Main Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center md:text-left text-sm">

                <!-- Company Info -->
                <div>
                    <h2 class="text-lg font-semibold">Nathan Ferreira</h2>
                    <p class="text-gray-600">High-quality products, built with excellence.</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold">Quick Links</h3>
                    <ul class="space-y-1">
                        <li><a href="{{ url('/about') }}" class="hover:text-green-600">About</a></li>
                        <li><a href="{{ url('/contact') }}" class="hover:text-green-600">Contact</a></li>
                        <li><a href="{{ url('/policy') }}" class="hover:text-green-600">Privacy</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-semibold">Stay Updated</h3>
                    <form class="flex justify-center md:justify-end space-x-1 mt-2">
                        <input type="email" placeholder="Email"
                            class="px-2 py-1 w-32 border border-gray-300 rounded focus:ring-2 focus:ring-green-500 text-xs">
                        <button type="submit"
                            class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 text-xs">
                            Subscribe
                        </button>
                    </form>
                </div>

            </div>

            <!-- Bottom Section -->
            <div
                class="flex flex-col md:flex-row justify-between items-center text-gray-600 text-xs pt-2 border-t border-gray-300">

                <!-- Copyright -->
                <p>&copy; 2025 Nathan Ferreira.</p>

                <!-- Social Media -->
                <div class="flex space-x-3 mt-2 md:mt-0">
                    <a href="#" aria-label="Facebook" class="hover:text-green-600">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M22 12.1C22 6.5 17.5 2 12 2S2 6.5 2 12.1c0 5.1 3.7 9.4 8.5 10V15h-2v-3h2v-2.3c0-2 1.2-3 3-3 .8 0 1.7.2 1.7.2v2h-1c-1 0-1.3.6-1.3 1.2V12h2.4l-.4 3h-2v7c4.8-.6 8.5-4.9 8.5-10z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Instagram" class="hover:text-green-600">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M7.75 2C4.15 2 2 4.15 2 7.75v8.5C2 19.85 4.15 22 7.75 22h8.5c3.6 0 5.75-2.15 5.75-5.75v-8.5C22 4.15 19.85 2 16.25 2h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 1 1 0-10zm6.3.5a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 1 1 0-2.4zM12 9.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 1 0 0-5z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Twitter" class="hover:text-green-600">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M22.46 6c-.8.4-1.6.7-2.5.8a4.48 4.48 0 0 0 2-2.5 9.06 9.06 0 0 1-2.8 1 4.5 4.5 0 0 0-7.7 4c-3.7-.2-7-2-9.2-4.8a4.5 4.5 0 0 0 1.4 6c-.6 0-1.3-.2-1.8-.5v.1c0 2 1.4 3.7 3.3 4.1a4.4 4.4 0 0 1-2 .1c.5 1.5 2 2.6 3.7 2.7a9.1 9.1 0 0 1-5.6 2c-.4 0-.8 0-1.2-.1A12.8 12.8 0 0 0 8 21c8.3 0 12.8-6.9 12.8-12.9v-.6c.8-.6 1.5-1.3 2-2.1z" />
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </footer>


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

    {{-- AOS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Detect mobile devices
        const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

        // Initialize AOS with optimized settings for mobile
        AOS.init({
            duration: isMobile ? 600 : 400,     // Slightly longer duration on mobile for smoother appearance
            once: true,                         // Only animate once
            offset: isMobile ? 0 : 120,         // Smaller offset on mobile to trigger earlier
            delay: isMobile ? 0 : 50,           // No delay on mobile
            throttleDelay: isMobile ? 200 : 99, // Less frequent calculations on mobile
            easing: 'ease-out-cubic'            // Smoother easing function
        });

        // Pause animations during scroll on mobile for better performance
        if (isMobile) {
            let scrollTimeout;
            window.addEventListener('scroll', function() {
                // Disable AOS updates during scroll
                AOS.disabled = true;

                // Re-enable after scrolling stops with a delay
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(function() {
                    AOS.disabled = false;
                    AOS.refresh(); // Refresh to apply animations after scroll
                }, 150);
            }, { passive: true }); // Use passive listener for better scroll performance
        }
    </script>












</body>

</html>
