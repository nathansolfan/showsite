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

<!-- Project Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

    <!-- Project Image -->
    <div class="flex justify-center">
        <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project" class="w-full max-w-lg rounded-lg shadow-lg">
    </div>

    <!-- Project Info -->
    <div class="flex flex-col items-center text-center gap-6">

        <!-- Project Title -->
        <h2 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">
            {{ $project['name'] }}
        </h2>

        <!-- Description -->
        <p class="text-lg text-gray-700 leading-relaxed">
            {{ $project['description'] }}
        </p>

        <!-- Tech Stack -->
        <div class="flex flex-wrap items-center gap-6">
            <span class="text-gray-800 font-semibold">Technologies used:</span>
            @foreach ($project['tech'] as $item)
                <div class="group flex flex-col items-center p-3">
                    <!-- Icon -->
                    <i class="{{ $item['icon'] }} text-4xl text-blue-600 group-hover:text-indigo-500 transition-transform duration-300"></i>
                    <!-- Title always visible -->
                    <span class="text-sm font-semibold text-gray-700 mt-1">
                        {{ $item['title'] }}
                    </span>
                </div>
            @endforeach
        </div>

        <!-- Buttons -->
        <div class="flex gap-4">
            <!-- GitHub Button -->
            <a href="{{ $project['githubUrl'] }}" target="_blank"
                class="inline-flex items-center gap-2 border-2 border-gray-900 text-gray-900 bg-transparent px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-gray-900 hover:text-white hover:shadow-lg transform hover:-translate-y-1">
                <i class="fab fa-github"></i> View on GitHub
            </a>

            <!-- Live Preview Button -->
            <button onclick="openFullscreenPreview('{{ $project['liveUrl'] }}')"
                class="inline-flex items-center gap-2 border-2 border-blue-600 text-blue-600 bg-transparent px-6 py-3 rounded-lg font-medium shadow-md transition-all duration-300 hover:bg-blue-600 hover:text-white hover:shadow-lg transform hover:-translate-y-1">
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

<!-- JavaScript for Fullscreen Preview -->
<script>
    function openFullscreenPreview(url) {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');

        iframe.src = url;
        overlay.classList.add('show');
    }

    function closeFullscreenPreview() {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');

        iframe.src = ''; // Clear the iframe src to stop loading the page
        overlay.classList.remove('show');
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
        background-color: rgba(0, 0, 0, 0.85);
        z-index: 1000;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transform: scale(0.9);
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .fullscreen-overlay.show {
        display: flex;
        opacity: 1;
        transform: scale(1);
    }

    .fullscreen-overlay iframe {
        width: 90%;
        height: 90%;
        border: none;
        border-radius: 10px;
    }

    .fullscreen-overlay .close-btn {
        position: absolute;
        top: 15px;
        right: 20px;
        background-color: white;
        color: black;
        padding: 10px 15px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.2s;
    }

    .fullscreen-overlay .close-btn:hover {
        background-color: rgb(200, 200, 200);
    }
</style>
