@php
    $project = [
        'name' => 'DogAPIGenerator',
        'description' => 'A random dog image generator using an API to fetch adorable dog photos and information.',
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
                'title' => 'Javascript',
                'desc'  => 'Enhancing interactivity and dynamic features on web applications.'
            ],
        ],
    ];
@endphp


<div class="flex gap-24">

    <!-- Project Image -->
    <div class="lg:w-1/2 flex ">
        <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project" class="max-w-lg">
    </div>

    <div class="flex flex-col justify-center items-center text-center gap-6">
        <!-- Project Title -->
        <h2 id="dog-title-text" class="text-5xl font-extrabold text-gray-900">
            {{ $project['name'] }}</h2>


        <!-- Description -->
        <p class="">
            {{ $project['description'] }}
        </p>

        <!-- Tech -->
        {{-- <div class="flex gap-3">
            @foreach ($project['tech'] as $tech)
            <span class=" bg-gradient-to-r from-blue-500 to-indigo-500 text-white px-4 py-2 rounded shadow-md"> {{$tech}} </span>
            @endforeach
        </div> --}}
        <div class="flex gap-3">
            @foreach ($project['tech'] as $item)
                <div class="group flex items-center gap-2 bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-4 rounded shadow-md">
                    <!-- Icon is always visible -->
                    <i class="{{ $item['icon'] }} text-2xl"></i>
                    <!-- Title is hidden by default and only shows on hover -->
                    <span class="hidden group-hover:block text-sm font-bold">
                        {{ $item['title'] }}
                    </span>
                </div>
            @endforeach
        </div>




        <!-- Buttons Container -->
        <div class="">
            <!-- GitHub Button -->
            <a href="{{ $project['githubUrl'] }}" target="_blank"
                class="inline-flex items-center gap-2 border-2 border-gray-900 text-gray-900 bg-transparent px-7 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-gray-900 hover:text-white hover:shadow-lg active:translate-y-[1px]">
                <i class="fab fa-github"></i> View on GitHub
            </a>

            <!-- Live Preview Button -->
            <button onclick="openFullscreenPreview('{{ $project['liveUrl'] }}')"
                class="inline-flex items-center gap-2 border-2 border-gray-900 text-gray-900 bg-transparent px-7 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-gray-900 hover:text-white hover:shadow-lg active:translate-y-[1px]">
                <i class="fas fa-external-link-alt"></i> Live Preview
            </button>

        </div>
    </div>




</div>




<!-- Fullscreen Overlay for Project Preview -->
<div id="fullscreen-overlay" class="fullscreen-overlay">
    <button class="close-btn" onclick="closeFullscreenPreview()">Close</button>
    <iframe id="fullscreen-iframe" src=""></iframe>
</div>

<!-- JavaScript code directly in the Blade template -->
<script>
    function openFullscreenPreview(url) {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');

        iframe.src = url;
        overlay.style.display = 'flex';
    }

    function closeFullscreenPreview() {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');

        iframe.src = ''; // Clear the iframe src to stop loading the page
        overlay.style.display = 'none';
    }
</script>

<!-- Styling for the Fullscreen Overlay -->
<style>
    .fullscreen-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .fullscreen-overlay iframe {
        width: 90%;
        height: 90%;
        border: none;
        border-radius: 10px;
    }

    .fullscreen-overlay .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        background-color: #ffffff;
        color: #333;
        padding: 10px 15px;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        z-index: 1100;
    }
</style>
