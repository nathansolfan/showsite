@php
    $project = [
        'name' => 'Hire Your Driver',
        'description' =>
            'Route management, bookings, payments, and driver performance analytics.',
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

{{--
<div
    class="h-screen w-full flex flex-col lg:flex-row justify-center items-center text-center lg:text-left bg-white p-12">

    <!-- Left Side: Project Text -->
    <div class="lg:w-1/2 max-w-2xl">
        <h2 id="driver" class="text-5xl font-extrabold text-gray-900">{{ $project['name'] }}</h2>
        <p class="mt-4 text-lg text-gray-600">{{ $project['description'] }}</p>

        <!-- Tech Stack -->
        <div class="mt-6 flex flex-wrap justify-center lg:justify-start gap-3">
            @foreach ($project['tech'] as $tech)
                <span
                    class="text-sm bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 rounded-full shadow-md font-medium">
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

</div> --}}

<div
    class="flex flex-col justify-between  w-[90%] max-w-7xl h-auto
mx-auto bg-blue-400  border-2 border-gray-900 rounded-lg shadow-lg ">

    {{-- header  border-b-2 --}}
    <div class="flex justify-between items-center  ">
        {{-- logo --}}
        <div class="text-2xl font-extrabold text-gray-900 ml-6 -mt-2 ">
            <div class="scale-125">
                @include('svgs.driverlogo')
            </div>

        </div>
        {{-- buttons mid --}}
        <div class="flex flex-wrap justify-center gap-2 -mt-4 pr-20 ">
            <button class="px-4 text-4xl"> <i class="fa-brands fa-github"></i> </button>
            <button class="px-4 text-4xl"> <i class="fa-solid fa-eye"></i> </button>
        </div>

        {{-- right --}}
        <div class="flex flex-wrap sm:flex-row flex-col gap-4  justify-center items-center -mt-12 pr-2">

            <button class="flex items-center gap-2">
                @include('svgs.nexticon')
            </button>
        </div>
    </div>


    {{-- MIDDLE --}}
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 items-center justify-center">
        {{-- left --}}
        <div class="p-8">
            <div>
                <h1 class="text-4xl font-bold text-gray-900"> {{$project['description']}} </h1>
                <p class="text-lg text-gray-700 mt-2"> This app generates random adorable dog images using an API.</p>
            </div>
        </div>

        {{-- center --}}
        <div class="flex justify-end mt-4 ">
            <div>
                @include('svgs.driver')
            </div>
        </div>

        {{-- right --}}

        <div class="flex flex-col justify-center lg:items-end md:items-end items-center p-4 gap-12 ">
            @foreach ($project['tech'] as $tech)
    <div class="tech-item flex flex-col">
        @if (isset($tech['image']))
                        <div class="w-14 h-14 md:w-14 md:h-14 flex justify-center ">
                @include('svgs.expoicon')
            </div>
        @else
            <i class="{{ $tech['icon'] }} text-5xl text-gray-900"></i>
        @endif
        {{-- <h3 class="text-sm font-medium">{{ $tech['title'] }}</h3> --}}
        {{-- <p class="text-xs text-gray-600">{{ $tech['desc'] }}</p> --}}
    </div>
@endforeach

        </div>

    </div>












</div>
