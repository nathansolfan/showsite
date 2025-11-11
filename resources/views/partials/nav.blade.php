<!-- Navigation -->
<nav role="navigation" class="  w-full top-0 z-50 bg-gradient-to-r from-blue-500 to-blue-400">
    <div class="container mx-auto flex justify-between items-center ">
        <!-- Logo -->
        <div class="text-lg font-bold text-white">
            <a href="/">
                {{-- <img src="{{ asset('images/bgimage.png') }}" alt="Nathan Ferreira Logo" class="h-20 w-auto"> --}}
                <img src="{{ asset('images/logoNF.png') }}" alt="Nathan Ferreira Logo" class="h-20 w-auto">

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
            {{-- <a href="/portfolio" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Portfolio</a>
            <a href="/portfolio2" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Portfolio</a> --}}

            <a href="/contact" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Contact</a>
            {{-- <a href="{{ route('workss') }}" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Github</a> --}}
            <a href="https://github.com/nathansolfan?tab=repositories" class="text-white hover:text-gray-100 transition-transform duration-300 transform hover:scale-105">Github</a>

            <a href="{{ route('feedback') }}" class="text-white hover:text-gray-100">Feedback</a>
            <a href="{{ route('blog.index') }}" class="block text-white hover:text-gray-100">Blog</a>

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
            <a href="{{ route('blog.index') }}" class="block text-white hover:text-gray-100">Blog</a>

        </div>
    </div>
</nav>
