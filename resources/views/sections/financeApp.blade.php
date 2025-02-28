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

<div class="min-h-screen w-full flex items-center py-12">
  <div class="flex flex-col justify-between w-[90%] max-w-7xl h-auto mx-auto bg-gradient-to-br from-red-400 to-red-500 border-2 border-gray-900 rounded-2xl shadow-xl overflow-hidden transform transition-all hover:shadow-2xl">

    <!-- Header mobile responsiveness -->
<div class="flex flex-col sm:flex-row justify-between items-center p-4 sm:p-6 border-b-2 border-gray-800/20 gap-4 sm:gap-0">
    <!-- Logo with enhanced hover scale - better aligned for mobile -->
    <div class="flex items-center">
      <div class="text-xl sm:text-2xl font-extrabold text-gray-900 transition-transform duration-300 transform hover:scale-110 mr-3 sm:mr-4">
          @include('svgs.driverlogo')
      </div>
      <div>
        <h2 class="text-xl sm:text-2xl font-bold text-white drop-shadow-sm">{{ $project['name'] }}</h2>
        <p class="text-sm sm:text-base text-blue-100">{{ $project['tagline'] }}</p>
      </div>
    </div>

    <!-- Action buttons with labels - better sized for mobile -->
    <div class="flex gap-4 mt-3 sm:mt-0">
      <a href="{{ $project['githubUrl'] }}" target="_blank" class="group flex flex-col items-center">
        <div class="p-2 sm:p-3 bg-white/90 text-blue-600 rounded-full shadow-md transition duration-300 transform group-hover:scale-110 group-hover:bg-white">
          <i class="fab fa-github text-2xl sm:text-3xl"></i>
        </div>
        <span class="mt-1 text-[10px] sm:text-xs font-medium text-white">Source</span>
      </a>
      <a href="{{ $project['liveUrl'] }}" target="_blank" class="group flex flex-col items-center">
        <div class="p-2 sm:p-3 bg-white/90 text-blue-600 rounded-full shadow-md transition duration-300 transform group-hover:scale-110 group-hover:bg-white">
          <i class="fas fa-eye text-2xl sm:text-3xl"></i>
        </div>
        <span class="mt-1 text-[10px] sm:text-xs font-medium text-white">Demo</span>
      </a>
    </div>
  </div>

    <!-- Middle content with better structure -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 items-center justify-center gap-8 p-6">
      <!-- Left: Project Description with enhanced content -->
      <div class="p-6 bg-white/10 backdrop-blur-sm rounded-xl">
        <h1 class="text-3xl font-bold text-white mb-4 drop-shadow-sm">
          {{ $project['description'] }}
        </h1>

        <div class="mt-6">
          <h3 class="text-lg font-semibold text-white mb-2">Key Features:</h3>
          <ul class="space-y-2">
            @foreach($project['features'] as $feature)
              <li class="flex items-start">
                <span class="text-white/90 mr-2">✓</span>
                <span class="text-white/90">{{ $feature }}</span>
              </li>
            @endforeach
          </ul>
        </div>

        <a href="{{ $project['detailsUrl'] }}" class="inline-flex items-center px-4 py-2 bg-white text-red-600 rounded-lg font-medium mt-6 hover:bg-red-50 transition-colors">
          View Project Details
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>

      <!-- Center: Main SVG with enhanced hover effect -->
      <div class="flex justify-center">
        <div class="transition-all duration-300 transform hover:scale-105 hover:rotate-1 filter drop-shadow-xl">
          @include('svgs.finance')
        </div>
      </div>

      <!-- Right: Tech stack with improved layout -->
      <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
        <h3 class="text-xl font-bold text-white mb-4">Tech Stack</h3>

        <div class="space-y-4">
          @foreach ($project['tech'] as $tech)
            <div class="tech-item flex items-center gap-4 p-3 bg-white/20 rounded-lg transition-all duration-300 hover:bg-white/30 hover:transform hover:translate-x-1">
              <div class="flex-shrink-0">
                <i class="{{ $tech['icon'] }} text-3xl text-white"></i>
              </div>
              <div>
                <h4 class="font-medium text-white">{{ $tech['title'] }}</h4>
                <p class="text-sm text-red-100">{{ $tech['desc'] }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Footer with additional info -->
    <div class="bg-red-600/30 backdrop-blur-sm p-4 border-t border-white/20 flex justify-between items-center">
      <div class="text-white/90 text-sm">
        <span class="mr-4"><i class="far fa-calendar-alt mr-1"></i> Last updated: Jan 2025</span>
        <span><i class="fas fa-code-branch mr-1"></i> Version 1.3</span>
      </div>

      <a href="{{ $project['detailsUrl'] }}" class="text-white flex items-center gap-1 group">
        Next Project
        <div class="transition duration-300 transform group-hover:translate-x-1">
          @include('svgs.nexticon')
        </div>
      </a>
    </div>
  </div>
</div>
