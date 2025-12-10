<x-layout>
    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Header -->
        <h1 class="text-2xl font-semibold mb-6">{{ $user->name }}'s Projects</h1>

        @if($blogs->isEmpty())
            <p class="text-gray-600">This user has no projects yet.</p>
        @else
            <div class="grid gap-4">
                @foreach($blogs as $blog)
                    <div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition">
                        <!-- Blog title -->
                        <h2 class="text-xl font-semibold mb-2">{{ $blog->title }}</h2>

                        <!-- Blog details -->
                        <div class="text-gray-700 text-sm space-y-1 mb-3">
                            <p><strong>Name:</strong> {{ $blog->name }}</p>
                            <p><strong>Email:</strong> {{ $blog->email }}</p>
                            @if($blog->phone)
                                <p><strong>Phone:</strong> {{ $blog->phone }}</p>
                            @endif
                            @if($blog->budget)
                                <p><strong>Budget:</strong> {{ $blog->budget }}</p>
                            @endif
                            @if($blog->technologies)
                                <p><strong>Technologies:</strong> {{ $blog->technologies }}</p>
                            @endif
                        </div>

                        <!-- Blog content -->
                        <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 150) }}</p>

                        <!-- Actions / Links -->
                        <div class="flex gap-3">
                            <a href="/blog/{{$blog->id}}" class="text-blue-600 hover:underline font-medium">
                                View Project
                            </a>
                            <a href="{{ route('blog.edit', $blog->id) }}" class="text-green-600 hover:underline font-medium">
                                Edit
                            </a>
                            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline font-medium">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layout>
