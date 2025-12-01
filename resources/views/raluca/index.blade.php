<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artist_name ?? 'Portfolio' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500&display=swap');

        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }

        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .float-animation { animation: float 6s ease-in-out infinite; }

        .hover-lift { transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
        .hover-lift:hover { transform: translateY(-12px) rotate(1deg); }

        .text-gradient {
            background: linear-gradient(135deg, #ec4899 0%, #8b5cf6 50%, #10b981 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-neutral-950 text-white overflow-x-hidden">

<!-- Floating Nav -->
<nav class="fixed top-8 left-1/2 -translate-x-1/2 z-50 backdrop-blur-xl bg-white/10 border border-white/20 rounded-full px-8 py-3 shadow-2xl">
    <ul class="flex gap-8 text-sm font-light tracking-wider">
        <li><a href="#home" class="hover:text-rose-400 transition-colors">HOME</a></li>
        <li><a href="#gallery" class="hover:text-rose-400 transition-colors">WORK</a></li>
        <li><a href="#about" class="hover:text-rose-400 transition-colors">ABOUT</a></li>
        <li><a href="#contact" class="hover:text-rose-400 transition-colors">CONTACT</a></li>
    </ul>
</nav>

<!-- Hero Immersive -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-rose-950 via-purple-950 to-emerald-950 opacity-90"></div>
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-72 h-72 bg-rose-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-emerald-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 w-80 h-80 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 4s;"></div>
    </div>

    <div class="relative z-10 text-center px-6 float-animation">
        <div class="text-sm tracking-[0.3em] text-rose-300 mb-6 uppercase">Visual Artist</div>
        <h1 class="text-7xl md:text-9xl font-bold mb-8 text-gradient leading-tight">
            {{ $artist_name ?? 'Maria Silva' }}
        </h1>
        <p class="text-2xl md:text-3xl text-gray-300 font-light max-w-3xl mx-auto mb-12 leading-relaxed">
            {{ $tagline ?? 'Where mythology breathes, nature dreams, and the feminine awakens' }}
        </p>
        <div class="flex gap-6 justify-center">
            <a href="#gallery" class="group relative px-10 py-4 bg-gradient-to-r from-rose-500 to-purple-600 rounded-full overflow-hidden">
                <span class="relative z-10 font-medium tracking-wider">Explore Work</span>
                <div class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
                <span class="absolute inset-0 flex items-center justify-center text-black opacity-0 group-hover:opacity-100 transition-opacity font-medium tracking-wider">Explore Work</span>
            </a>
            <a href="#contact" class="px-10 py-4 border-2 border-white rounded-full hover:bg-white hover:text-black transition-all font-medium tracking-wider">
                Commission
            </a>
        </div>
    </div>

    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Gallery Bento -->
<section id="gallery" class="py-32 px-6 bg-neutral-950">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <div class="inline-block text-xs tracking-[0.3em] text-rose-400 mb-4 uppercase">Portfolio</div>
            <h2 class="text-6xl md:text-7xl font-bold mb-6">Selected Works</h2>
            <p class="text-gray-400 text-lg">Gouache · Watercolor · Oil · Mixed Media</p>
        </div>

        <div class="max-w-5xl mx-auto space-y-24">
            @forelse($artworks ?? [] as $artwork)
                <div class="group relative overflow-hidden rounded-3xl hover-lift cursor-pointer">
                    <img src="{{ $artwork['image'] }}"
                         alt="{{ $artwork['title'] }}"
                         class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <div class="absolute bottom-0 left-0 right-0 p-12 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                            <h3 class="text-4xl md:text-5xl font-bold mb-3">{{ $artwork['title'] }}</h3>
                            <p class="text-rose-300 text-xl">{{ $artwork['medium'] ?? '' }}</p>
                            <p class="text-gray-400 mt-2">{{ $artwork['year'] ?? '' }}</p>
                        </div>
                    </div>
                    <div class="absolute top-6 right-6 bg-white/10 backdrop-blur-md rounded-full p-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>
            @empty
                @php
                    $items = [
                        ['img' => 'https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=1200', 'title' => 'Garden Mermaid', 'medium' => 'Oil on Canvas', 'year' => '2024'],
                        ['img' => 'https://images.unsplash.com/photo-1561214115-f2f134cc4912?w=1200', 'title' => 'Mirror Waters', 'medium' => 'Watercolor', 'year' => '2024'],
                        ['img' => 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=1200', 'title' => 'Flora', 'medium' => 'Watercolor', 'year' => '2024'],
                        ['img' => 'https://images.unsplash.com/photo-1547826039-bfc35e0f1ea8?w=1200', 'title' => 'Green Dreams', 'medium' => 'Mixed Media', 'year' => '2023'],
                        ['img' => 'https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?w=1200', 'title' => 'Reflection', 'medium' => 'Oil on Canvas', 'year' => '2023'],
                        ['img' => 'https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?w=1200', 'title' => 'Inner Nature', 'medium' => 'Watercolor', 'year' => '2023']
                    ];
                @endphp
                @foreach($items as $item)
                    <div class="group relative overflow-hidden rounded-3xl hover-lift cursor-pointer">
                        <img src="{{ $item['img'] }}"
                             alt="{{ $item['title'] }}"
                             class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <div class="absolute bottom-0 left-0 right-0 p-12 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                                <h3 class="text-4xl md:text-5xl font-bold mb-3">{{ $item['title'] }}</h3>
                                <p class="text-rose-300 text-xl">{{ $item['medium'] }}</p>
                                <p class="text-gray-400 mt-2">{{ $item['year'] }}</p>
                            </div>
                        </div>
                        <div class="absolute top-6 right-6 bg-white/10 backdrop-blur-md rounded-full p-4 opacity-0 group-hover:opacity-100 transition-opacity">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                @endforeach
            @endforelse
        </div>
    </div>
</section>

<!-- About Split Screen -->
<section id="about" class="relative overflow-hidden">
    <div class="grid md:grid-cols-2 min-h-screen">
        <div class="relative">
            <img src="{{ $artist_photo ?? 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=800' }}"
                 alt="Artist"
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-transparent to-neutral-950"></div>
        </div>
        <div class="flex items-center bg-neutral-950 px-12 md:px-20 py-20">
            <div>
                <div class="text-xs tracking-[0.3em] text-rose-400 mb-6 uppercase">The Artist</div>
                <h2 class="text-5xl md:text-6xl font-bold mb-8 leading-tight">
                    Where imagination<br/>becomes reality
                </h2>
                <div class="space-y-6 text-gray-300 text-lg leading-relaxed">
                    <p>{{ $about_text ?? 'I\'m a visual artist who believes that every stroke of the brush is a spell, every color a whisper from another world. My work is a portal between the mundane and the magical.' }}</p>
                    <p>{{ $about_text_2 ?? 'Working primarily with gouache, watercolor, and mixed media, I create pieces that invite you to pause, to dream, to remember that magic exists in the everyday. Each artwork is a love letter to nature, mythology, and the divine feminine.' }}</p>
                </div>
                <div class="mt-12 grid grid-cols-3 gap-8">
                    <div>
                        <div class="text-4xl font-bold text-rose-400 mb-2">50+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Exhibitions</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-purple-400 mb-2">200+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Artworks</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold text-emerald-400 mb-2">15+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Awards</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Dramatic -->
<section id="contact" class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-rose-950 via-purple-950 to-emerald-950"></div>
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full" style="background-image: radial-gradient(circle, white 1px, transparent 1px); background-size: 50px 50px;"></div>
    </div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <div class="text-xs tracking-[0.3em] text-rose-300 mb-6 uppercase">Let's Create Magic</div>
        <h2 class="text-6xl md:text-8xl font-bold mb-8 leading-tight">
            Ready to bring<br/>your vision to life?
        </h2>
        <p class="text-2xl text-gray-300 mb-16 font-light">
            Commissions · Collaborations · Exhibitions · Licensing
        </p>

        <a href="mailto:{{ $email ?? 'hello@artist.com' }}"
           class="inline-block group relative">
            <div class="absolute inset-0 bg-gradient-to-r from-rose-500 to-purple-600 rounded-full blur-lg opacity-75 group-hover:opacity-100 transition-opacity"></div>
            <div class="relative bg-white text-black px-16 py-5 rounded-full text-lg font-medium tracking-wider hover:bg-transparent hover:text-white border-2 border-transparent hover:border-white transition-all">
                {{ $email ?? 'Start a Conversation' }}
            </div>
        </a>

        <div class="flex justify-center gap-12 mt-20 text-sm tracking-[0.2em]">
            <a href="{{ $instagram ?? '#' }}" class="group flex items-center gap-3 hover:text-rose-400 transition-colors">
                <span class="w-10 h-10 border border-white rounded-full flex items-center justify-center group-hover:border-rose-400 group-hover:bg-rose-400 transition-all">📷</span>
                INSTAGRAM
            </a>
            <a href="{{ $behance ?? '#' }}" class="group flex items-center gap-3 hover:text-purple-400 transition-colors">
                <span class="w-10 h-10 border border-white rounded-full flex items-center justify-center group-hover:border-purple-400 group-hover:bg-purple-400 transition-all">🎨</span>
                BEHANCE
            </a>
        </div>
    </div>
</section>

<!-- Footer Elegant -->
<footer class="bg-black py-12 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-2xl font-bold text-gradient">{{ $artist_name ?? 'Artist Name' }}</div>
            <div class="text-sm text-gray-500">© {{ date('Y') }} All rights reserved · Made with ♥ and imagination</div>
        </div>
    </div>
</footer>

</body>
</html>
