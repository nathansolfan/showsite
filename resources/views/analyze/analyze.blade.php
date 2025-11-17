<x-layout>
    <div class="p-6 max-w-xl mx-auto">

        {{-- <text-analyzer></text-analyzer> --}}
        {{-- Comentado: antes usava Vue --}}

        <h1 class="text-2xl font-bold mb-4">Text Analyzer</h1>

        <form action="{{ url('/analyze') }}" method="POST">
            @csrf
            <textarea name="text" rows="5" class="w-full p-3 border rounded mb-3" placeholder="Type your text here...">{{ old('text') }}</textarea>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Analyze</button>
        </form>

        @isset($result)
            <div class="mt-6 p-4 border rounded bg-gray-50 text-gray-800">
                <p><strong>Words:</strong> {{ $result['word_count'] }}</p>
                <p><strong>Characters:</strong> {{ $result['chars'] }}</p>
                <p><strong>Feeling Score:</strong> {{ $result['feeling_score'] }}</p>
                <p><strong>Feeling:</strong> {{ ucfirst($result['feeling']) }}</p>
                <p><strong>Positive Words:</strong> {{ $result['positive_words'] }}</p>
                <p><strong>Negative Words:</strong> {{ $result['negative_words'] }}</p>
            </div>
        @endisset

    </div>
</x-layout>
