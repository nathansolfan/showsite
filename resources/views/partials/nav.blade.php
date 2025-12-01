<!-- Modern Floating Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 px-6 py-4">
    <div class="max-w-7xl mx-auto">
        <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-full px-6 py-3 shadow-2xl">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="flex items-center group">
                        <img src="{{ asset('images/logoNF.png') }}"
                             alt="Nathan Ferreira Logo"
                             class="h-12 w-auto transform group-hover:scale-110 transition-transform duration-300">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="text-black text-sm font-light tracking-wide hover:text-rose-400 transition-colors duration-300 relative group">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-rose-400 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/about" class="text-white text-sm font-light tracking-wide hover:text-rose-400 transition-colors duration-300 relative group">
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-rose-400 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="/contact" class="text-white text-sm font-light tracking-wide hover:text-rose-400 transition-colors duration-300 relative group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-rose-400 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="https://github.com/nathansolfan?tab=repositories"
                       target="_blank"
                       class="text-white text-sm font-light tracking-wide hover:text-rose-400 transition-colors duration-300 relative group">
                        Github
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-rose-400 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('feedback') }}" class="text-white text-sm font-light tracking-wide hover:text-rose-400 transition-colors duration-300 relative group">
                        Feedback
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-rose-400 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="{{ route('blog.index') }}" class="text-white text-sm font-light tracking-wide hover:text-rose-400 transition-colors duration-300 relative group">
                        Projects
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-rose-400 group-hover:w-full transition-all duration-300"></span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="nav-toggle"
                        class="lg:hidden text-white p-2 hover:text-rose-400 transition-colors duration-300"
                        aria-label="Toggle Navigation Menu">
                    <svg id="menu-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="menu-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden hidden">
    <div class="absolute inset-0 bg-black/90 backdrop-blur-xl" id="mobile-menu-backdrop"></div>
    <div class="relative h-full flex items-center justify-center">
        <div class="space-y-8 text-center">
            <a href="/" class="block text-white text-3xl font-light hover:text-rose-400 transition-colors duration-300 transform hover:scale-110">
                Home
            </a>
            <a href="/about" class="block text-white text-3xl font-light hover:text-rose-400 transition-colors duration-300 transform hover:scale-110">
                About
            </a>
            <a href="/contact" class="block text-white text-3xl font-light hover:text-rose-400 transition-colors duration-300 transform hover:scale-110">
                Contact
            </a>
            <a href="https://github.com/nathansolfan?tab=repositories"
               target="_blank"
               class="block text-white text-3xl font-light hover:text-rose-400 transition-colors duration-300 transform hover:scale-110">
                Github
            </a>
            <a href="{{ route('feedback') }}" class="block text-white text-3xl font-light hover:text-rose-400 transition-colors duration-300 transform hover:scale-110">
                Feedback
            </a>
            <a href="{{ route('blog.index') }}" class="block text-white text-3xl font-light hover:text-rose-400 transition-colors duration-300 transform hover:scale-110">
                Projects
            </a>
        </div>
    </div>
</div>

<script>
    // Mobile menu toggle
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuOpen = document.getElementById('menu-open');
    const menuClose = document.getElementById('menu-close');
    const backdrop = document.getElementById('mobile-menu-backdrop');

    function toggleMenu() {
        mobileMenu.classList.toggle('hidden');
        menuOpen.classList.toggle('hidden');
        menuClose.classList.toggle('hidden');
        document.body.classList.toggle('overflow-hidden');
    }

    navToggle.addEventListener('click', toggleMenu);
    backdrop.addEventListener('click', toggleMenu);

    // Close menu when clicking on a link
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });
</script>
