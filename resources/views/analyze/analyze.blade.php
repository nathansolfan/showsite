<x-layout>

    <div class="min-h-screen bg-black text-white p-8 sm:p-16 flex flex-col items-center font-inter">

        {{-- Header --}}
        <header class="text-center mb-16 max-w-4xl w-full border-b border-gray-800 pb-4"> {{-- Borda cinza escura --}}
            <h1 class="text-4xl font-bold text-white mb-1 tracking-tight">
                TEXT ANALYSIS MODULE
            </h1>
            <p class="text-sm text-teal-400 font-ibm-plex-mono uppercase tracking-widest">
                Ready for Input
            </p>
        </header>

        {{-- Input Form --}}
        <div class="w-full max-w-3xl mb-16">
            <form action="{{ url('/analyze') }}" method="POST"
                  class="bg-gray-900 rounded-lg shadow-xl p-0 overflow-hidden">
                @csrf

                <textarea name="text" rows="8"
                          class="w-full p-6 text-xl text-teal-400 bg-gray-900 placeholder-gray-700 focus:outline-none focus:ring-0 resize-none font-ibm-plex-mono"
                          placeholder="Write something to analyze…">{{ old('text') }}</textarea>

                <div class="mt-0 p-4 flex justify-between items-center bg-gray-900 border-t border-gray-800"> {{-- Divisor sutil --}}

                    <div class="flex flex-col"></div>

                    <div>
                        <button type="submit"
                                class="px-8 py-3 bg-teal-600 hover:bg-teal-500 text-white font-semibold text-base transition-colors duration-300 uppercase tracking-widest rounded focus:outline-none focus:ring-4 focus:ring-teal-200/50 flex items-center shadow-md shadow-teal-700/30">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            {{ session('error') ? session('error') : 'Analyze Text' }}
                        </button>

                    </div>

                </div>
            </form>
        </div>

{{--        <div class="space-y-4">--}}
{{--            @if(session('error'))--}}
{{--                <x-alert type="error" >--}}
{{--                    {{ session('error') }}--}}

