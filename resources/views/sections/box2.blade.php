@php
    $project = [
        'name' => 'Dogerator',
        'subtitle' => 'We are all dog lovers now',
        'description' => 'The Ultimate Dog Image Generator! Choose your favorite dog breed or discover new ones.',
        'tagline' => 'For dog lovers everywhere',
        'githubUrl' => 'https://github.com/nathansolfan/DogGenerator',
        'liveUrl' => 'https://dogerator.duckdns.org/',
        'detailsUrl' => url('/projects/dogGenerator'),
        'features' => [
            'Search by breed or sub-breed',
            'Save favorite dog images',
            'Random dog generator',
        ],
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'Backend API integration and caching',
            ],
            [
                'icon' => 'fab fa-react',
                'title' => 'React.js',
                'desc' => 'Dynamic UI and image gallery',
            ],
            [
                'icon' => 'fab fa-js',
                'title' => 'JavaScript',
                'desc' => 'Interactive animations and transitions',
            ],
        ],
    ];
@endphp

<div class="w-full py-10 px-4">
  <div class="max-w-3xl mx-auto">
    <!-- Card with refined design -->
    <div class="bg-white rounded-2xl shadow-lg border-l-4 border-amber-500 overflow-hidden relative">
      <!-- Subtle accent decorations -->
      <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-bl-full opacity-50"></div>
      <div class="absolute bottom-0 left-0 w-16 h-16 bg-amber-50 rounded-tr-full opacity-40"></div>

      <!-- Header Section -->
      <div class="p-6 relative">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
          <!-- Project Title & Logo -->
          <div class="flex items-center">
            <div class="mr-4 text-amber-500 bg-amber-50 p-3 rounded-xl">
              @include('svgs.doglogo')
            </div>
            <div>
              <h2 class="text-xl font-bold text-gray-900 mb-1">{{ $project['name'] }}</h2>
              <p class="text-sm text-gray-600">{{ $project['tagline'] }}</p>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="flex flex-wrap gap-2">
            <a href="{{ $project['githubUrl'] }}" target="_blank"
               class="flex items-center gap-2 px-3 py-1.5 bg-gray-100 text-gray-700 rounded-full text-sm hover:bg-gray-200 transition-colors">
              <i class="fab fa-github"></i>
              <span>Source</span>
            </a>
            <a href="{{ $project['liveUrl'] }}" target="_blank"
               class="flex items-center gap-2 px-3 py-1.5 bg-amber-500 text-white rounded-full text-sm hover:bg-amber-600 transition-colors">
              <i class="fas fa-external-link-alt"></i>
              <span>Live Demo</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Horizontal divider with accent -->
      <div class="h-px bg-gradient-to-r from-transparent via-amber-200 to-transparent"></div>

      <!-- Main Content Section -->
      <div class="p-6 relative">
        <!-- Description with subtle background -->
        <div class="mb-6 bg-gray-50 p-4 rounded-xl border-l-2 border-amber-200">
          <p class="text-gray-700">
            {{ $project['description'] }} This app generates random adorable dog images using the Dog API.
          </p>
        </div>

        <!-- Two-column layout for larger screens -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Features Section -->
          <div>
            <h3 class="text-sm font-semibold text-gray-900 mb-3 flex items-center">
              <span class="inline-block w-8 h-px bg-amber-300 mr-2"></span>
              Key Features
            </h3>
            <ul class="space-y-2 pl-1">
              @foreach($project['features'] as $feature)
                <li class="flex items-start">
                  <span class="inline-flex items-center justify-center bg-amber-100 text-amber-600 w-5 h-5 rounded-full text-xs mr-3 mt-0.5">✓</span>
                  <span class="text-gray-700 text-sm">{{ $feature }}</span>
                </li>
              @endforeach
            </ul>
          </div>

          <!-- Tech Stack Section -->
          <div>
            <h3 class="text-sm font-semibold text-gray-900 mb-3 flex items-center">
              <span class="inline-block w-8 h-px bg-amber-300 mr-2"></span>
              Tech Stack
            </h3>
            <div class="space-y-3">
              @foreach ($project['tech'] as $tech)
                <div class="flex items-center gap-3">
                  <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-amber-500">
                    <i class="{{ $tech['icon'] }}"></i>
                  </div>
                  <div>
                    <div class="text-sm font-medium text-gray-800">{{ $tech['title'] }}</div>
                    <div class="text-xs text-gray-500">{{ $tech['desc'] }}</div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Section -->
      <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex flex-wrap justify-between items-center">
        <div class="text-gray-500 text-xs flex items-center">
          <span class="flex items-center"><i class="far fa-calendar-alt mr-1"></i> Updated Feb 2025</span>
          <span class="mx-2">•</span>
          <span class="flex items-center"><i class="fas fa-bone mr-1"></i> 100+ dog breeds</span>
        </div>

        <a href="{{ $project['detailsUrl'] }}"
           class="flex items-center gap-1 text-amber-500 hover:text-amber-600 text-sm font-medium transition-colors group">
          <span>Details</span>
          <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<style>
  /* Performant animations and transitions */
  @media (prefers-reduced-motion: no-preference) {
    .group:hover svg {
      transform: translateX(2px);
    }
  }

  /* Mobile optimizations */
  @media (max-width: 768px) {
    .group:hover svg {
      transform: none;
    }
  }
</style>
