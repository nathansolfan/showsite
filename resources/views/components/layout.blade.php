<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Your Portfolio' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="w-full py-6 bg-white shadow dark:bg-gray-900 dark:text-white dark:border-b dark:border-gray-700">
        <div class="container mx-auto flex items-center justify-between">
            <div class="text-lg font-bold">Nathan Ferreira</div>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-800 border-gray-400 hover:text-gray-600 hover:border-gray-600 dark:text-gray-200 dark:border-gray-600">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent dark:bg-gray-900 lg:dark:bg-transparent text-black dark:text-white p-4 lg:p-0 z-20" id="nav-content">
                <div class="lg:flex-grow">
                    <a href="/" class="block lg:inline-block text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-400 mx-4 border-b border-transparent dark:border-gray-600">Home</a>
                    <a href="/about" class="block lg:inline-block text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-400 mx-4 border-b border-transparent dark:border-gray-600">About</a>
                    <a href="/works" class="block lg:inline-block text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-400 mx-4 border-b border-transparent dark:border-gray-600">Works</a>
                    <a href="/contact" class="block lg:inline-block text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-400 mx-4 border-b border-transparent dark:border-gray-600">Contact</a>
                    <a href="/projects" class="block lg:inline-block text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-400 mx-4 border-b border-transparent dark:border-gray-600">Projects</a>
                    <a href="/services" class="block lg:inline-block text-gray-800 hover:text-gray-600 dark:text-gray-200 dark:hover:text-gray-400 mx-4 border-b border-transparent dark:border-gray-600">Services</a>
                </div>

                <!-- Dark Mode Toggle -->
                <button id="theme-toggle" class="flex items-center px-3 py-2 rounded text-gray-800 dark:text-gray-200 focus:outline-none border dark:border-gray-600">
                    <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3v1M16.22 5.64l-.7.7M21 12h-1M19.36 16.22l-.7-.7M12 21v-1M7.78 18.36l.7-.7M4 12H3M4.64 7.78l.7-.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12 5a7 7 0 00-7 7h14a7 7 0 00-7-7z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3v1M16.22 5.64l-.7.7M21 12h-1M19.36 16.22l-.7-.7M12 21v-1M7.78 18.36l.7-.7M4 12H3M4.64 7.78l.7-.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">

        <!-- Hero Section -->
        <section id="hero" class="w-full bg-cover bg-center h-auto dark:bg-gray-900 border-b dark:border-gray-700" style="background-image: url('your-image-url.jpg');">
            <div class="container mx-auto flex items-center justify-center py-20">
                <div class="text-center">
                    <h1 class="text-5xl font-bold text-black dark:text-white">Welcome to My Portfolio</h1>
                    <p class="text-xl text-black-200 mt-4 dark:text-gray-300">I'm Nathan Ferreira, a passionate web developer skilled in both front-end and back-end tasks.</p>
                    <a href="{{ url('/works')}}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600 transition duration-300 border dark:border-gray-600">See My Work</a>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-auto dark:bg-gray-900 dark:text-gray-300 border-t dark:border-gray-700">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Nathan Ferreira. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Toggle the navigation menu on small screens
        document.getElementById('nav-toggle').onclick = function() {
            var navContent = document.getElementById('nav-content');
            navContent.classList.toggle('hidden');
        }

        // Initialize theme based on user preference or default
        if (localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.getElementById('theme-toggle-light-icon').classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            document.getElementById('theme-toggle-dark-icon').classList.remove('hidden');
        }

        // Toggle theme
        const themeToggleBtn = document.getElementById('theme-toggle');
        themeToggleBtn.addEventListener('click', function() {
            const darkModeEnabled = document.documentElement.classList.toggle('dark');
            document.getElementById('theme-toggle-dark-icon').classList.toggle('hidden', darkModeEnabled);
            document.getElementById('theme-toggle-light-icon').classList.toggle('hidden', !darkModeEnabled);
            localStorage.setItem('theme', darkModeEnabled ? 'dark' : 'light');
        });
    </script>

</body>
</html>
