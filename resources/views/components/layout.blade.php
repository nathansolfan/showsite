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

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>







    <!-- Main Content -->
    <main id="main-content" class="flex-grow">
        {{ $slot }}
    </main>

  <!-- Navigation -->
  @include('partials.footer')



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
