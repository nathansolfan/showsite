@php
    $blogs = [
        [
            'title' => 'How to Build a Dog API in Laravel',
            'excerpt' => 'Learn how to use APIs in Laravel by building a simple Dog Image API.',
            'url' => '/blog/dog-api-laravel',
        ],
        [
            'title' => 'Tailwind CSS Tricks for Developers',
            'excerpt' => 'Check out these Tailwind CSS tips to make your web designs more efficient.',
            'url' => '/blog/tailwind-css-tricks',
        ],
    ];
@endphp

{{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-8"> --}}
<div class="flex justify-center text-center">
    @foreach ($blogs as $blog)
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl font-bold text-gray-800">{{ $blog['title'] }}</h3>
            <p class="text-gray-600">{{ $blog['excerpt'] }}</p>
            <a href="{{ $blog['url'] }}" class="inline-block mt-4 bg-blue-600 text-white py-2 px-4 rounded-lg">Read More</a>
        </div>
    @endforeach
</div>
