@php
    // Sample data you might pass from a controller or define right here
    $project = [
        'name' => 'Dogerator',
        'subtitle' => 'We are all dog lovers now', // optional tagline
        'description' => 'A random dog image generator using an API to fetch adorable dog photos...',
        'tags' => ['Case Study', 'API', 'React.js', 'Laravel'], // example tags
        'githubUrl' => 'https://github.com/...',
        'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
        'imageUrl' => asset('images/dogsAI.jpg'), // path to your image
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'A powerful PHP framework for building scalable web applications.',
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


<div
    class="mt-10 flex flex-col justify-between  w-[90%] max-w-7xl min-h-[600px] mx-auto p-8 bg-yellow-400  border-2 border-gray-900 rounded-lg shadow-lg">

    {{-- header --}}
    <div class="flex justify-between items-center mb-6 border-b-2 pb-2">
        {{-- logo --}}
        <div class="text-2xl font-extrabold text-grey-900  border-2">{{ $project['name'] }}</div>
        {{-- buttons mid --}}
        <div class="flex gap-4 border-2 py-2">
            <button class="px-4 ">View on GitHub</button>
            <button class="px-4 ">Live Preview</button>
        </div>
        {{-- right --}}
        <div class="flex gap-4 border-2">
            <button>Next</button>
            <button>Feedback</button>
        </div>
    </div>

    {{-- center part --}}
    <div class="grid grid-cols-3 gap-8 items-center">
        {{-- left --}}
        <div class="border-2">

            <div>
                <h1 class="text-4xl font-bold text-gray-900">🚀 Dogerator: The Ultimate Dog Image Generator!
                </h1>
                <p class="text-lg text-gray-700 mt-2">This app generates
                    random adorable dog images using an API. </p>
            </div>
        </div>



        {{-- right --}}
        <div class="flex justify-center border-2">
            {{-- <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project" class="w-60 h-auto rounded-lg shadow-md"> --}}
            <div class="">
                @include('svgs.dogs') <!-- This will inline the code from dog.blade.php -->

            </div>

        </div>


        <div class="border-2 flex flex-col justify-center items-center">
            @foreach ($project['tech'] as $item)
                <div class="tech-item ">
                    <i class="{{ $item['icon'] }}"></i>
                    <span>{{ $item['title'] }}</span>
                </div>
            @endforeach
        </div>

    </div>




    {{-- footer --}}
    <div class="flex justify-between items-center mt-6 border-2">
        {{-- price --}}
        <span class="border-2">Completed 2024</span>

        {{-- quantity --}}
        <div class="border-2">
            <button>-</button>
            <span>Pictures</span>
            <button>+</button>
        </div>

        {{-- buy now --}}
        <button class="border-2">
            Check blog
        </button>

    </div>

</div>


    @include('svgs.dogs')



