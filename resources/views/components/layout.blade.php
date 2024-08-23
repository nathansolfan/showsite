<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Your Portfolio' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800 font-sans leading-normal tracking-normal flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="w-full py-6 bg-white shadow">
        <div class="container mx-auto flex items-center justify-between">
            <div class="text-lg font-bold">YourName</div>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-800 border-gray-400 hover:text-gray-600 hover:border-gray-600">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
                <div class="lg:flex-grow ">
                    <a href="/" class="block lg:inline-block text-gray-800 hover:text-gray-600 mx-4">Home</a>
                    <a href="/about" class="block lg:inline-block text-gray-800 hover:text-gray-600 mx-4">About</a>
                    {{-- route('works') is recommended--}}
                    <a href="/works" class="block lg:inline-block text-gray-800 hover:text-gray-600 mx-4">Works</a>
                    <a href="/contact" class="block lg:inline-block text-gray-800 hover:text-gray-600 mx-4">Contact</a>
                    <a href="/projects" class="block lg:inline-block text-gray-800 hover:text-gray-600 mx-4">Projects</a>

                    <a href="/services" class="block lg:inline-block text-gray-800 hover:text-gray-600 mx-4">Services</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 YourName. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Toggle the navigation menu on small screens
        document.getElementById('nav-toggle').onclick = function() {
            var navContent = document.getElementById('nav-content');
            navContent.classList.toggle('hidden');
        }
    </script>

</body>
</html>
