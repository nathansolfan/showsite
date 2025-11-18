<x-layout>

    <div class="min-h-screen bg-gray-950 text-white p-8 sm:p-16 flex flex-col items-center font-inter"> {{-- font-inter adicionado aqui --}}

        {{-- Header --}}
        <header class="text-center mb-16 max-w-4xl w-full border-b border-teal-800 pb-4"> {{-- Borda mais sutil --}}
            <h1 class="text-4xl font-bold text-white mb-1 tracking-tight"> {{-- Menos extrabold --}}
                TEXT ANALYSIS MODULE
            </h1>
            <p class="text-sm text-teal-400 font-ibm-plex-mono uppercase tracking-widest"> {{-- Font para mono --}}
                Ready for Input
            </p>
        </header>

        {{-- Input Form --}}
        <div class="w-full max-w-3xl mb-16">
            <form action="{{ url('/analyze') }}" method="POST"
                  class="bg-gray-900 border border-teal-800 rounded-lg shadow-lg shadow-teal-900/20 p-0 overflow-hidden"> {{-- Borda mais fina, sombra mais suave --}}
                @csrf

                <textarea name="text" rows="8"
                          class="w-full p-6 text-lg text-teal-400 bg-gray-900 placeholder-gray-600 focus:outline-none focus:ring-0 resize-none font-ibm-plex-mono" {{-- Tamanho de fonte e font-mono --}}
                          placeholder="Write something to analyze…">{{ old('text') }}</textarea>

                <div class="mt-0 p-4 flex justify-between items-center bg-gray-800 border-t border-teal-800"> {{-- Borda mais sutil --}}

                    <div class="flex flex-col"></div>

                    <button type="submit"
                            class="px-8 py-3 bg-teal-700 hover:bg-teal-600 text-white font-medium text-base transition-colors duration-300 uppercase tracking-widest rounded-md focus:outline-none focus:ring-4 focus:ring-teal-200/50 flex items-center shadow-md shadow-teal-700/30"> {{-- Menos extrabold, sombra mais suave, anel de foco mais suave --}}
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        Analyze Text
                    </button>
                </div>
            </form>
        </div>

        <section class="max-w-4xl w-full text-center mb-12 bg-gray-900 border border-teal-800 p-8 rounded-lg shadow-lg shadow-teal-900/20">

            <h2 class="text-2xl font-bold text-teal-400 mb-6 tracking-wider uppercase">
                About This Analyzer
            </h2>

            <p class="text-base text-gray-300 leading-relaxed mb-8">
                This analytical module evaluates text using academic-grade lexical and affective resources widely adopted in
                computational linguistics, natural language processing (NLP), and sentiment research.
                The polarity scale used here spans from <strong class="text-teal-300">-5</strong> (extreme negativity) to <strong class="text-teal-300">+5</strong>
                (extreme positivity), following internationally recognized scoring methodologies.
            </p>

            {{-- NOVO CONTAINER DE GRID PARA WIDE --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                {{-- AFINN --}}
                <div class="text-left bg-gray-800/40 p-5 rounded-md border border-gray-800"> {{-- Removido mb-6 --}}
                    <h3 class="text-lg font-semibold text-white mb-2 tracking-wide">
                        AFINN Sentiment Lexicon
                    </h3>

                    <p class="text-sm text-gray-300 leading-relaxed">
                        The AFINN lexicon was developed by <strong class="text-teal-300">Finn Årup Nielsen</strong>, a Danish researcher and professor
                        specializing in cognitive systems, data mining, and neuroinformatics.
                        AFINN assigns integer sentiment values ranging from –5 to +5 to English words, making it one of the most
                        widely used resources for polarity-based sentiment analysis.
                        Official documentation and history can be found on the author’s publication archive:
                        <a href="https://finnaarupnielsen.wordpress.com/2011/03/16/afinn-a-new-word-list-for-sentiment-analysis/"
                           class="text-teal-400 underline hover:text-teal-300 transition-colors" target="_blank">
                            finnaarupnielsen.wordpress.com
                        </a>.
                    </p>
                </div>

                {{-- NRC --}}
                <div class="text-left bg-gray-800/40 p-5 rounded-md border border-gray-800"> {{-- Removido mb-6 --}}
                    <h3 class="text-lg font-semibold text-white mb-2 tracking-wide">
                        NRC Emotion Lexicon (EmoLex)
                    </h3>

                    <p class="text-sm text-gray-300 leading-relaxed">
                        The NRC Emotion Lexicon was created by computational linguists <strong class="text-teal-300">Saif M. Mohammad</strong> and
                        <strong class="text-teal-300">Peter D. Turney</strong> at the <strong class="text-teal-300">National Research Council Canada (NRC)</strong>.
                        This resource associates words with sentiment polarity and with eight fundamental emotions
                        (joy, trust, fear, surprise, sadness, disgust, anger, anticipation).
                        It is officially maintained by the NRC and is frequently referenced in affective computing research:
                        <a href="https://nrc.canada.ca/en/research-development/products-services/technical-advisory-services/sentiment-emotion-lexicons"
                           class="text-teal-400 underline hover:text-teal-300 transition-colors" target="_blank">
                            nrc.canada.ca
                        </a>.
                    </p>
                </div>
            </div>
            {{-- FIM DO CONTAINER DE GRID --}}

            <p class="text-xs text-gray-500 mt-6 font-ibm-plex-mono uppercase tracking-wider">
                This interface integrates both resources to generate transparent, research-backed sentiment interpretation for
                educational, analytical, and experimental NLP purposes.
            </p>
        </section>
        {{-- Results --}}
        @isset($result)
            @php
                $feeling = strtolower($result['feeling']);
                $sentimentTextColor = match($feeling) {
                    'positive' => 'text-green-400', // Verde ligeiramente mais suave
                    'negative' => 'text-amber-300', // Âmbar ligeiramente mais suave
                    default => 'text-gray-400',
                };
            @endphp

            <div class="w-full max-w-4xl space-y-12 mt-16"> {{-- Margem superior para separar --}}

                <h2 class="text-2xl font-bold text-white uppercase tracking-wider border-b border-teal-700 pb-2 mb-6"> {{-- Borda mais fina --}}
                    Analysis Results
                </h2>

                {{-- Feeling & Score --}}
                <div class="border-y border-teal-800 p-4 sm:p-6 bg-gray-900 shadow-lg shadow-teal-900/20"> {{-- Bordas e sombra mais suaves --}}

                    <div class="flex justify-between items-start mb-4">
                        <p class="text-sm text-gray-400 uppercase tracking-widest font-ibm-plex-mono">Detected Feeling</p> {{-- Font para mono, cinza mais suave --}}
                        <p class="text-sm text-gray-400 uppercase tracking-widest font-ibm-plex-mono">Score</p> {{-- Font para mono, cinza mais suave --}}
                    </div>

                    <div class="flex justify-between items-end border-t border-teal-800 pt-2"> {{-- Borda mais sutil --}}
                        <p class="text-5xl font-bold capitalize {{ $sentimentTextColor }} tracking-tight"> {{-- Tamanho da fonte e peso ajustados --}}
                            {{ $result['feeling'] }}
                        </p>
                        <p class="text-5xl font-ibm-plex-mono font-bold text-teal-400"> {{-- Tamanho da fonte e font-mono --}}
                            {{ $result['feeling_score'] }}
                        </p>
                    </div>
                </div>

                {{-- Metric Cards --}}
                <div class="bg-gray-900 border border-teal-800 rounded-md overflow-hidden shadow-sm"> {{-- Borda mais sutil --}}
                    <div class="grid grid-cols-2 md:grid-cols-4">

                        <div class="p-4 border-b border-r border-gray-800 text-center">
                            <h3 class="text-xs font-ibm-plex-mono text-gray-400 uppercase">Words</h3> {{-- Font para mono, cinza mais suave --}}
                            <p class="text-3xl font-ibm-plex-mono font-bold text-white mt-1">{{ $result['word_count'] }}</p> {{-- Font para mono --}}
                        </div>

                        <div class="p-4 border-b border-r border-gray-800 text-center">
                            <h3 class="text-xs font-ibm-plex-mono text-gray-400 uppercase">Characters</h3> {{-- Font para mono, cinza mais suave --}}
                            <p class="text-3xl font-ibm-plex-mono font-bold text-white mt-1">{{ $result['chars'] }}</p> {{-- Font para mono --}}
                        </div>

                        <div class="p-4 border-b border-r border-gray-800 text-center">
                            <h3 class="text-xs font-ibm-plex-mono uppercase text-green-400">Positive</h3> {{-- Font para mono, verde mais suave --}}
                            <p class="text-3xl font-ibm-plex-mono font-bold text-green-400 mt-1">{{ count(explode(', ', $result['positive_words'])) }}</p> {{-- Font para mono --}}
                        </div>

                        <div class="p-4 border-b border-gray-800 text-center">
                            <h3 class="text-xs font-ibm-plex-mono uppercase text-amber-300">Negative</h3> {{-- Font para mono, âmbar mais suave --}}
                            <p class="text-3xl font-ibm-plex-mono font-bold text-amber-300 mt-1">{{ count(explode(', ', $result['negative_words'])) }}</p> {{-- Font para mono --}}
                        </div>
                    </div>
                </div>

                {{-- Word Breakdown --}}
                <div class="pt-8 border-t border-teal-700"> {{-- Borda mais sutil --}}
                    {{-- Title --}}
                    <h3 class="text-xl font-bold text-teal-400 mb-6 uppercase tracking-wider"> {{-- Menos extrabold --}}
                        LEXICAL RECORD BREAKDOWN
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                        {{-- Positive Words --}}
                        <div class="border border-teal-900 p-5 rounded-lg bg-gray-900 shadow-lg shadow-teal-900/20"> {{-- Sombra mais suave --}}
                            <p class="text-md font-semibold text-green-400 mb-4 tracking-wide border-b border-green-700/60 pb-2 flex items-center gap-2"> {{-- Semibold, verde mais suave, borda mais escura --}}
                                POSITIVE
                            </p>

                            <div class="space-y-1">
                                @if ($result['positive_words'])
                                    @foreach (explode(', ', $result['positive_words']) as $word)
                                        <p class="text-sm font-ibm-plex-mono text-white px-3 py-1.5 border-l-4 border-green-500 bg-gray-800/80 hover:bg-gray-700 transition duration-150 rounded-sm"> {{-- Font para mono --}}
                                            › {{ $word }}
                                        </p>
                                    @endforeach
                                @else
                                    <p class="text-gray-500 italic text-sm font-ibm-plex-mono"> {{-- Font para mono --}}
                                        [EMPTY] No positive lexical entries found.
                                    </p>
                                @endif
                            </div>
                        </div>

                        {{-- Negative Words --}}
                        <div class="border border-teal-900 p-5 rounded-lg bg-gray-900 shadow-lg shadow-teal-900/20"> {{-- Sombra mais suave --}}
                            <p class="text-md font-semibold text-amber-300 mb-4 tracking-wide border-b border-amber-600/60 pb-2 flex items-center gap-2"> {{-- Semibold, âmbar mais suave, borda mais escura --}}
                                NEGATIVE
                            </p>

                            <div class="space-y-1">
                                @if ($result['negative_words'])
                                    @foreach (explode(', ', $result['negative_words']) as $word)
                                        <p class="text-sm font-ibm-plex-mono text-white px-3 py-1.5 border-l-4 border-amber-500 bg-gray-800/80 hover:bg-gray-700 transition duration-150 rounded-sm"> {{-- Font para mono --}}
                                            › {{ $word }}
                                        </p>
                                    @endforeach
                                @else
                                    <p class="text-gray-500 italic text-sm font-ibm-plex-mono"> {{-- Font para mono --}}
                                        [EMPTY] No negative lexical entries found.
                                    </p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endisset
    </div>
</x-layout>
