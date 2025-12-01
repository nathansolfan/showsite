<!-- Apple-Style Navigation -->
<nav class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-2xl border-b border-gray-200/50">
    <div class="max-w-[980px] mx-auto px-6">
        <div class="flex items-center justify-between h-12">

            <!-- Logo -->
            <a href="/" class="flex items-center -ml-2">
                <img src="{{ asset('images/logoNF.png') }}" alt="NF" class="h-7 opacity-90 hover:opacity-100 transition-opacity">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-xs text-gray-800 hover:text-black transition-colors">Home</a>
                <a href="/about" class="text-xs text-gray-800 hover:text-black transition-colors">About</a>
                <a href="/contact" class="text-xs text-gray-800 hover:text-black transition-colors">Contact</a>
                <a href="https://github.com/nathansolfan?tab=repositories" target="_blank" class="text-xs text-gray-800 hover:text-black transition-colors">Github</a>
                <a href="{{ route('feedback') }}" class="text-xs text-gray-800 hover:text-black transition-colors">Feedback</a>
                <a href="{{ route('blog.index') }}" class="text-xs text-gray-800 hover:text-black transition-colors">Projects</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden p-1 -mr-1">
                <svg id="menu-open" class="w-5 h-5 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="menu-close" class="w-5 h-5 text-gray-800 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed w-full top-12 bg-white/95 backdrop-blur-2xl border-b border-gray-200/50 hidden md:hidden z-40">
    <div class="max-w-[980px] mx-auto px-6 py-6">
        <div class="space-y-4">
            <a href="/" class="block text-2xl text-gray-900 hover:text-gray-600 transition-colors">Home</a>
            <a href="/about" class="block text-2xl text-gray-900 hover:text-gray-600 transition-colors">About</a>
            <a href="/contact" class="block text-2xl text-gray-900 hover:text-gray-600 transition-colors">Contact</a>
            <a href="https://github.com/nathansolfan?tab=repositories" target="_blank" class="block text-2xl text-gray-900 hover:text-gray-600 transition-colors">Github</a>
            <a href="{{ route('feedback') }}" class="block text-2xl text-gray-900 hover:text-gray-600 transition-colors">Feedback</a>
            <a href="{{ route('blog.index') }}" class="block text-2xl text-gray-900 hover:text-gray-600 transition-colors">Projects</a>
        </div>
    </div>
</div>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    const open = document.getElementById('menu-open');
    const close = document.getElementById('menu-close');

    btn.onclick = () => {
        menu.classList.toggle('hidden');
        open.classList.toggle('hidden');
        close.classList.toggle('hidden');
    };

    // Close menu when clicking links
    menu.querySelectorAll('a').forEach(a => {
        a.onclick = () => {
            menu.classList.add('hidden');
            open.classList.remove('hidden');
            close.classList.add('hidden');
        };
    });
</script>
