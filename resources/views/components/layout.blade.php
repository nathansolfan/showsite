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
    <script>
        AOS.init({
            duration: 400,
            once: true
        });
    </script>

</body>

</html>
