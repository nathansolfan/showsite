<!-- Ultra Modern Navigation -->
<nav class="fixed top-0 left-0 right-0 z-50 transition-all duration-500" id="mainNav">
    <div class="max-w-7xl mx-auto px-6 py-6">
        <div class="bg-white/95 backdrop-blur-md rounded-2xl shadow-xl border border-gray-200/50 transition-all duration-300 hover:shadow-2xl">
            <div class="flex justify-between items-center px-8 py-4">
                <!-- Logo with Glow Effect -->
                <div class="relative group">
                    <div class="absolute -inset-2 bg-gradient-to-r from-rose-500 to-purple-500 rounded-lg blur opacity-0 group-hover:opacity-30 transition duration-500"></div>
                    <a href="/" class="relative flex items-center">
                        <img src="{{ asset('images/logoNF.png') }}"
                             alt="Nathan Ferreira"
                             class="h-14 w-auto transform group-hover:scale-105 transition-all duration-300">
                    </a>
                </div>

                <!-- Desktop Navigation - Minimal & Clean -->
                <div class="hidden lg:flex items-center gap-1">
                    <a href="/" class="group px-5 py-2 text-black text-sm font-medium tracking-wide rounded-lg hover:bg-gray-50 transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10">Home</span>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-rose-500 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </a>
                    <a href="/about" class="group px-5 py-2 text-black text-sm font-medium tracking-wide rounded-lg hover:bg-gray-50 transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10">About</span>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-rose-500 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </a>
                    <a href="/contact" class="group px-5 py-2 text-black text-sm font-medium tracking-wide rounded-lg hover:bg-gray-50 transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10">Contact</span>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-rose-500 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </a>
                    <a href="https://github.com/nathansolfan?tab=repositories"
                       target="_blank"
                       class="group px-5 py-2 text-black text-sm font-medium tracking-wide rounded-lg hover:bg-gray-50 transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10 flex items-center gap-2">
                            Github
                            <svg class="w-3 h-3 transform group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </span>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-rose-500 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </a>
                    <a href="{{ route('feedback') }}" class="group px-5 py-2 text-black text-sm font-medium tracking-wide rounded-lg hover:bg-gray-50 transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10">Feedback</span>
                        <div class="absolute bottom-0 left-0 w-full h-0.5 bg-gradient-to-r from-rose-500 to-purple-500 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    </a>
                    <a href="{{ route('blog.index') }}" class="group px-6 py-2.5 ml-2 text-white text-sm font-medium tracking-wide rounded-lg bg-gradient-to-r from-rose-500 to-purple-600 hover:from-rose-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Projects
                    </a>
                </div>

                <!-- Mobile Menu Button - Animated -->
                <button id="nav-toggle"
                        class="lg:hidden relative w-10 h-10 text-black focus:outline-none"
                        aria-label="Toggle Navigation">
                    <div class="absolute w-6 h-0.5 bg-black transform transition-all duration-300 ease-in-out" style="top: 35%;" id="line1"></div>
                    <div class="absolute w-6 h-0.5 bg-black transform transition-all duration-300 ease-in-out" style="top: 50%;" id="line2"></div>
                    <div class="absolute w-6 h-0.5 bg-black transform transition-all duration-300 ease-in-out" style="top: 65%;" id="line3"></div>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu - Sleek Slide -->
