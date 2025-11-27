<x-layout>

    {{-- Container Principal: Fundo Escuro para Máximo Contraste (Estilo Glyphic) --}}
    <main class="bg-gray-950 text-white min-h-screen pt-24">

        {{-- 1. HERO SECTION: FOCO NO PRODUTO (Contraste e Profundidade) --}}
        <section class="relative h-[60vh] flex items-end justify-center text-center bg-cover bg-center"
                 style="background-image: url('{{ asset('images/image2.jpg') }}');">

            {{-- Overlay Black/Green para Drama --}}
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/70 to-transparent"></div>

            <div class="relative z-10 p-12 max-w-5xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-serif font-light italic text-green-300 mb-4 tracking-wider">
                    Processo Artesanal
                </h2>
                <p class="text-7xl md:text-8xl font-black tracking-tighter leading-none
                          bg-gradient-to-r from-amber-200 via-white to-amber-200 bg-clip-text text-transparent
                          drop-shadow-lg mb-8">
                    Da Terra à Sua Xícara
                </p>
            </div>
        </section>


        {{-- 2. SEÇÃO INTRODUÇÃO / MISSÃO DO CAFÉ --}}
        <section class="py-24">
            <div class="max-w-4xl mx-auto text-center px-6">
                <p class="text-xl md:text-2xl font-light text-gray-400 mb-10">
                    Nossa produção não é apenas uma colheita, mas uma filosofia. Cada grão é um reflexo do nosso compromisso com práticas sustentáveis e com a busca incessante pelo perfil de sabor perfeito. Conheça as etapas que transformam nosso grão em excelência.
                </p>
            </div>
        </section>


        {{-- 3. JORNADA DE PRODUÇÃO (Estilo Blocos Cinematográficos) --}}

        {{-- BLOCO 1: O CULTIVO (Verde e Vida) --}}
        <div class="group py-32 border-t border-b border-white/5 relative overflow-hidden transition duration-500 hover:bg-gray-900">
            <div class="absolute inset-0 bg-gradient-to-r from-green-900/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12 px-6 relative z-10">

                {{-- Conteúdo Principal --}}
                <div class="md:w-1/2">
                    <span class="text-4xl font-serif text-green-600 tracking-widest mb-4 block">01 / CULTIVO</span>
                    <h3 class="text-6xl font-black leading-tight mb-6 tracking-tight">
                        A Origem: Terra e Respeito.
                    </h3>
                    <p class="text-lg text-gray-300 mb-8">
                        Nosso solo vulcânico, rico em minerais e protegido pela mata nativa, é o berço de nossos cafezais. Aplicamos técnicas de manejo orgânico e irrigação natural, garantindo que a planta cresça forte, refletindo a pureza de nossa fazenda.
                    </p>
                    <a href="#" class="inline-block text-lg font-bold text-green-400 hover:text-green-200 transition duration-300">
                        Ver Práticas Sustentáveis &rarr;
                    </a>
                </div>

                {{-- Visual de Destaque (Placeholder para vídeo ou imagem lateral) --}}
                <div class="md:w-1/2 h-80 rounded-xl bg-gray-800 shadow-2xl shadow-green-900/40 flex items-center justify-center">
                    <span class="text-gray-500">Imagem do Cafezal aqui</span>
                </div>
            </div>
        </div>

        {{-- BLOCO 2: A COLHEITA (Âmbar e Trabalho) --}}
        <div class="group py-32 border-b border-white/5 relative overflow-hidden transition duration-500 hover:bg-gray-900">
            <div class="absolute inset-0 bg-gradient-to-r from-amber-800/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

            <div class="max-w-7xl mx-auto flex flex-col-reverse md:flex-row items-center gap-12 px-6 relative z-10">

                {{-- Visual de Destaque (Placeholder para vídeo ou imagem lateral) --}}
                <div class="md:w-1/2 h-80 rounded-xl bg-gray-800 shadow-2xl shadow-amber-900/40 flex items-center justify-center">
                    <span class="text-gray-500">Imagem da Colheita Manual aqui</span>
                </div>

                {{-- Conteúdo Principal --}}
                <div class="md:w-1/2">
                    <span class="text-4xl font-serif text-amber-500 tracking-widest mb-4 block">02 / COLHEITA</span>
                    <h3 class="text-6xl font-black leading-tight mb-6 tracking-tight">
                        A Seleção: Só os Grãos Perfeitos.
                    </h3>
                    <p class="text-lg text-gray-300 mb-8">
                        Adotamos o método de colheita seletiva manual, escolhendo apenas os frutos que atingiram o pico de maturação. Este cuidado artesanal é o que garante a doçura e a complexidade que definem o perfil de sabor do Café Giggio Pizzol.
                    </p>
                    <a href="#" class="inline-block text-lg font-bold text-amber-400 hover:text-amber-200 transition duration-300">
                        Assista ao Vídeo da Colheita &rarr;
                    </a>
                </div>
            </div>
        </div>

        {{-- BLOCO 3: A TORRA (Fogo e Paixão) --}}
        <div class="group py-32 border-b border-white/5 relative overflow-hidden transition duration-500 hover:bg-gray-900">
            <div class="absolute inset-0 bg-gradient-to-r from-red-800/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-12 px-6 relative z-10">

                {{-- Conteúdo Principal --}}
                <div class="md:w-1/2">
                    <span class="text-4xl font-serif text-red-600 tracking-widest mb-4 block">03 / TORRA</span>
                    <h3 class="text-6xl font-black leading-tight mb-6 tracking-tight">
                        A Alquimia: Revelando o Sabor.
                    </h3>
                    <p class="text-lg text-gray-300 mb-8">
                        Nossa torra é feita em pequenos lotes por mestres torrefadores, ajustando o perfil de calor para cada tipo de grão. Este processo lento e controlado é a alquimia que destrava as notas de caramelo e chocolate do nosso café.
                    </p>
                    <a href="#" class="inline-block text-lg font-bold text-red-400 hover:text-red-200 transition duration-300">
                        Conheça Nossos Perfis de Torra &rarr;
                    </a>
                </div>

                {{-- Visual de Destaque (Placeholder para vídeo ou imagem lateral) --}}
                <div class="md:w-1/2 h-80 rounded-xl bg-gray-800 shadow-2xl shadow-red-900/40 flex items-center justify-center">
                    <span class="text-gray-500">Imagem da Torrefação aqui</span>
                </div>
            </div>
        </div>


        {{-- 4. SEÇÃO CTA FINAL (Compra) --}}
        <section class="py-24 bg-gray-900 text-center">
            <div class="max-w-3xl mx-auto px-6">
                <h2 class="text-5xl font-serif font-bold mb-4 text-white">
                    Pronto para a Experiência Giggio Pizzol?
                </h2>
                <p class="text-xl text-gray-400 mb-10">
                    Receba o café premium do sítio diretamente na sua casa. Escolha sua torra, moagem e comece a sua jornada de sabor.
                </p>
                <a href="#loja"
                   class="px-12 py-5 bg-amber-600 text-gray-900 font-black rounded-xl shadow-2xl shadow-amber-600/50
                          hover:bg-amber-500 transition duration-400 uppercase tracking-widest text-lg
                          transform hover:scale-105">
                    Comprar Nosso Café Agora &rarr;
                </a>
            </div>
        </section>

    </main>
</x-layout>
