@php
    $project = [
        'name' => 'Hire Your Driver',
        'description' =>
            'A comprehensive application for route management, bookings, payments, and driver performance analytics.',
        'githubUrl' => 'https://github.com/nathansolfan/DriverApp',
        'liveUrl' => 'https://driverapp.duckdns.org/',
        'detailsUrl' => url('/projects/driverApp'), // NEW: Link to a detailed project page
        'tech' => ['Laravel', 'Livewire', 'Tailwind CSS', 'Alpine.js'], // NEW: Tech stack
    ];
@endphp

<div class="project-item relative flex flex-col text-center bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-transform transform hover:-translate-y-1 duration-300 ease-in-out border border-gray-200 mb-8 min-h-[500px] overflow-hidden">

    <!-- Project Image -->
    <div class="w-full h-48 overflow-hidden rounded-t-xl">
        <img src="{{ asset('images/driverAI.jpg') }}" alt="Driver App Project"
            class="w-full h-full object-cover transition-transform duration-300 transform hover:scale-110">
    </div>

    <!-- Project Title and Description -->
    <h3 class="text-3xl font-semibold text-gray-900 mt-4 hover:text-blue-500">{{ $project['name'] }}</h3>
    <p class="text-base text-gray-500 mt-4 leading-relaxed">{{ $project['description'] }}</p>

    <!-- Tech Stack Display -->
    <div class="flex flex-wrap justify-center mt-4 space-x-2">
        @foreach ($project['tech'] as $tech)
            <span class="text-sm bg-gray-200 text-gray-700 px-3 py-1 rounded-full">{{ $tech }}</span>
        @endforeach
    </div>

    <!-- Buttons Container -->
    <div class="mt-6 flex flex-wrap justify-center gap-4">
        <!-- GitHub Button -->
        <a href="{{ $project['githubUrl'] }}" target="_blank"
            class="inline-flex items-center gap-2 border-2 border-gray-900 text-gray-900 bg-transparent px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-gray-900 hover:text-white hover:shadow-lg active:translate-y-[1px]">
            <i class="fab fa-github"></i> GitHub
        </a>

        <!-- Live Preview Button -->
        <a href="{{ $project['liveUrl'] }}" target="_blank"
            class="inline-flex items-center gap-2 border-2 border-gray-900 text-gray-900 bg-transparent px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-gray-900 hover:text-white hover:shadow-lg active:translate-y-[1px]">
            <i class="fas fa-external-link-alt"></i> Live Preview
        </a>

        <!-- Learn More Button -->
        <a href="{{ $project['detailsUrl'] }}" class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-blue-700 hover:shadow-lg active:translate-y-[1px]">
            <i class="fas fa-info-circle"></i> Learn More
        </a>
    </div>
</div>
