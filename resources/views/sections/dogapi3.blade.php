@php
    // Sample data you might pass from a controller or define right here
    $project = [
        'name' => 'Dog API Generator',
        'subtitle' => 'We are all dog lovers now', // optional tagline
        'description' => 'A random dog image generator using an API to fetch adorable dog photos...',
        'tags' => ['Case Study', 'API', 'React.js', 'Laravel'],  // example tags
        'githubUrl' => 'https://github.com/...',
        'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
        'imageUrl' => asset('images/dogsAI.jpg'), // path to your image
    ];
@endphp

<div class="container mx-auto px-4 py-16 md:flex items-center">
    <!-- LEFT COLUMN: Text & CTA -->
    <div class="md:w-1/2 md:pr-8">
        <!-- Project Title -->
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            {{ $project['subtitle'] ?? $project['name'] }}
        </h2>

        <!-- Tag/Category Chips (Optional) -->
        <div class="flex flex-wrap gap-2 mb-6">
            @foreach($project['tags'] as $tag)
                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                    {{ $tag }}
                </span>
            @endforeach
        </div>

        <!-- Description -->
        <p class="text-gray-700 text-lg leading-relaxed mb-6">
            {{ $project['description'] }}
        </p>

        <!-- Call-to-Actions -->
        <div class="flex gap-4">
            <a href="{{ $project['liveUrl'] }}"
               class="inline-block bg-black text-white px-6 py-3 rounded hover:bg-gray-800 transition">
               View Live
            </a>
            <a href="{{ $project['githubUrl'] }}"
               class="inline-block border border-gray-800 text-gray-800 px-6 py-3 rounded hover:bg-gray-100 transition">
               GitHub
            </a>
        </div>
    </div>

    <!-- RIGHT COLUMN: Image/Mockup -->
    <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center">
        <img src="{{ $project['imageUrl'] }}" alt="Project Mockup" class="max-w-full h-auto rounded-lg shadow-md">
    </div>
</div>
