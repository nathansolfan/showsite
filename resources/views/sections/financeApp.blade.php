@php
    // Define project data directly in the Blade template
    $project = [
        'name' => 'Finance Tracker',
        'description' => 'A comprehensive application for route management, bookings, payments, and driver performance analytics.',
        'githubUrl' => 'https://github.com/nathansolfan/financeTracker',
        'liveUrl' => 'https://financetrackeruk.duckdns.org/login',
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'Efficiently managing UI with reusable components and state management.',
            ],
            [
                'icon' => 'fab fa-react',
                'title' => 'React.js',
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

<div class="min-h-screen w-full flex items-center  ">

<div
    class="flex flex-col justify-between  w-[90%] max-w-7xl h-auto
 mx-auto bg-red-400  border-2 border-gray-900 rounded-lg shadow-lg ">

    {{-- header  border-b-2 --}}
    <div class="flex justify-between items-center  ">
        {{-- logo --}}
        <div class="text-2xl font-extrabold text-gray-900  ">
            <div class="scale-125">
                @include('svgs.doglogo')
            </div>

        </div>
        {{-- buttons mid --}}
        <div class="flex gap-4 ">
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
    <div class="grid grid-cols-1 md:grid-cols-3 items-center justify-center">
        {{-- left --}}
        <div class="p-8">
            <div>
                <h1 class="text-4xl font-bold text-gray-900"> {{ $project['description'] }} </h1>
                {{-- <p class="text-lg text-gray-700 mt-2">This app generates
                    random adorable dog images using an API. </p> --}}
            </div>
        </div>



        {{-- right --}}
        <div class="flex justify-center mt-4 ">
            {{-- <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project" class="w-60 h-auto rounded-lg shadow-md"> --}}
            <div class="">
                @include('svgs.finance') <!-- This will inline the code from dog.blade.php -->

            </div>
        </div>

        {{-- right --}}
        <div class="flex flex-col justify-center lg:items-end md:items-end items-center p-4 gap-6">
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
</div>