<div id="mobile-menu" class="fixed top-0 right-0 h-full w-80 bg-white shadow-2xl transform translate-x-full transition-transform duration-500 ease-out z-50 lg:hidden">
    <div class="p-8">
        <!-- Close Button -->
        <button id="menu-close" class="absolute top-6 right-6 w-10 h-10 flex items-center justify-center text-black hover:bg-gray-100 rounded-full transition-all duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Mobile Logo -->
        <div class="mb-12 mt-4">
            <img src="{{ asset('images/logoNF.png') }}" alt="Nathan Ferreira" class="h-12 w-auto">
        </div>

        <!-- Mobile Links -->
        <nav class="space-y-2">
            <a href="/" class="flex items-center justify-between px-4 py-4 text-black font-medium rounded-xl hover:bg-gray-50 transition-all duration-300 group">
                <span>Home</span>
                <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/about" class="flex items-center justify-between px-4 py-4 text-black font-medium rounded-xl hover:bg-gray-50 transition-all duration-300 group">
                <span>About</span>
                <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="/contact" class="flex items-center justify-between px-4 py-4 text-black font-medium rounded-xl hover:bg-gray-50 transition-all duration-300 group">
                <span>Contact</span>
                <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="https://github.com/nathansolfan?tab=repositories" target="_blank" class="flex items-center justify-between px-4 py-4 text-black font-medium rounded-xl hover:bg-gray-50 transition-all duration-300 group">
                <span>Github</span>
                <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
            </a>
            <a href="{{ route('feedback') }}" class="flex items-center justify-between px-4 py-4 text-black font-medium rounded-xl hover:bg-gray-50 transition-all duration-300 group">
                <span>Feedback</span>
                <svg class="w-5 h-5 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="{{ route('blog.index') }}" class="flex items-center justify-center mt-6 px-4 py-4 text-white font-medium rounded-xl bg-gradient-to-r from-rose-500 to-purple-600 hover:from-rose-600 hover:to-purple-700 transform hover:scale-105 transition-all duration-300 shadow-lg">
                Projects
            </a>
        </nav>

        <!-- Social Links -->
        <div class="absolute bottom-8 left-8 right-8">
            <div class="pt-6 border-t border-gray-200">
                <p class="text-xs text-gray-500 mb-3">Follow me</p>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-lg hover:bg-gradient-to-r hover:from-rose-500 hover:to-purple-600 hover:text-white transition-all duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-lg hover:bg-gradient-to-r hover:from-rose-500 hover:to-purple-600 hover:text-white transition-all duration-300">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center bg-gray-100 rounded-lg hover:bg-gradient-to-r hover:from-rose-500 hover:to-purple-600 hover:text-white transition-all duration-300">
                        <i class="fab fa-dribbble"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Mobile Menu Backdrop -->
<div id="mobile-backdrop" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 opacity-0 pointer-events-none transition-opacity duration-500 lg:hidden"></div>

<script>
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileBackdrop = document.getElementById('mobile-backdrop');
    const menuClose = document.getElementById('menu-close');
    const line1 = document.getElementById('line1');
    const line2 = document.getElementById('line2');
    const line3 = document.getElementById('line3');

    let isOpen = false;

    function toggleMenu() {
        isOpen = !isOpen;

        if (isOpen) {
            // Open menu
            mobileMenu.classList.remove('translate-x-full');
            mobileBackdrop.classList.remove('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'hidden';

            // Animate hamburger to X
            line1.style.transform = 'rotate(45deg) translate(5px, 5px)';
            line2.style.opacity = '0';
            line3.style.transform = 'rotate(-45deg) translate(5px, -5px)';
        } else {
            // Close menu
            mobileMenu.classList.add('translate-x-full');
            mobileBackdrop.classList.add('opacity-0', 'pointer-events-none');
            document.body.style.overflow = '';

            // Animate X back to hamburger
            line1.style.transform = 'rotate(0) translate(0, 0)';
            line2.style.opacity = '1';
            line3.style.transform = 'rotate(0) translate(0, 0)';
        }
    }

    navToggle.addEventListener('click', toggleMenu);
    menuClose.addEventListener('click', toggleMenu);
    mobileBackdrop.addEventListener('click', toggleMenu);

    // Close menu when clicking on links
    const mobileLinks = mobileMenu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (isOpen) toggleMenu();
        });
    });

    // Navbar scroll effect
    let lastScroll = 0;
    const mainNav = document.getElementById('mainNav');

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > 100) {
            mainNav.classList.add('py-3');
            mainNav.classList.remove('py-6');
        } else {
            mainNav.classList.add('py-6');
            mainNav.classList.remove('py-3');
        }

        lastScroll = currentScroll;
    });
</script>
