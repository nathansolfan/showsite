@php
    $project = [
    'name' => '2 Men & a Van',
    'description' => 'Professional, affordable and stress-free transport services.',
    'tagline' => 'Reliable removals & transport',
    'githubUrl' => null,
    'liveUrl' => url('/loadup'),
    'detailsUrl' => url('/loadup'),
    'features' => [
    'Home & small removals',
    'Recycling centre runs',
    'Furniture assembly & deliveries',
    'Online booking system',
    ],
    'tech' => [
    [
    'icon' => 'fab fa-laravel',
    'title' => 'Laravel',
    'desc' => 'Backend & booking system',
    ],
    [
    'icon' => 'fas fa-wind',
    'title' => 'Tailwind CSS',
    'desc' => 'Modern responsive UI',
    ],
    [
    'icon' => 'fas fa-database',
    'title' => 'MySQL',
    'desc' => 'Persistent bookings & users',
    ],
    ],
    ];
@endphp

<div class="w-full py-8 px-4 overflow-hidden project-card">
    <div class="max-w-4xl mx-auto">
        <div class="relative overflow-hidden bg-orange-300 rounded-2xl shadow-md">


            <!-- Decorative blobs -->
            <div class="absolute -top-16 -left-16 w-48 h-48 bg-orange-200 rounded-full opacity-50"></div>
            <div class="absolute -bottom-16 -right-16 w-48 h-48 bg-orange-400 rounded-full opacity-40"></div>

            <!-- Header -->
            <div class="relative z-10 p-5 border-b border-orange-400">
                <div class="flex flex-col space-y-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-900">{{ $project['name'] }}</h2>
                        <p class="text-gray-800 text-sm">{{ $project['tagline'] }}</p>
                    </div>

                    <div class="flex flex-wrap gap-2">
                        <a href="{{ $project['liveUrl'] }}" class="inline-block">
                            <div class="flex items-center gap-2 px-4 py-2 bg-orange-600 text-white rounded-lg">
                                <i class="fas fa-external-link-alt"></i>
                                <span class="text-sm">Live Site</span>
                            </div>
                        </a>
                        <a href="{{ $project['detailsUrl'] }}" class="inline-block">
                            <div class="flex items-center gap-2 px-4 py-2 bg-white text-gray-800 rounded-lg">
                                <span class="text-sm font-medium">Details</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="relative z-10 p-5">
                <div class="mb-6 bg-orange-200 rounded-xl p-4">
                    <h3 class="text-lg font-bold text-gray-900 mb-2">
                        🚚 Reliable transport made simple
                    </h3>
                    <p class="text-gray-700">{{ $project['description'] }}</p>

                    <div class="mt-4">
                        <h4 class="text-sm font-bold text-gray-900 mb-3">Key Features</h4>
                        <ul class="space-y-2">
                            @foreach($project['features'] as $feature)
                                <li class="flex items-start text-gray-700 text-sm">
                                    <span class="mr-2 text-orange-600">✓</span>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bg-orange-200 rounded-xl p-4">
                    <h4 class="text-sm font-bold text-gray-900 mb-3">Tech Stack</h4>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                        @foreach($project['tech'] as $tech)
                            <div class="bg-orange-100 rounded-lg p-3">
                                <div class="flex items-center gap-3">
                                    <div class="bg-white p-2 rounded-lg">
                                        <i class="{{ $tech['icon'] }} text-orange-600"></i>
                                    </div>
                                    <div>
                                        <h5 class="font-bold text-sm text-gray-900">{{ $tech['title'] }}</h5>
                                        <p class="text-xs text-gray-600">{{ $tech['desc'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div
                class="relative z-10 p-4 border-t border-orange-400 bg-orange-300 flex justify-between text-xs text-gray-800">
                <span>Last updated: 2025</span>
            </div>

        </div>

    </div>
</div>
