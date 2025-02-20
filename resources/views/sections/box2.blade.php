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
                'image' => asset('images/expogo.png'), // Correct path to the image in public/images
                'title' => 'Expo Go',
                'desc' => 'An open-source platform for building React Native apps.',
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
    class="flex flex-col justify-around  w-[90%] max-w-7xl h-auto
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
        <div class="flex flex-wrap justify-center gap-2 -mt-12 pr-20 ">
            <button class="px-4 text-4xl"> <i class="fa-brands fa-github"></i> </button>
            <button class="px-4 text-4xl"> <i class="fa-solid fa-eye"></i> </button>
        </div>

        {{-- right --}}
        <div class="flex flex-wrap sm:flex-row flex-col gap-4 justify-center items-center -mt-12 pr-2">
            <button class="flex items-center gap-2">
                @include('svgs.nexticon')
            </button>
        </div>
    </div>

    {{-- center part --}}
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8 items-center justify-center">
        {{-- left --}}
        <div class="p-8">
            <div>
                <h1 class="text-4xl font-bold text-gray-900">🐾 <br> The Ultimate Dog Image Generator!
                </h1>
                <p class="text-lg text-gray-700 mt-2">This app generates
                    random adorable dog images using an API. </p>
            </div>
        </div>



        {{-- ceneter --}}
        <div class="flex justify-center mt-4 ">
            {{-- <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project" class="w-60 h-auto rounded-lg shadow-md"> --}}
            <div class="">
                @include('svgs.dogs') <!-- This will inline the code from dog.blade.php -->

            </div>

        </div>


        {{-- right --}}
        <div class="flex flex-col justify-center lg:items-end md:items-end items-center p-4 gap-12 ">
            @foreach ($project['tech'] as $item)
                <div class="tech-item flex flex-col ">
                    @if (isset($item['image']))
                        {{-- <img src="{{ asset($item['image']) }}" class="w-12 h-12 object-contain" alt="{{ $item['title'] }}"> --}}
                        <div class="w-14 h-14 md:w-14 md:h-14 flex justify-center ">
                            @include('svgs.expoicon') <!-- This will inline the code from dog.blade.php -->
                        </div>
                    @else
                        <i class="{{ $item['icon'] }} text-5xl text-gray-900"></i>
                    @endif
                </div>
            @endforeach
        </div>


    </div>




    {{-- footer
    <div class="flex justify-between items-center mt-6 border-2">

        <span class="border-2">Completed 2024</span>


        <div class="border-2">
            <button>-</button>
            <span>Pictures</span>
            <button>+</button>
        </div>


        <button class="border-2">
            Check blog
        </button>
    </div> --}}

</div>

{{-- `x --}}
