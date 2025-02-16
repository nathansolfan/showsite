@php
    $project = [
        'name' => 'Generate your random dog',
        'description' => 'A random dog image generator using an API to fetch adorable dog photos and information.
        You can decide to save it as a favorite and change the dog if you don’t like it.',
        'githubUrl' => 'https://github.com/nathansolfan/DogAPIGenerator',
        'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'A powerful PHP framework for building scalable web applications.',
            ],
            [
                'icon'  => 'fab fa-react',
                'title' => 'React.js',
                'desc'  => 'Efficiently managing UI with reusable components and state management.'
            ],
            [
                'icon'  => 'fab fa-js',
                'title' => 'JavaScript',
                'desc'  => 'Enhancing interactivity and dynamic features on web applications.'
            ],
        ],
    ];
@endphp


<div>
    <div class="flex " >
        <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project" class="w-full max-w-lg justify-center ">

        <!-- Project Title (Centered at the Top) -->
    <h2 id="test" class="col-start-2 row-start-3 col-span-2 text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 text-center">
        {{ $project['name'] }}
    </h2>
    </div>

    <!-- Tech Stack (Centered Below the Description) -->
    <div class="col-start-2 row-start-5 col-span-2 flex flex-wrap justify-center gap-6">
        <span class="text-gray-800 font-semibold">Technologies used:</span>
        @foreach ($project['tech'] as $item)
            <div class="group flex flex-col items-center p-3">
                <i class="{{ $item['icon'] }} text-4xl text-blue-600 group-hover:text-indigo-500 transition-transform duration-300"></i>
                <span class="text-sm font-semibold text-gray-700 mt-1">{{ $item['title'] }}</span>
            </div>
        @endforeach
    </div>

    <!-- Description (Below the Title) -->
    <p class="col-start-2 row-start-4 col-span-2 text-lg text-gray-700 leading-relaxed text-center">
        {{ $project['description'] }}
    </p>


</div>
