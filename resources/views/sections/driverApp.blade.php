@php
    $project = [
        'name' => 'Hire Your Driver',
        'description' => 'Route management, bookings, payments, and driver performance analytics.',
        'tagline' => 'A comprehensive solution for transportation businesses',
        'githubUrl' => 'https://github.com/nathansolfan/DriverApp',
        'liveUrl' => 'https://driverapp.duckdns.org/',
        'detailsUrl' => url('/projects/driverApp'),
        'features' => [
            'Real-time route tracking',
            'Secure payment processing',
            'Performance analytics dashboard',
        ],
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'Backend API and admin dashboard',
            ],
            [
                'icon' => 'fab fa-php',
                'title' => 'PHP',
                'desc' => 'Server-side logic and data processing',
            ],
            [
                'icon' => 'fab fa-js',
                'title' => 'JavaScript',
                'desc' => 'Interactive maps and real-time updates',
            ],
        ],
    ];
@endphp

<div class="w-full py-16 px-4 overflow-hidden">
  <!-- Main Card Container -->
  <div class="max-w-7xl mx-auto">
    <!-- Glass Card -->
    <div class="relative overflow-hidden bg-gradient-to-br from-blue-500 to-indigo-600 rounded-3xl shadow-2xl transform transition-all duration-500 hover:shadow-[0_20px_50px_rgba(8,_112,_184,_0.7)]">

      <!-- Floating Decorative Elements -->
      <div class="absolute -top-24 -left-24 w-64 h-64 bg-blue-400 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob"></div>
      <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-indigo-400 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-blob animation-delay-2000"></div>
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-purple-400 rounded-full mix-blend-multiply filter blur-2xl opacity-20 animate-blob animation-delay-4000"></div>

      <!-- Header Section -->
      <div class="relative z-10 flex flex-col sm:flex-row justify-between items-start p-6 sm:p-8 border-b border-white/10">
        <!-- Project Info -->
        <div class="flex items-center">
          <!-- Project Logo -->
          <div class="mr-5 bg-white/10 p-3 rounded-xl backdrop-blur-md transform transition-all duration-300 hover:scale-110">
            @include('svgs.driverlogo')
          </div>

          <!-- Project Title -->
          <div>
            <div class="flex items-center">
              <h2 class="text-2xl sm:text-3xl font-extrabold text-white">{{ $project['name'] }}</h2>
              <span class="ml-3 px-2 py-1 bg-white/20 text-white text-xs rounded-md backdrop-blur-sm">v2.1</span>
            </div>
            <p class="text-blue-100 mt-1">{{ $project['tagline'] }}</p>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex gap-3 mt-4 sm:mt-0 self-start">
          <a href="{{ $project['githubUrl'] }}" target="_blank" class="group">
            <div class="flex items-center gap-2 px-4 py-2 bg-white/10 hover:bg-white/20 border border-white/20 rounded-lg backdrop-blur-sm transition-all duration-300">
              <i class="fab fa-github text-white"></i>
              <span class="text-white text-sm">Source</span>
            </div>
          </a>
          <a href="{{ $project['liveUrl'] }}" target="_blank" class="group">
            <div class="flex items-center gap-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-lg transition-all duration-300">
              <i class="fas fa-external-link-alt text-white"></i>
              <span class="text-white text-sm">Live Demo</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Main Content Grid -->
      <div class="relative z-10 grid grid-cols-1 lg:grid-cols-5 gap-6 p-6 sm:p-8">
        <!-- Left: Project Description (2 cols) -->
        <div class="lg:col-span-2 flex flex-col justify-between h-full">
          <!-- Description Section -->
          <div class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 h-full">
            <h3 class="text-xl font-bold text-white mb-4">
              {{ $project['description'] }}
            </h3>

            <!-- Key Features -->
            <div class="mt-6">
              <h4 class="text-sm uppercase tracking-wider text-blue-200 mb-3 flex items-center">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Key Features
              </h4>

              <ul class="space-y-3">
                @foreach($project['features'] as $feature)
                  <li class="flex items-start text-white">
                    <span class="flex-shrink-0 w-6 h-6 bg-indigo-500 rounded-full flex items-center justify-center mr-3 mt-0.5">
                      <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                      </svg>
                    </span>
                    <span>{{ $feature }}</span>
                  </li>
                @endforeach
              </ul>

              <!-- Details Button -->
              <a href="{{ $project['detailsUrl'] }}" class="inline-flex items-center mt-8 px-5 py-3 bg-white hover:bg-blue-50 text-blue-600 font-medium rounded-xl shadow-md transition-all duration-300 group">
                <span>View Project Details</span>
                <svg class="w-5 h-5 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Center: SVG/Image Preview (1 col) -->
        <div class="lg:col-span-1 flex items-center justify-center">
          <div class="transition-all duration-500 transform hover:scale-110 hover:rotate-3 filter drop-shadow-2xl">
            @include('svgs.driver')
          </div>
        </div>

        <!-- Right: Tech Stack (2 cols) -->
        <div class="lg:col-span-2">
          <div class="bg-white/5 backdrop-blur-md rounded-2xl p-6 border border-white/10 h-full">
            <h4 class="text-sm uppercase tracking-wider text-blue-200 mb-4 flex items-center">
              <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              Technology Stack
            </h4>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              @foreach ($project['tech'] as $tech)
                <div class="bg-white/10 hover:bg-white/20 rounded-xl p-4 border border-white/10 transition-all duration-300 transform hover:-translate-y-1">
                  <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 bg-indigo-600 p-3 rounded-lg">
                      <i class="{{ $tech['icon'] }} text-2xl text-white"></i>
                    </div>
                    <div>
                      <h5 class="font-bold text-white mb-1">{{ $tech['title'] }}</h5>
                      <p class="text-sm text-blue-100">{{ $tech['desc'] }}</p>
                    </div>
                  </div>
                </div>
              @endforeach

              <!-- Extra Info Card -->
              <div class="bg-gradient-to-br from-indigo-600/30 to-purple-600/30 rounded-xl p-4 border border-white/10 col-span-1 sm:col-span-2">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                  <div class="flex items-center mb-3 sm:mb-0">
                    <svg class="w-5 h-5 text-indigo-300 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm text-white">Last updated: Feb 2025</span>
                  </div>
                  <div class="flex items-center">
                    <span class="inline-block w-2 h-2 bg-green-400 rounded-full mr-2"></span>
                    <span class="text-sm text-white">Active Maintenance</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="relative z-10 p-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4">
        <div class="flex items-center">
          <span class="text-xs sm:text-sm text-blue-100 mr-4">Share this project:</span>
          <div class="flex space-x-3">
            <a href="#" class="text-white/70 hover:text-white transition-colors">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="text-white/70 hover:text-white transition-colors">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="text-white/70 hover:text-white transition-colors">
              <i class="fab fa-facebook"></i>
            </a>
          </div>
        </div>

        <a href="#next-project" class="group flex items-center text-sm text-white">
          <span>Next Project</span>
          <svg class="w-5 h-5 ml-1 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

<style>
  @keyframes blob {
    0% {
      transform: translate(0px, 0px) scale(1);
    }
    33% {
      transform: translate(30px, -50px) scale(1.1);
    }
    66% {
      transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
      transform: translate(0px, 0px) scale(1);
    }
  }

  .animate-blob {
    animation: blob 7s infinite;
  }

  .animation-delay-2000 {
    animation-delay: 2s;
  }

  .animation-delay-4000 {
    animation-delay: 4s;
  }
</style>
