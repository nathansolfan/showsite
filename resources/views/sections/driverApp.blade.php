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


<div
class="border-2">

    {{-- header  border-b-2 --}}
    <div class=" ">
        {{-- logo --}}
        <div class="text-2xl font-extrabold text-gray-900  ">
            <div class="">
                @include('svgs.driverlogo')
            </div>

        </div>
        {{-- buttons mid --}}
        <div class=" ">
            <button class="text-4xl"> <i class="fa-brands fa-github"></i> </button>
            <button class=" text-4xl"> <i class="fa-solid fa-eye"></i> </button>
        </div>

        {{-- right --}}
        <div class="">

            <button class="">
                @include('svgs.nexticon')
            </button>
        </div>
    </div>


    {{-- MIDDLE --}}
    <div class="">
        {{-- left --}}
        <div class="p-8">
            <div>
                <h1 class="text-4xl font-bold text-gray-900"> {{ $project['description'] }} </h1>
                {{-- <p class="text-lg text-gray-700 mt-2"> This app generates random adorable dog images using an API.</p> --}}
            </div>
        </div>

        {{-- center --}}
        <div class=" ">
            <div class=>
                @include('svgs.driver')
            </div>
        </div>

        {{-- right --}}
        <div class="">
            @foreach ($project['tech'] as $tech)
                <div class="tech-item flex flex-col">
                    @if (isset($tech['image']))
                        <div class="">
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
