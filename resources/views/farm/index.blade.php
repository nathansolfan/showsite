<x-layout>

    <main class="bg-white text-gray-900">

        {{-- 1. HERO SECTION: MINIMALISTA E COM ESPAÇO --}}
        <section class="py-24 md:py-40 bg-gray-50/50">
            <div class="max-w-7xl mx-auto px-6">

                <p class="text-lg font-sans uppercase tracking-widest text-green-900 mb-6 border-l-4 border-green-900 pl-4">
                    Refúgio na Mata Atlântica
                </p>

                <h1 class="text-7xl md:text-8xl font-serif font-light leading-snug max-w-5xl">
                    Descubra a Experiência Giggio Pizzol: <br>Pausa, Natureza e Celebração.
                </h1>

                {{-- Imagem de Impacto Wide --}}
                <div class="mt-20 overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/image4.jpg') }}" alt="Vista ampla do sítio ou chalé"
                         class="w-full h-auto transform transition-transform duration-700 ease-in-out hover:scale-105">
                </div>

            </div>
        </section>

        {{-- Divisor Subtil --}}
        <div class="max-w-7xl mx-auto border-t border-gray-200 mt-20"></div>

        {{-- 2. SEÇÃO DESTAQUE: EVENTOS (Layout 60/40 - Foco no Espaço) --}}
        <section class="py-24">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-5 gap-16">

                {{-- Coluna de Conteúdo (3/5) --}}
                <div class="md:col-span-3 space-y-8">
                    <h2 class="text-5xl font-serif font-light leading-tight">
                        Seu evento em um palco natural e exclusivo.
                    </h2>
                    <p class="text-xl font-sans text-gray-700 max-w-lg">
                        Casamentos intimistas, retiros empresariais ou celebrações de família. Nosso espaço rústico-chique oferece a privacidade e a beleza bruta da natureza, garantindo que sua celebração seja inesquecível e profundamente conectada.
                    </p>
                    <ul class="list-none space-y-3 pt-4 text-lg">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check text-green-900 text-xl pt-1"></i>
                            <span>Capacidade para até 150 convidados.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check text-green-900 text-xl pt-1"></i>
                            <span>Cozinha gourmet e áreas de apoio completas.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check text-green-900 text-xl pt-1"></i>
                            <span>Pacotes com serviço de buffet de fazenda.</span>
                        </li>
                    </ul>
                    <a href="#" {{-- href="{{ route('servicos.eventos') }}" --}}
                    class="mt-8 inline-block text-lg font-sans uppercase tracking-widest text-green-900 border-b-2 border-green-900 pb-1 hover:border-green-600 transition duration-300">
                        Ver Catálogo de Espaços &rarr;
                    </a>
                </div>

                {{-- Coluna de Imagem (2/5) --}}
                <div class="md:col-span-2 order-first md:order-none overflow-hidden h-96 md:h-auto">
                    <img src="{{ asset('images/image5.jpg') }}" alt="Espaço para eventos rústico"
                         class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out hover:scale-110">
                </div>

            </div>
        </section>

        {{-- 3. SEÇÃO DESTAQUE: HOSPEDAGEM (Layout 70/30 Invertido - Foco na Exclusividade) --}}
        <section class="py-24 bg-gray-50/50">
            <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-5 gap-16">

                {{-- Coluna de Imagem (3/5) --}}
                <div class="md:col-span-3 overflow-hidden h-96 md:h-[600px]">
                    <img src="{{ asset('images/image6.jpg') }}" alt="Interior do Chalé de Hospedagem"
                         class="w-full h-full object-cover transform transition-transform duration-700 ease-in-out hover:scale-105">
                </div>

                {{-- Coluna de Conteúdo (2/5) --}}
                <div class="md:col-span-2 space-y-8 self-center">
                    <h2 class="text-5xl font-serif font-light leading-tight">
                        Chalés Privativos: Silêncio e Conforto.
                    </h2>
                    <p class="text-xl font-sans text-gray-700">
                        Projetados para o máximo de descanso, nossos chalés unem o charme rústico da madeira com o conforto moderno. Desconecte-se na lareira e acorde com o canto dos pássaros, com vista total para a natureza preservada.
                    </p>
                    <ul class="list-none space-y-3 pt-4 text-lg">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check text-green-900 text-xl pt-1"></i>
                            <span>Café da manhã com produtos frescos da fazenda.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check text-green-900 text-xl pt-1"></i>
                            <span>Lareira ecológica e banheira de imersão.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check text-green-900 text-xl pt-1"></i>
                            <span>Passeios guiados e trilhas exclusivas.</span>
                        </li>
                    </ul>
                    <a href="#" {{-- href="{{ route('servicos.hospedagem') }}" --}}
                    class="mt-8 inline-block text-lg font-sans uppercase tracking-widest text-green-900 border-b-2 border-green-900 pb-1 hover:border-green-600 transition duration-300">
                        Ver Disponibilidade &rarr;
                    </a>
                </div>

            </div>
        </section>

        {{-- 4. CTA FINAL (Minimalista) --}}
        <section class="py-20 bg-white border-t border-gray-200">
            <div class="max-w-4xl mx-auto text-center px-6">
                <p class="text-3xl font-serif font-light mb-6">
                    "Tudo o que oferecemos é cultivado com propósito e paixão."
                </p>

                <a href="#" {{-- href="{{ route('contato.index') }}" --}}
                class="inline-flex items-center justify-center px-10 py-4 bg-green-900 text-white font-bold rounded-full shadow-lg
                          hover:bg-green-700 transition duration-300 uppercase tracking-widest text-lg
                          transform hover:-translate-y-1">
                    Fale Conosco para Reservas Exclusivas
                </a>
            </div>
        </section>

    </main>
</x-layout>
