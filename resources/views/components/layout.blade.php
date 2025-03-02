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
    @include('partials.footer')

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

    {{-- AOS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Replace your current AOS initialization script with this optimized version -->
<script>
    // Detect mobile/tablet devices or reduced motion preference
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // Configure AOS differently based on device capabilities
    if (isMobile || prefersReducedMotion) {
      // Mobile-optimized AOS settings - minimal or no animations
      AOS.init({
        disable: 'mobile', // Completely disable on mobile for best performance
        once: true
      });

      // Instead of AOS animations, use simple CSS classes
      document.addEventListener('DOMContentLoaded', function() {
        // Make project cards visible immediately without animations
        document.querySelectorAll('[data-aos]').forEach(function(el) {
          el.removeAttribute('data-aos');
          el.classList.add('aos-animate'); // Add the final animation state
        });
      });
    } else {
      // Desktop-friendly AOS settings
      AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50
      });
    }

    // Disable scroll animations temporarily during scroll to prevent lag
    let scrollTimeout;
    window.addEventListener('scroll', function() {
      if (!isMobile) return; // Only apply to mobile

      // Disable AOS updates during scroll
      if (typeof AOS !== 'undefined') {
        AOS.disabled = true;
      }

      // Re-enable after scrolling stops with a delay
      clearTimeout(scrollTimeout);
      scrollTimeout = setTimeout(function() {
        if (typeof AOS !== 'undefined') {
          AOS.disabled = false;
        }
      }, 200);
    }, { passive: true }); // Use passive listener for better scroll performance
  </script>

</body>

</html>
