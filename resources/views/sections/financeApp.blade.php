@php
    $project = [
        'name' => 'Finance Tracker',
        'description' => 'Personal budgeting, expense tracking, and financial analytics dashboard.',
        'tagline' => 'Take control of your financial future',
        'githubUrl' => 'https://github.com/nathansolfan/financeTracker',
        'liveUrl' => 'https://financetrackeruk.duckdns.org/login',
        'detailsUrl' => url('/projects/financeTracker'),
        'features' => [
            'Expense categorization',
            'Budget planning tools',
            'Visual spending reports',
        ],
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'Backend API and data management',
            ],
            [
                'icon' => 'fab fa-react',
                'title' => 'React.js',
                'desc' => 'Dynamic UI and data visualization',
            ],
            [
                'icon' => 'fab fa-js',
                'title' => 'JavaScript',
                'desc' => 'Interactive charts and graphs',
            ],
        ],
    ];
@endphp

<div class="w-full py-8 px-4 overflow-hidden project-card">
  <!-- Main Card Container -->
  <div class="max-w-4xl mx-auto">
    <!-- Glass Card - Static background instead of gradient for better performance -->
    <div class="relative overflow-hidden bg-green-600 rounded-2xl shadow-xl">
      <!-- Static decorative elements instead of animated blobs -->
      <div class="absolute -top-16 -left-16 w-48 h-48 bg-green-400 rounded-full opacity-20 static-blob"></div>
      <div class="absolute -bottom-16 -right-16 w-48 h-48 bg-indigo-400 rounded-full opacity-20 static-blob"></div>

      <!-- Header Section - Simplified -->
      <div class="relative z-10 p-5 border-b border-white/10">
        <div class="flex flex-col space-y-4">
          <!-- Project Title -->
          <div class="flex items-center">
            <!-- Smaller Logo -->
            <div class="mr-3 bg-white/10 p-2 rounded-lg">
              @include('svgs.driverlogo')
            </div>
            <div>
              <h2 class="text-xl font-bold text-white">{{ $project['name'] }}</h2>
              <p class="text-blue-100 text-sm">{{ $project['tagline'] }}</p>
            </div>
          </div>

          <!-- Action Buttons - Stacked for mobile, side by side for larger screens -->
          <div class="flex flex-col sm:flex-row gap-2">
            <a href="{{ $project['githubUrl'] }}" target="_blank" class="w-full sm:w-auto">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-white/10 border border-white/20 rounded-lg">
                <i class="fab fa-github text-white"></i>
                <span class="text-white text-sm">Source</span>
              </div>
            </a>
            <a href="{{ $project['liveUrl'] }}" target="_blank" class="w-full sm:w-auto">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-green-700 rounded-lg shadow">
                <i class="fas fa-external-link-alt text-white"></i>
                <span class="text-white text-sm">Live Demo</span>
              </div>
            </a>
            <a href="{{ $project['detailsUrl'] }}" class="w-full sm:w-auto">
              <div class="flex items-center justify-center gap-2 px-4 py-2 bg-white text-green-600 rounded-lg shadow">
                <span class="text-sm font-medium">Details</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </div>
            </a>
          </div>
        </div>
      </div>

      <!-- Main Content - Simplified to a single column on mobile -->
      <div class="relative z-10 p-5">
        <!-- Description -->
        <div class="mb-6">
          <h3 class="text-lg font-bold text-white mb-3">
            {{ $project['description'] }}
          </h3>

          <!-- Key Features - Simplified -->
          <div class="mt-4 bg-green-700 rounded-xl p-4">
            <h4 class="text-sm uppercase tracking-wider text-green-200 mb-3">
              Key Features
            </h4>

            <ul class="space-y-2">
              @foreach($project['features'] as $feature)
                <li class="flex items-start text-white text-sm">
                  <span class="flex-shrink-0 w-5 h-5 bg-indigo-500 rounded-full flex items-center justify-center mr-2 mt-0.5">
                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                  </span>
                  <span>{{ $feature }}</span>
                </li>
              @endforeach
            </ul>
          </div>
        </div>

        <!-- Tech Stack - Simplified Grid -->
        <div class="bg-green-700 rounded-xl p-4">
          <h4 class="text-sm uppercase tracking-wider text-green-200 mb-3">
            Technology Stack
          </h4>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
            @foreach ($project['tech'] as $tech)
              <div class="bg-green-600 rounded-lg p-3">
                <div class="flex items-center gap-3">
                  <div class="flex-shrink-0 bg-indigo-700 p-2 rounded-lg">
                    <i class="{{ $tech['icon'] }} text-lg text-white"></i>
                  </div>
                  <div>
                    <h5 class="font-bold text-white text-sm">{{ $tech['title'] }}</h5>
                    <p class="text-xs text-green-100">{{ $tech['desc'] }}</p>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <!-- Status Info - Simplified -->
          <div class="mt-3 flex items-center justify-between bg-indigo-700 rounded-lg p-3">
            <div class="flex items-center">
              <svg class="w-4 h-4 text-indigo-300 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
              <span class="text-xs text-white">Last updated: Jan 2025</span>
            </div>
            <div class="flex items-center">
              <span class="inline-block w-2 h-2 bg-green-400 rounded-full mr-2"></span>
              <span class="text-xs text-white">Active Maintenance</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer - Simplified -->
      <div class="relative z-10 p-4 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-3">
        <div class="flex items-center">
          <span class="text-xs text-green-100 mr-3">Share:</span>
          <div class="flex space-x-3">
            <a href="#" class="text-white/70">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white/70">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-white/70">
              <i class="fab fa-facebook"></i>
            </a>
          </div>
        </div>

        <a href="#next-project" class="group flex items-center text-xs text-white">
          <span>Next Project</span>
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
      background: #16a34a; /* Solid color instead of gradient */
    }

    /* Disable translucent/glass effects on mobile */
    .backdrop-blur-sm {
      backdrop-filter: none;
    }

    /* Disable hover effects on mobile that might trigger during scroll */
    .project-card a div {
      transition: none !important;
    }
  }
</style>
