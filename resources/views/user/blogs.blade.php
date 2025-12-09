<x-layout>
    <div class="max-w-7xl mx-auto px-6 py-8">
        <h1 class="text-2xl font-semibold mb-6">{{ $user->name }}'s Projects</h1>

        @if($blogs->isEmpty())
            <p class="text-gray-600">This user has no projects yet.</p>
        @else
            <div class="grid gap-4">
                @foreach($blogs as $blog)
                    <a href="{{ route('blog.show', $blog->id) }}" class="p-4 bg-white rounded-lg shadow hover:bg-gray-50 transition">
                        <h2 class="text-lg font-semibold">{{ $blog->title }}</h2>
                        <p class="text-sm text-gray-500">{{ $blog->content }}</p>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
