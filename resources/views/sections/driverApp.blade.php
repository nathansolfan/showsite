@php
    $project = [
        'name' => 'Hire Your Driver',
        'description' => 'A comprehensive application for route management, bookings, payments, and driver performance analytics.',
        'githubUrl' => 'https://github.com/nathansolfan/DriverApp',
        'liveUrl' => 'https://driverapp.duckdns.org/',
        'detailsUrl' => url('/projects/driverApp'),
        'tech' => ['Laravel', 'Livewire', 'Tailwind CSS', 'Alpine.js'],
    ];
@endphp

<div class="h-screen w-full flex flex-col lg:flex-row justify-center items-center text-center lg:text-left bg-white p-12">

    <!-- Left Side: Project Text -->
    <div class="lg:w-1/2 max-w-2xl">
        <h2 class="text-5xl font-extrabold text-gray-900">{{ $project['name'] }}</h2>
        <p class="mt-4 text-lg text-gray-600">{{ $project['description'] }}</p>

        <!-- Tech Stack -->
        <div class="mt-6 flex flex-wrap justify-center lg:justify-start gap-3">
            @foreach ($project['tech'] as $tech)
                <span class="text-sm bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 rounded-full shadow-md font-medium">
                    {{ $tech }}
                </span>
            @endforeach
        </div>

        <!-- Buttons -->
        <div class="mt-8 flex flex-wrap justify-center lg:justify-start gap-4">
            <a href="{{ $project['githubUrl'] }}" target="_blank"
                class="inline-flex items-center gap-2 border-2 border-gray-900 text-gray-900 bg-transparent px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-gray-900 hover:text-white hover:shadow-lg">
                <i class="fab fa-github"></i> GitHub
            </a>
            <a href="{{ $project['liveUrl'] }}" target="_blank"
                class="inline-flex items-center gap-2 border-2 border-blue-600 text-gray-900 bg-transparent px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-blue-600 hover:text-white hover:shadow-lg">
                <i class="fas fa-external-link-alt"></i> Live Preview
            </a>
        </div>
    </div>

    <!-- Right Side: Project Image -->
    <div class="lg:w-1/2 flex justify-center mt-8 lg:mt-0">
        <img src="{{ asset('images/driverAI.jpg') }}" alt="Driver App Project"
            class="w-full max-w-lg rounded-lg shadow-xl transition-transform hover:scale-105">
    </div>

</div>
