@php
    $project = [
        'name' => 'Liverpool Community Cleanup',
        'description' => 'Connect volunteers, organize cleanup events, and collect donations to support environmental efforts in Liverpool.',
        'tagline' => 'For a cleaner, greener Liverpool',
        'githubUrl' => 'https://github.com/yourusername/liverpool-cleanup',
        'liveUrl' => 'https://cleanupliverpool.duckdns.org/',
        'detailsUrl' => url('/projects/liverpoolCleanup'),
        'features' => [
            'Interactive Cleanup Map',
            'Volunteer Profiles',
            'Secure Donation System',
        ],
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'Backend API and event management',
            ],
            [
                'icon' => 'fab fa-js',
                'title' => 'JavaScript',
                'desc' => 'Interactive maps and dashboards',
            ],
            [
                'icon' => 'fab fa-stripe-s',
                'title' => 'Stripe',
                'desc' => 'Secure donation processing',
            ],
        ],
    ];
@endphp

<div class="w-full py-8 px-4 overflow-hidden project-card">
  <!-- Main Card Container -->
  <div class="max-w-4xl mx-auto">
    <!-- Card with professional blue theme and decorative background elements -->
    <div class="relative overflow-hidden bg-blue-600 rounded-2xl shadow-md">
      <!-- Decorative background circles -->
      <div class="absolute -top-16 -left-16 w-48 h-48 bg-blue-500 rounded-full opacity-50 static-blob"></div>
      <div class="absolute -bottom-16 -right-16 w-48 h-48 bg-indigo-500 rounded-full opacity-50 static-blob"></div>

      <!-- Additional smaller circles -->
      <div class="absolute top-1/3 right-10 w-24 h-24 bg-sky-400 rounded-full opacity-30 static-blob"></div>
      <div class="absolute bottom-1/4 left-10 w-20 h-20 bg-blue-400 rounded-full opacity-30 static-blob"></div>

      <!-- Header Section -->
      <div class="relative z-10 p-5 border-b border-blue-500">
        <div class="flex flex-col space-y-4">
          <!-- Project Title -->
          <div class="flex items-center">
            <!-- Logo -->
            <div class="mr-3 bg-blue-500 p-2 rounded-lg">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
              </svg>
            </div>
            <div>
              <h2 class="text-xl font-bold text-white">{{ $project['name'] }}</h2>
              <p class="text-blue-100 text-sm">{{ $project['tagline'] }}</p>
            </div>
          </div>

          <!-- Action Buttons -->
          <div class="flex flex-wrap gap-2">
            <a href="{{ $project['githubUrl'] }}" target="_blank" class="inline-block">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-blue-500 text-white rounded-lg border border-blue-400">
                <i class="fab fa-github"></i>
                <span class="text-sm">Source</span>
              </div>
            </a>
            <a href="{{ $project['liveUrl'] }}" target="_blank" class="inline-block">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-indigo-600 text-white rounded-lg">
                <i class="fas fa-external-link-alt"></i>
                <span class="text-sm">Live Demo</span>
              </div>
            </a>
            <a href="{{ $project['detailsUrl'] }}" class="inline-block">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-white text-blue-700 rounded-lg">
                <span class="text-sm font-medium">Details</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Main Content -->
      <div class="relative z-10 p-5">
        <!-- Description Section -->
        <div class="mb-6 bg-blue-700 rounded-xl p-4">
          <h3 class="text-lg font-bold text-white mb-3">
            🌊 {{ $project['description'] }}
          </h3>
          <p class="text-blue-100">
            A platform bringing communities together to preserve Liverpool's environment.
          </p>

          <!-- Key Features -->
          <div class="mt-4">
            <h4 class="text-sm font-bold text-blue-100 mb-3">
              Key Features:
            </h4>

            <ul class="space-y-2">
              @foreach($project['features'] as $feature)
                <li class="flex items-start text-white text-sm">
                  <span class="flex-shrink-0 text-sky-300 mr-2">✓</span>
                  <span>{{ $feature }}</span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>

        <!-- Tech Stack Grid -->
        <div class="bg-blue-700 rounded-xl p-4">
          <h4 class="text-sm font-bold text-blue-100 mb-3">
            Tech Stack
          </h4>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            @foreach ($project['tech'] as $tech)
              <div class="bg-blue-600 rounded-lg p-3">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 bg-indigo-700 p-2 rounded-lg">
                    <i class="{{ $tech['icon'] }} text-lg text-white"></i>
                  </div>
                  <div>
                    <h5 class="font-bold text-white text-sm">{{ $tech['title'] }}</h5>
                    <p class="text-xs text-blue-100">{{ $tech['desc'] }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="relative z-10 p-4 border-t border-blue-500 bg-blue-600 flex flex-wrap items-center justify-between gap-3">
        <div class="flex items-center space-x-4">
          <span class="text-xs text-white flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            Last updated: Apr 2025
          </span>
          <span class="text-xs text-white flex items-center">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            300+ Volunteers
          </span>
        </div>

        <a href="#next-project" class="group flex items-center text-xs text-white hover:text-blue-200 transition-colors">
          <span>Next Project</span>
          <svg class="w-4 h-4 ml-1 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<style>
  /* Mobile optimizations */
  @media (max-width: 768px) {
    /* Optimize background circles for mobile */
    .static-blob {
      filter: none;
      mix-blend-mode: normal;
    }

    /* Disable hover effects on mobile that might trigger during scroll */
    .project-card a div {
      transition: none !important;
    }

    .group:hover svg {
      transform: none !important;
    }
  }
</style>
