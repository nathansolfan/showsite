<x-layout>
    {{-- Container Registro de Log: Fundo Cinza Claro e Limpo --}}
    <div class="min-h-screen bg-gray-50 text-gray-900 p-8 sm:p-16 flex flex-col items-center">

        {{-- Header (Título e Linha de Status) --}}
        <header class="text-center mb-16 max-w-4xl pt-4 w-full border-b border-gray-300 pb-4">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-1 tracking-tight">
                MÓDULO DE CLASSIFICAÇÃO LEXICAL
            </h1>
            <p class="text-sm text-gray-600 font-mono uppercase tracking-widest">
                STATUS: AGUARDANDO COMANDO DE ENTRADA
            </p>
        </header>

        {{-- Input Form Panel (Caixa Simples) --}}
        <div class="w-full max-w-3xl mb-16">
            <form action="{{ url('/analyze') }}" method="POST"
                  class="bg-white border-2 border-gray-900 shadow-lg p-0">
                @csrf
                <textarea name="text" rows="8"
                          class="w-full p-6 text-xl text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0 border-b-2 border-gray-900 resize-none font-sans"
                          placeholder="[Registro de Entrada]: Insira o texto para processamento...">{{ old('text') }}</textarea>

                <div class="mt-0 p-4 flex justify-end bg-gray-100">
                    <button type="submit"
                            class="px-8 py-3 bg-gray-900 hover:bg-indigo-600 text-white font-semibold text-base transition-colors duration-300 uppercase tracking-widest focus:outline-none focus:ring-4 focus:ring-indigo-100">
                        INICIAR PROCESSAMENTO
                    </button>
                </div>
            </form>
        </div>

        {{-- Result Section --}}
        @isset($result)
            @php
                $feeling = strtolower($result['feeling']);
                $sentimentTextColor = match($feeling) {
                    'positive' => 'text-green-700',
                    'negative' => 'text-red-700',
                    default => 'text-gray-700',
                };
            @endphp

            <div class="w-full max-w-4xl space-y-12">

                <h2 class="text-2xl font-extrabold text-gray-900 uppercase tracking-wider border-b-4 border-indigo-600 pb-2 mb-6">REGISTRO DE SAÍDA DE DADOS</h2>

                {{-- Destaque Principal: (O Estilo Solicitado Aplicado) --}}
                <div class="border-t-2 border-b-2 border-gray-300 p-4 sm:p-6 bg-white shadow-md">

                    {{-- Estrutura de Rótulo Duplo (Solicitado) --}}
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex flex-col">
                            <p class="text-xs text-gray-600 uppercase tracking-widest mb-1">CÓDIGO DE STATUS</p>
                            <p class="text-sm text-gray-800 uppercase tracking-widest">SENTIMENTO GERAL</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-gray-800 uppercase tracking-widest">SCORE DE CONFIANÇA</p>
                        </div>
                    </div>

                    {{-- Valores --}}
                    <div class="flex justify-between items-end border-t border-gray-200 pt-2">
                        <p class="text-6xl font-extrabold capitalize {{ $sentimentTextColor }} tracking-tight">
                            {{ $result['feeling'] }}
                        </p>
                        <p class="text-6xl font-mono font-extrabold text-indigo-700">
                            {{ $result['feeling_score'] }}
                        </p>
                    </div>
                </div>

                {{-- Métrica Cards (Registro de Campo) --}}
                <div class="bg-white border-2 border-gray-200">
                    <div class="grid grid-cols-2 md:grid-cols-4">

                        {{-- Token Count --}}
                        <div class="p-4 border-b border-r border-gray-200 text-center">
                            <h3 class="text-xs font-mono text-gray-500 uppercase">Tokens</h3>
                            <p class="text-3xl font-mono font-extrabold text-gray-900 mt-1">{{ $result['word_count'] }}</p>
                        </div>

                        {{-- Char Count --}}
                        <div class="p-4 border-b border-r border-gray-200 text-center">
                            <h3 class="text-xs font-mono text-gray-500 uppercase">Chars</h3>
                            <p class="text-3xl font-mono font-extrabold text-gray-900 mt-1">{{ $result['chars'] }}</p>
                        </div>

                        {{-- Positive Word Count --}}
                        <div class="p-4 border-b border-r border-gray-200 text-center">
                            <h3 class="text-xs font-mono uppercase text-green-700">Positivos</h3>
                            <p class="text-3xl font-mono font-extrabold text-green-700 mt-1">{{ count(explode(', ', $result['positive_words'])) }}</p>
                        </div>

                        {{-- Negative Word Count --}}
                        <div class="p-4 border-b border-gray-200 text-center">
                            <h3 class="text-xs font-mono uppercase text-red-700">Negativos</h3>
                            <p class="text-3xl font-mono font-extrabold text-red-700 mt-1">{{ count(explode(', ', $result['negative_words'])) }}</p>
                        </div>
                    </div>
                </div>

                {{-- Análise Detalhada de Palavras (Visualização de Lista de Erros/Registro) --}}
                <div class="pt-8 border-t-2 border-gray-300">
                    <h3 class="text-xl font-extrabold text-gray-900 mb-6 uppercase tracking-widest">DETALHE DO REGISTRO DE CLASSIFICAÇÃO</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        {{-- Positive Keywords Panel --}}
                        <div class="bg-white border border-gray-200 p-4">
                            <p class="text-md font-bold text-green-700 mb-3 tracking-wide border-b border-green-200 pb-1">REGISTRO POSITIVO:</p>
                            <div class="space-y-1">
                                @if ($result['positive_words'])
                                    @foreach (explode(', ', $result['positive_words']) as $word)
                                        <p class="text-sm font-mono text-gray-800 px-2 py-0.5 border-l-4 border-green-400 bg-green-50/50">{{ $word }}</p>
                                    @endforeach
                                @else
                                    <p class="text-gray-500 italic text-sm">Nenhum registro positivo.</p>
                                @endif
                            </div>
                        </div>

                        {{-- Negative Keywords Panel --}}
                        <div class="bg-white border border-gray-200 p-4">
                            <p class="text-md font-bold text-red-700 mb-3 tracking-wide border-b border-red-200 pb-1">REGISTRO NEGATIVO:</p>
                            <div class="space-y-1">
                                @if ($result['negative_words'])
                                    @foreach (explode(', ', $result['negative_words']) as $word)
                                        <p class="text-sm font-mono text-gray-800 px-2 py-0.5 border-l-4 border-red-400 bg-red-50/50">{{ $word }}</p>
                                    @endforeach
                                @else
                                    <p class="text-gray-500 italic text-sm">Nenhum registro negativo.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endisset

    </div>
</x-layout>
