<!-- Navigation -->
<nav class="sticky top-0 z-50 bg-gradient-to-r from-blue-600 to-blue-500 shadow-lg">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-center h-20">

            <!-- Logo -->
            <a href="/" class="transform hover:scale-110 transition-transform duration-300">
                <img src="{{ asset('images/logoNF.png') }}" alt="Nathan Ferreira" class="h-36 drop-shadow-lg mt-4">
            </a>

            <!-- Desktop Links -->
            <div class="hidden lg:flex items-center gap-8">
                <a href="/" class="text-white hover:text-blue-100 font-medium transition-colors">Home</a>
                <a href="/about" class="text-white hover:text-blue-100 font-medium transition-colors">About</a>
                <a href="/contact" class="text-white hover:text-blue-100 font-medium transition-colors">Contact</a>
                <a href="https://github.com/nathansolfan?tab=repositories" target="_blank"
                   class="text-white hover:text-blue-100 font-medium transition-colors">Github</a>
                <a href="{{ route('feedback') }}" class="text-white hover:text-blue-100 font-medium transition-colors">Feedback</a>
                @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button class="text-white hover:text-blue-100 font-medium transition-colors" type="submit">
                            Logout
                        </button>
                    </form>
                @endauth
                <a href="{{ route('blog.index') }}"
                   class="px-6 py-2.5 bg-white text-blue-600 rounded-lg font-semibold hover:bg-blue-50 transform hover:scale-105 transition-all shadow-md">Projects</a>
                <p class="text-white hover:text-blue-100 font-medium transition-colors">
                    {{--                        Hi,{{ auth()->check() ? auth()->user()->name : '' }}--}}
                    {{--                        Hi, {{auth()->user()->name}}--}}

                    @if(auth()->user())
                        Hi, <a href="{{ route('user.show', auth()->id()) }}">{{ auth()->user()->name }}</a>
                    @else
                        @if(request()->is('/') || request()->routeIs('blog.index'))
                            Welcome
                        @endif
                    @endif
                </p>

            </div>

            <!-- Mobile Button -->
            <button id="nav-toggle" class="lg:hidden text-white p-2 hover:bg-white/10 rounded-lg transition-colors">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-blue-500 border-t border-blue-400">
        <div class="px-6 py-4 space-y-3">
            <a href="/" class="block text-white hover:bg-white/10 px-4 py-2 rounded-lg transition-colors">Home</a>
            <a href="/about" class="block text-white hover:bg-white/10 px-4 py-2 rounded-lg transition-colors">About</a>
            <a href="/contact"
               class="block text-white hover:bg-white/10 px-4 py-2 rounded-lg transition-colors">Contact</a>
            <a href="https://github.com/nathansolfan?tab=repositories" target="_blank"
               class="block text-white hover:bg-white/10 px-4 py-2 rounded-lg transition-colors">Github</a>
            <a href="{{ route('feedback') }}"
               class="block text-white hover:bg-white/10 px-4 py-2 rounded-lg transition-colors">Feedback</a>
            <a href="{{ route('blog.index') }}"
               class="block text-white hover:bg-white/10 px-4 py-2 rounded-lg transition-colors">Projects</a>
            @auth
                <a href="{{ route('feedback') }}"
                   class="block text-white hover:bg-white/10 px-4 py-2 rounded-lg transition-colors">Feedback</a>
            @endauth
        </div>
    </div>
</nav>
