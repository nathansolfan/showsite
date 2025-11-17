<x-layout>
    <div class="min-h-screen bg-gray-950 text-white p-8 sm:p-16 flex flex-col items-center">

        {{-- Header --}}
        <header class="text-center mb-16 max-w-4xl pt-4 w-full border-b border-teal-700 pb-4">
            <h1 class="text-4xl font-extrabold text-white mb-1 tracking-tight">
                TEXT ANALYSIS MODULE
            </h1>
            <p class="text-sm text-teal-400 font-mono uppercase tracking-widest">
                Ready for Input
            </p>
        </header>

        {{-- Input Form --}}
        <div class="w-full max-w-3xl mb-16">
            <form action="{{ url('/analyze') }}" method="POST"
                  class="bg-gray-900 border-2 border-teal-700 rounded-lg shadow-xl shadow-teal-900/50 p-0 overflow-hidden">
                @csrf

                <textarea name="text" rows="8"
                          class="w-full p-6 text-xl text-teal-400 bg-gray-900 placeholder-gray-600 focus:outline-none focus:ring-0 resize-none font-mono"
                          placeholder="Write something to analyze…">{{ old('text') }}</textarea>

                <div class="mt-0 p-4 flex justify-between items-center bg-gray-800 border-t border-teal-700">

                    <div class="flex flex-col"></div>

                    <button type="submit"
                            class="px-8 py-3 bg-teal-700 hover:bg-teal-600 text-white font-semibold text-base transition-colors duration-300 uppercase tracking-widest rounded-md focus:outline-none focus:ring-4 focus:ring-teal-200 flex items-center shadow-md shadow-teal-700/50">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        Analyze Text
                    </button>
                </div>
            </form>
        </div>

        {{-- Results --}}
        @isset($result)
            @php
                $feeling = strtolower($result['feeling']);
                $sentimentTextColor = match($feeling) {
                    'positive' => 'text-green-500',
                    'negative' => 'text-amber-400',
                    default => 'text-gray-400',
                };
            @endphp

            <div class="w-full max-w-4xl space-y-12">

                <h2 class="text-2xl font-extrabold text-white uppercase tracking-wider border-b-2 border-teal-700 pb-2 mb-6">
                    Analysis Results
                </h2>

                {{-- Feeling & Score --}}
                <div class="border-t-2 border-b-2 border-teal-700 p-4 sm:p-6 bg-gray-900 shadow-xl">

                    <div class="flex justify-between items-start mb-4">
                        <p class="text-sm text-white uppercase tracking-widest font-mono">Detected Feeling</p>
                        <p class="text-sm text-white uppercase tracking-widest font-mono">Score</p>
                    </div>

                    <div class="flex justify-between items-end border-t border-teal-700 pt-2">
                        <p class="text-6xl font-extrabold capitalize {{ $sentimentTextColor }} tracking-tight">
                            {{ $result['feeling'] }}
                        </p>
                        <p class="text-6xl font-mono font-extrabold text-teal-400">
                            {{ $result['feeling_score'] }}
                        </p>
                    </div>
                </div>

                {{-- Metric Cards --}}
                <div class="bg-gray-900 border border-teal-700 rounded-md overflow-hidden shadow-sm">
                    <div class="grid grid-cols-2 md:grid-cols-4">

                        <div class="p-4 border-b border-r border-gray-800 text-center">
                            <h3 class="text-xs font-mono text-gray-400 uppercase">Words</h3>
                            <p class="text-3xl font-mono font-extrabold text-white mt-1">{{ $result['word_count'] }}</p>
                        </div>

                        <div class="p-4 border-b border-r border-gray-800 text-center">
                            <h3 class="text-xs font-mono text-gray-400 uppercase">Characters</h3>
                            <p class="text-3xl font-mono font-extrabold text-white mt-1">{{ $result['chars'] }}</p>
                        </div>

                        <div class="p-4 border-b border-r border-gray-800 text-center">
                            <h3 class="text-xs font-mono uppercase text-green-500">Positive</h3>
                            <p class="text-3xl font-mono font-extrabold text-green-500 mt-1">{{ count(explode(', ', $result['positive_words'])) }}</p>
                        </div>

                        <div class="p-4 border-b border-gray-800 text-center">
                            <h3 class="text-xs font-mono uppercase text-amber-400">Negative</h3>
                            <p class="text-3xl font-mono font-extrabold text-amber-400 mt-1">{{ count(explode(', ', $result['negative_words'])) }}</p>
                        </div>
                    </div>
                </div>

                {{-- Word Breakdown --}}
                {{-- Word Breakdown --}}
                <div class="pt-8 border-t-2 border-teal-700">
                    {{-- Title --}}
                    <h3 class="text-xl font-extrabold text-teal-400 mb-6 uppercase tracking-widest">
                        LEXICAL RECORD BREAKDOWN
                    </h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                        {{-- Positive Words --}}
                        <div class="border border-teal-900 p-5 rounded-lg bg-gray-900 shadow-lg shadow-teal-900/40">
                            <p class="text-md font-bold text-green-500 mb-4 tracking-wide border-b border-green-600/60 pb-2 flex items-center gap-2">
                                POSITIVE LOG STREAM
                            </p>

                            <div class="space-y-1">
                                @if ($result['positive_words'])
                                    @foreach (explode(', ', $result['positive_words']) as $word)
                                        <p class="text-sm font-mono text-white px-3 py-1.5 border-l-4 border-green-500 bg-gray-800/80 hover:bg-gray-700 transition duration-150 rounded-sm">
                                            › {{ $word }}
                                        </p>
                                    @endforeach
                                @else
                                    <p class="text-gray-500 italic text-sm font-mono">
                                        [EMPTY] No positive lexical entries found.
                                    </p>
                                @endif
                            </div>
                        </div>

                        {{-- Negative Words --}}
                        <div class="border border-teal-900 p-5 rounded-lg bg-gray-900 shadow-lg shadow-teal-900/40">
                            <p class="text-md font-bold text-amber-400 mb-4 tracking-wide border-b border-amber-600/60 pb-2 flex items-center gap-2">
                                NEGATIVE LOG STREAM
                            </p>

                            <div class="space-y-1">
                                @if ($result['negative_words'])
                                    @foreach (explode(', ', $result['negative_words']) as $word)
                                        <p class="text-sm font-mono text-white px-3 py-1.5 border-l-4 border-amber-500 bg-gray-800/80 hover:bg-gray-700 transition duration-150 rounded-sm">
                                            › {{ $word }}
                                        </p>
                                    @endforeach
                                @else
                                    <p class="text-gray-500 italic text-sm font-mono">
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
