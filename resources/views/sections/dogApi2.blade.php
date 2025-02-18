@php
    $project = [
        'name' => 'Generate your random dog',
        'description' => 'A random dog image generator using an API to fetch adorable dog photos and information. You can decide to save it as a favorite and change the dog if you don’t like it.',
        'githubUrl' => 'https://github.com/nathansolfan/DogAPIGenerator',
        'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
        'tech' => [
            [
                'icon' => 'fab fa-laravel',
                'title' => 'Laravel',
                'desc' => 'A powerful PHP framework for building scalable web applications.',
            ],
            [
                'icon' => 'fab fa-react',
                'title' => 'React.js',
                'desc' => 'Efficiently managing UI with reusable components and state management.'
            ],
            [
                'icon' => 'fab fa-js',
                'title' => 'JavaScript',
                'desc' => 'Enhancing interactivity and dynamic features on web applications.'
            ],
        ],
    ];
@endphp

<div class="project-card">
    <!-- Project Image -->
    <div class="project-image">
        {{-- <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project">
        <h1>My Dog SVG</h1> --}}
    {{-- @include('svgs.dogs') <!-- This will inline the code from dog.blade.php --> --}}
    </div>

    <!-- Project Title -->
    <h2 class="project-title">{{ $project['name'] }}</h2>

    <!-- Project Description -->
    <p class="project-description">{{ $project['description'] }}</p>

    <!-- Tech Stack -->
    <div class="project-tech">
        <span>Technologies used:</span>
        @foreach ($project['tech'] as $item)
            <div class="tech-item">
                <i class="{{ $item['icon'] }}"></i>
                <span>{{ $item['title'] }}</span>
            </div>
        @endforeach
    </div>

    <!-- Buttons -->
    <div class="project-buttons">
        <a href="{{ $project['githubUrl'] }}" target="_blank">View on GitHub</a>
        <a href="{{ $project['liveUrl'] }}" target="_blank">Live Preview</a>
    </div>
</div>


