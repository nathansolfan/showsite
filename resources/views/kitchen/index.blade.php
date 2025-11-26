<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Immigrant's Kitchen</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Inter:wght@400;600&display=swap');

        .title-font {
            font-family: 'Playfair Display', serif;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="font-['Inter']">
<div class="relative min-h-screen bg-cover bg-center flex items-center justify-center p-4 overflow-hidden"
     style="background-image: url('{{ asset('images/kitchen.jpg') }}');">
            background-size: 400px auto;">

    <!-- Overlay com gradiente -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-black/25 to-black/40"></div>

    <!-- Vinheta nas bordas -->
    <div class="absolute inset-0 shadow-[inset_0_0_80px_rgba(0,0,0,0.5)]"></div>

    <!-- Conteúdo principal -->
    <div class="relative z-10 text-center max-w-4xl animate-float">

        <!-- Logo/Título -->
{{--        <div class="mb-16">--}}
{{--            <h1 class="title-font text-6xl sm:text-7xl lg:text-9xl font-black text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-yellow-400 to-amber-500 mb-6 leading-tight drop-shadow-[0_0_30px_rgba(252,211,77,0.5)]">--}}
{{--                Immigrant's<br/>Kitchen--}}
{{--            </h1>--}}
{{--            <div class="h-1 w-32 bg-gradient-to-r from-transparent via-yellow-400 to-transparent mx-auto mb-6"></div>--}}
{{--            <p class="text-white text-lg sm:text-xl lg:text-2xl font-light tracking-[0.3em] uppercase">--}}
{{--                Where Stories Meet Flavor--}}
{{--            </p>--}}
{{--        </div>--}}

        <!-- Botões sociais modernos -->
        <div class="flex flex-col sm:flex-row gap-5 justify-center items-center mb-12">
            <a href="https://instagram.com/immigrantskitchen"
               target="_blank"
               class="group relative w-64 overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-600 via-pink-600 to-red-600 rounded-2xl"></div>
                <div class="relative flex items-center justify-center gap-3 bg-black/40 backdrop-blur-sm px-8 py-5 rounded-2xl border-2 border-white/10 transition-all duration-300 hover:bg-black/20 hover:border-white/30 hover:-translate-y-1">
                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    <span class="text-white font-semibold text-lg tracking-wide">Instagram</span>
                </div>
            </a>

{{--            <a href="https://facebook.com/immigrantskitchen"--}}
{{--               target="_blank"--}}
{{--               class="group relative w-64 overflow-hidden">--}}
{{--                <div class="absolute inset-0 bg-blue-600 rounded-2xl"></div>--}}
{{--                <div class="relative flex items-center justify-center gap-3 bg-black/40 backdrop-blur-sm px-8 py-5 rounded-2xl border-2 border-white/10 transition-all duration-300 hover:bg-black/20 hover:border-white/30 hover:-translate-y-1">--}}
{{--                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>--}}
{{--                    </svg>--}}
{{--                    <span class="text-white font-semibold text-lg tracking-wide">Facebook</span>--}}
{{--                </div>--}}
{{--            </a>--}}

{{--            <a href="https://tiktok.com/@immigrantskitchen"--}}
{{--               target="_blank"--}}
{{--               class="group relative w-64 overflow-hidden">--}}
{{--                <div class="absolute inset-0 bg-gradient-to-r from-cyan-400 via-black to-pink-500 rounded-2xl"></div>--}}
{{--                <div class="relative flex items-center justify-center gap-3 bg-black/40 backdrop-blur-sm px-8 py-5 rounded-2xl border-2 border-white/10 transition-all duration-300 hover:bg-black/20 hover:border-white/30 hover:-translate-y-1">--}}
{{--                    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>--}}
{{--                    </svg>--}}
{{--                    <span class="text-white font-semibold text-lg tracking-wide">TikTok</span>--}}
{{--                </div>--}}
{{--            </a>--}}
        </div>

        <!-- Tagline final -->
{{--        <div class="text-white/70 text-sm sm:text-base tracking-wider uppercase">--}}
{{--            <span class="inline-block px-6 py-2 rounded-full bg-white/5 backdrop-blur-sm border border-white/10">--}}
{{--                🌍 Celebrating Global Cuisine--}}
{{--            </span>--}}
{{--        </div>--}}
    </div>
</div>
</body>
</html>