{{--                </x-alert>--}}
{{--            @endif--}}
{{--        </div>--}}


        <section class="max-w-4xl w-full text-center mb-8 p-0 ">

            <h2 class="text-3xl font-bold text-white mb-2 tracking-wider uppercase border-b border-gray-800 pb-3"> {{-- Fonte maior --}}
                Lexical Analyzer Resources
            </h2>

            <p class="text-base text-gray-400 leading-relaxed mb-10">
                This module evaluates text using academic-grade lexical and affective resources adopted in computational linguistics.
                <span class="font-medium text-white">Polarity Scale:</span>
                <strong class="text-amber-400 font-semibold">-5</strong> (Negative) to
                <strong class="text-green-400 font-semibold">+5</strong> (Positive).
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8"> {{-- Aumento do gap --}}

                {{-- AFINN SENTIMENT LEXICON CARD --}}
                <div class="text-left p-6 bg-gray-900 rounded-lg shadow-xl shadow-gray-950/50">

                    <h3 class="text-xl font-bold text-white mb-4 tracking-wide flex items-center gap-3 border-b border-gray-700/50 pb-3">
                        <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <span class="text-teal-400">AFINN</span> LEXICON
                    </h3>

                    <div class="space-y-4 mb-5">
                        <p class="text-sm text-gray-400 leading-snug">
                            <span class="font-semibold text-gray-300">AUTHOR:</span> <span class="font-medium">Finn Årup Nielsen</span>
                        </p>
                        <p class="text-sm text-gray-400 leading-snug">
                            <span class="font-semibold text-gray-300">SCORE TYPE:</span> Integer Polarity ($\pm$5)
                        </p>
                        <p class="text-sm text-gray-400 leading-snug">
                            <span class="font-semibold text-gray-300">SCOPE:</span> Highly reliable for general English sentiment analysis.
                        </p>
                    </div>

                    <p class="text-xs text-gray-500 italic pt-4 border-t border-gray-800">
                        Documentation:
                        <a href="https://finnaarupnielsen.wordpress.com/2011/03/16/afinn-a-new-word-list-for-sentiment-analysis/"
                           class="text-teal-400 hover:text-teal-300 transition-colors" target="_blank"> {{-- Removida a linha underline para um look mais clean --}}
                            finnaarupnielsen.wordpress.com
                        </a>
                    </p>
                </div>

                <div class="text-left p-6 bg-gray-900 rounded-lg shadow-xl shadow-gray-950/50">

                    <h3 class="text-xl font-bold text-white mb-4 tracking-wide flex items-center gap-3 border-b border-gray-700/50 pb-3">
                        <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-teal-400">NRC</span> EMOTION LEXICON
                    </h3>

                    <div class="space-y-4 mb-5">
                        <p class="text-sm text-gray-400 leading-snug">
                            <span class="font-semibold text-gray-300">CREATED BY:</span> NRC Canada (Mohammad & Turney)
                        </p>
                        <p class="text-sm text-gray-400 leading-snug">
                            <span class="font-semibold text-gray-300">FOCUS:</span> Polarity (Pos/Neg) and <strong class="text-white">8 Basic Emotions</strong>
                        </p>
                        <p class="text-sm text-gray-400 leading-snug">
                            <span class="font-semibold text-gray-300">EMOTIONS:</span> Joy, Trust, Fear, Surprise, Sadness, Disgust, Anger, Anticipation.
                        </p>
                    </div>

                    <p class="text-xs text-gray-500 italic pt-4 border-t border-gray-800">
                        Official source:
                        <a href="https://nrc.canada.ca/en/research-development/products-services/technical-advisory-services/sentiment-emotion-lexicons"
                           class="text-teal-400 hover:text-teal-300 transition-colors" target="_blank">
                            nrc.canada.ca
                        </a>
                    </p>
                </div>
            </div>

            <p class="text-xs text-gray-600 mt-10 font-ibm-plex-mono uppercase tracking-wider"> {{-- Cor cinza mais escura --}}
                This interface integrates both resources for transparent, research-backed sentiment interpretation.
            </p>
        </section>

        @isset($result)
            @php
                $feeling = strtolower($result['feeling']);
                $sentimentTextColor = match($feeling) {
                    'positive' => 'text-green-400',
                    'negative' => 'text-amber-300',
                    default => 'text-gray-400',
                };
            @endphp

            <div class="w-full max-w-4xl space-y-12 mt-16">

                <h2 class="text-2xl font-bold text-white uppercase tracking-wider border-b border-teal-600 pb-2 mb-6"> {{-- Borda de destaque para resultados --}}
                    Analysis Results
                </h2>

                <div class="p-4 sm:p-6 bg-gray-900 border border-teal-900 rounded-lg"> {{-- Fundo escuro para destaque --}}

                    <div class="flex justify-between items-start mb-4">
                        <p class="text-sm text-gray-500 uppercase tracking-widest font-ibm-plex-mono">Detected Feeling</p>
                        <p class="text-sm text-gray-500 uppercase tracking-widest font-ibm-plex-mono">Score</p>
                    </div>

                    <div class="flex justify-between items-end border-t border-gray-800 pt-2">
                        <p class="text-5xl font-bold capitalize {{ $sentimentTextColor }} tracking-tight">
                            {{ $result['feeling'] }}
                        </p>
                        <p class="text-5xl font-ibm-plex-mono font-bold text-teal-400">
                            {{ $result['feeling_score'] }}
                        </p>
                    </div>
                </div>

                <div class="bg-gray-900 border border-gray-800 rounded-md overflow-hidden">
                    <div class="grid grid-cols-2 md:grid-cols-4">

                        <div class="p-4 border-r border-gray-800 text-center">
                            <h3 class="text-xs font-ibm-plex-mono text-gray-400 uppercase">Words</h3>
                            <p class="text-3xl font-ibm-plex-mono font-bold text-white mt-1">{{ $result['word_count'] }}</p>
                        </div>

                        <div class="p-4 border-r border-gray-800 text-center">
                            <h3 class="text-xs font-ibm-plex-mono text-gray-400 uppercase">Characters</h3>
                            <p class="text-3xl font-ibm-plex-mono font-bold text-white mt-1">{{ $result['chars'] }}</p>
                        </div>

                        <div class="p-4 border-r border-gray-800 text-center">
                            <h3 class="text-xs font-ibm-plex-mono uppercase text-green-400">Positive</h3>
                            <p class="text-3xl font-ibm-plex-mono font-bold text-green-400 mt-1">{{ count(explode(', ', $result['positive_words'])) }}</p>
                        </div>

                        <div class="p-4 text-center"> {{-- Removida a última borda direita --}}
                            <h3 class="text-xs font-ibm-plex-mono uppercase text-amber-300">Negative</h3>
                            <p class="text-3xl font-ibm-plex-mono font-bold text-amber-300 mt-1"
                            >{{ $result['negative_words'] ? count(explode(', ', $result['negative_words'])) : 0 }}</p>
                        </div>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-800"> {{-- Linha divisória sutil --}}
                    {{-- Title --}}
                    <h3 class="text-xl font-bold text-teal-400 mb-6 uppercase tracking-wider">
                        LEXICAL RECORD BREAKDOWN
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                        <div class="border border-gray-800 p-5 rounded-lg bg-gray-900"> {{-- Borda cinza escura --}}
                            <p class="text-md font-semibold text-green-400 mb-4 tracking-wide border-b border-gray-700/60 pb-2 flex items-center gap-2">
                                POSITIVE
                            </p>

                            <div class="space-y-1">
                                @if ($result['positive_words'])
                                    @foreach (explode(', ', $result['positive_words']) as $word)
                                        {{-- Destaque suave na cor de fundo --}}
                                        <p class="text-sm font-ibm-plex-mono text-white px-3 py-1.5 border-l-4 border-green-500 bg-gray-800 hover:bg-gray-700 transition duration-150 rounded-sm">
                                            › {{ $word }}
                                        </p>
                                    @endforeach
                                @else
                                    <p class="text-gray-500 italic text-sm font-ibm-plex-mono">
                                        [EMPTY] No positive lexical entries found.
                                    </p>
                                @endif
                            </div>
                        </div>

                        <div class="border border-gray-800 p-5 rounded-lg bg-gray-900"> {{-- Borda cinza escura --}}
                            <p class="text-md font-semibold text-amber-300 mb-4 tracking-wide border-b border-gray-700/60 pb-2 flex items-center gap-2">
                                NEGATIVE
                            </p>

                            <div class="space-y-1">
                                @if ($result['negative_words'])
                                    @foreach (explode(', ', $result['negative_words']) as $word)
                                        <p class="text-sm font-ibm-plex-mono text-white px-3 py-1.5 border-l-4 border-amber-500 bg-gray-800 hover:bg-gray-700 transition duration-150 rounded-sm">
                                            › {{ $word }}
                                        </p>
                                    @endforeach
                                @else
                                    <p class="text-gray-500 italic text-sm font-ibm-plex-mono">
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
