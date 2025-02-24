@php
    $project = [
        'name' => 'Hire Your Driver',
        'description' => 'Route, bookings, payments, and driver performance analytics.',
        'githubUrl' => 'https://github.com/nathansolfan/DriverApp',
        'liveUrl' => 'https://driverapp.duckdns.org/',
        'detailsUrl' => url('/projects/driverApp'),
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'An open-source platform for building React Native apps.',
            ],
            [
                'icon' => 'fab fa-php',
                'title' => 'PHP',
                'desc' => 'Efficiently managing UI with reusable components and state management.',
            ],
            [
                'icon' => 'fab fa-js',
                'title' => 'JavaScript',
                'desc' => 'Enhancing interactivity and dynamic features on web applications.',
            ],
        ],
    ];
@endphp

<div class="min-h-screen w-full flex items-center">
  <div class="flex flex-col justify-between w-[90%] max-w-7xl h-auto mx-auto bg-blue-400 border-2 border-gray-900 rounded-lg shadow-lg">

    <!-- Header -->
    <div class="flex justify-between items-start p-4">
      <!-- Logo with hover scale -->
      <div class="text-2xl font-extrabold text-gray-900 transition-transform duration-300 transform hover:scale-105">
          @include('svgs.driverlogo')
      </div>

      <!-- Buttons mid with hover scale -->
      <div class="flex">
          <button class="px-4 text-4xl transition duration-300 transform hover:scale-110">
              <i class="fa-brands fa-github"></i>
          </button>
          <button class="px-4 text-4xl transition duration-300 transform hover:scale-110">
              <i class="fa-solid fa-eye"></i>
          </button>
      </div>

      <!-- Next icon with a slight rotation on hover -->
      <div class="flex flex-wrap sm:flex-row flex-col gap-4 justify-center items-center">
          <button class="transition duration-300 transform hover:rotate-12">
              @include('svgs.nexticon')
          </button>
      </div>
    </div>

    <!-- MIDDLE -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 items-center justify-center">
      <!-- Left: Project Description -->
      <div class="p-8">
          <div>
              <h1 class="text-4xl font-bold text-gray-900">
                  {{ $project['description'] }}
              </h1>
          </div>
      </div>

      <!-- Center: Main SVG with hover scale -->
      <div class="flex justify-center mt-4">
          <div class="transition duration-300 transform hover:scale-105">
              @include('svgs.driver')
          </div>
      </div>

      <!-- Right: Tech Icons with hover scale -->
      <div class="flex flex-col justify-center lg:items-end md:items-end items-center p-4 gap-6">
          @foreach ($project['tech'] as $tech)
              <div class="tech-item flex flex-col items-center transition duration-300 transform hover:scale-110">
                  @if (isset($tech['image']))
                      <div>
                          @include('svgs.expoicon')
                      </div>
                  @else
                      <i class="{{ $tech['icon'] }} text-5xl text-gray-900"></i>
                  @endif
              </div>
          @endforeach
      </div>
    </div>
  </div>
</div>
