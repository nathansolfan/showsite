<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artist_name ?? 'Artist Portfolio' }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            background: linear-gradient(135deg, #ffeef8 0%, #e8f5e9 50%, #fff9e6 100%);
            color: #2c3e50;
            line-height: 1.6;
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            background: linear-gradient(45deg, #e91e63, #9c27b0, #4caf50);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #2c3e50;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: #e91e63;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: #e91e63;
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .hero p {
            font-size: 1.3rem;
            color: #546e7a;
            max-width: 600px;
            margin: 0 auto 2rem;
        }

        /* Gallery Grid */
        .gallery {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .gallery h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background: white;
            cursor: pointer;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .gallery-item img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
        }

        .gallery-item-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.8));
            padding: 2rem 1.5rem 1.5rem;
            transform: translateY(100%);
            transition: transform 0.3s;
        }

        .gallery-item:hover .gallery-item-overlay {
            transform: translateY(0);
        }

        .gallery-item-overlay h3 {
            color: white;
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
        }

        .gallery-item-overlay p {
            color: #eceff1;
            font-size: 0.9rem;
        }

        /* About Section */
        .about {
            max-width: 900px;
            margin: 6rem auto;
            padding: 3rem 2rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: #2c3e50;
        }

        .about-content {
            display: flex;
            gap: 3rem;
            align-items: center;
        }

        .about-image {
            flex: 1;
            border-radius: 15px;
            overflow: hidden;
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-text {
            flex: 1;
        }

        .about-text p {
            margin-bottom: 1rem;
            font-size: 1.1rem;
            color: #546e7a;
        }

        /* Contact Section */
        .contact {
            max-width: 600px;
            margin: 6rem auto;
            padding: 3rem 2rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            text-align: center;
        }

        .contact h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #2c3e50;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
        }

        .social-links a {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg, #e91e63, #9c27b0);
            color: white;
            text-decoration: none;
            font-size: 1.5rem;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .social-links a:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 20px rgba(233, 30, 99, 0.4);
        }

        /* Footer */
        footer {
            background: rgba(44, 62, 80, 0.95);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .nav-links {
                gap: 1rem;
            }

            .about-content {
                flex-direction: column;
            }

            .gallery-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<!-- Header -->
<header>
    <nav>
        <div class="logo">{{ $artist_name ?? 'Artist' }}</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#gallery">Galeria</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">Contato</a></li>
        </ul>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero" id="home">
    <h1>Arte Fantástica e Feminina</h1>
    <p>Explorando mundos imaginários através de aquarela, guache e ilustração digital</p>
</section>

<!-- Gallery -->
<section class="gallery" id="gallery">
    <h2>Trabalhos Recentes</h2>
    <div class="gallery-grid">
        @forelse($artworks ?? [] as $artwork)
            <div class="gallery-item">
                <img src="{{ $artwork['image'] }}" alt="{{ $artwork['title'] }}">
                <div class="gallery-item-overlay">
                    <h3>{{ $artwork['title'] }}</h3>
                    <p>{{ $artwork['medium'] ?? 'Técnica mista' }}</p>
                </div>
            </div>
        @empty
            <!-- Exemplos placeholder -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=500" alt="Sereia dos Jardins">
                <div class="gallery-item-overlay">
                    <h3>Sereia dos Jardins</h3>
                    <p>Óleo sobre tela</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1561214115-f2f134cc4912?w=500" alt="Espelho das Águas">
                <div class="gallery-item-overlay">
                    <h3>Espelho das Águas</h3>
                    <p>Aquarela e guache</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=500" alt="Flora Humana">
                <div class="gallery-item-overlay">
                    <h3>Flora Humana</h3>
                    <p>Aquarela</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1547826039-bfc35e0f1ea8?w=500" alt="Sonhos em Verde">
                <div class="gallery-item-overlay">
                    <h3>Sonhos em Verde</h3>
                    <p>Técnica mista</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1518531933037-91b2f5f229cc?w=500" alt="Reflexões">
                <div class="gallery-item-overlay">
                    <h3>Reflexões</h3>
                    <p>Óleo sobre tela</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?w=500" alt="Natureza Interior">
                <div class="gallery-item-overlay">
                    <h3>Natureza Interior</h3>
                    <p>Aquarela</p>
                </div>
            </div>
        @endforelse
    </div>
</section>

<!-- About -->
<section class="about" id="about">
    <h2>Sobre a Artista</h2>
    <div class="about-content">
        <div class="about-image">
            <img src="{{ $artist_photo ?? 'https://images.unsplash.com/photo-1513364776144-60967b0f800f?w=400' }}" alt="Artista">
        </div>
        <div class="about-text">
            <p>{{ $about_text ?? 'Artista visual apaixonada por criar mundos fantásticos onde a natureza e a figura feminina se encontram em harmonia.' }}</p>
            <p>{{ $about_text_2 ?? 'Trabalho principalmente com aquarela, guache e técnicas mistas, explorando temas de mitologia, natureza e surrealismo feminino.' }}</p>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="contact" id="contact">
    <h2>Vamos Conversar?</h2>
    <p>Entre em contato para comissões, colaborações ou apenas para dizer olá!</p>
    <div class="social-links">
        <a href="{{ $instagram ?? '#' }}" title="Instagram">📷</a>
        <a href="mailto:{{ $email ?? 'artist@example.com' }}" title="Email">✉️</a>
        <a href="{{ $behance ?? '#' }}" title="Behance">🎨</a>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; {{ date('Y') }} {{ $artist_name ?? 'Artist Portfolio' }}. Todos os direitos reservados.</p>
</footer>
</body>
</html>
