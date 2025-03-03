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

<div class="w-full py-8 px-4 overflow-hidden project-card">
  <!-- Main Card Container -->
  <div class="max-w-4xl mx-auto">
    <!-- Card with solid background instead of gradient -->
    <div class="relative overflow-hidden bg-amber-400 rounded-2xl shadow-xl border-2 border-gray-900">
      <!-- Static decorative elements instead of animated blobs -->
      <div class="absolute -top-16 -left-16 w-48 h-48 bg-yellow-300 rounded-full opacity-20 static-blob"></div>
      <div class="absolute -bottom-16 -right-16 w-48 h-48 bg-green-400 rounded-full opacity-20 static-blob"></div>

      <!-- Header Section - Simplified -->
      <div class="relative z-10 p-5 border-b-2 border-gray-800/20">
        <div class="flex flex-col space-y-4">
          <!-- Project Title -->
          <div class="flex items-center">
            <!-- Logo -->
            <div class="mr-3 text-xl sm:text-2xl font-extrabold text-gray-900">
              @include('svgs.doglogo')
            </div>
            <div>
              <h2 class="text-xl font-bold text-gray-900">{{ $project['name'] }}</h2>
              <p class="text-sm text-gray-800">{{ $project['tagline'] }}</p>
            </div>
          </div>

          <!-- Action Buttons - Stacked for mobile, side by side for larger screens -->
          <div class="flex flex-col sm:flex-row gap-2">
            <a href="{{ $project['githubUrl'] }}" target="_blank" class="w-full sm:w-auto">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-white/20 border border-gray-800/20 rounded-lg">
                <i class="fab fa-github text-gray-900"></i>
                <span class="text-gray-900 text-sm">Source</span>
              </div>
            </a>
            <a href="{{ $project['liveUrl'] }}" target="_blank" class="w-full sm:w-auto">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-amber-600 rounded-lg shadow">
                <i class="fas fa-external-link-alt text-white"></i>
                <span class="text-white text-sm">Live Demo</span>
              </div>
            </a>
            <a href="{{ $project['detailsUrl'] }}" class="w-full sm:w-auto">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-white text-amber-600 rounded-lg shadow">
                <span class="text-sm font-medium">Details</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Main Content - Single column for mobile -->
      <div class="relative z-10 p-5">
        <!-- Project Description -->
        <div class="mb-6 bg-amber-300 rounded-xl p-4">
          <h3 class="text-xl font-bold text-gray-900 mb-2">
            🐾 {{ $project['description'] }}
          </h3>
          <p class="text-sm text-gray-800 mt-2 mb-3">
            This app generates random adorable dog images using the Dog API.
          </p>

          <!-- Key Features - Simplified -->
          <div class="mt-4">
            <h4 class="text-sm font-semibold text-gray-900 mb-2">Key Features:</h4>
            <ul class="space-y-2">
              @foreach($project['features'] as $feature)
                <li class="flex items-start">
                  <span class="text-amber-700 mr-2">✓</span>
                  <span class="text-gray-800 text-sm">{{ $feature }}</span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>

        <!-- Tech Stack - Simplified -->
        <div class="bg-amber-300 rounded-xl p-4">
          <h4 class="text-lg font-bold text-gray-900 mb-3">Tech Stack</h4>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            @foreach ($project['tech'] as $tech)
              <div class="tech-item flex items-center gap-3 p-3 bg-amber-200 rounded-lg">
                <div class="flex-shrink-0">
                  <i class="{{ $tech['icon'] }} text-xl text-gray-900"></i>
                </div>
                <div>
                  <h5 class="font-medium text-gray-900 text-sm">{{ $tech['title'] }}</h5>
                  <p class="text-xs text-gray-700">{{ $tech['desc'] }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Footer - Simplified -->
      <div class="relative z-10 p-4 border-t border-gray-800/20 bg-amber-500 flex flex-col sm:flex-row justify-between items-center gap-3">
        <div class="text-gray-800 text-xs">
          <span class="mr-3"><i class="far fa-calendar-alt mr-1"></i> Last updated: Feb 2025</span>
          <span><i class="fas fa-bone mr-1"></i> 100+ dog breeds</span>
        </div>

        <a href="{{ $project['detailsUrl'] }}" class="text-gray-900 flex items-center gap-1 group text-xs">
          Next Project
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<style>
  /* Mobile-specific optimizations */
  @media (max-width: 768px) {
    /* Replace blurry effect with a simple opacity on mobile */
    .static-blob {
      filter: none;
      mix-blend-mode: normal;
    }

    /* Simplify background for better performance */
    .project-card .bg-gradient-to-br {
      background: #f59e0b; /* Solid color instead of gradient */
    }

    /* Disable translucent/glass effects on mobile */
    .backdrop-blur-sm {
      backdrop-filter: none;
    }

    /* Disable hover effects on mobile that might trigger during scroll */
    .project-card a div {
      transition: none !important;
    }

    /* Remove icon animation to improve performance */
    .project-card svg {
      transform: none !important;
      transition: none !important;
    }
  }
</style>
