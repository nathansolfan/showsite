@php
    // Define project data directly in the Blade template
    $project = [
        'name' => 'DogAPIGenerator',
        'description' => 'A random dog image generator using an API to fetch adorable dog photos and information.',
        'githubUrl' => 'https://github.com/nathansolfan/DogAPIGenerator',
        'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
    ];
@endphp

<!-- Project Tile -->
<div class="group relative flex flex-col justify-center items-center text-center bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 duration-300 ease-in-out border border-gray-200 mb-8 min-h-[520px] overflow-hidden">
    <!-- Project Image (Animated on Hover) -->
    <div class="w-full h-52 overflow-hidden rounded-xl relative">
        <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project"
            class="w-full h-full object-cover transition-transform duration-500 transform group-hover:scale-105 flip-horizontal-bottom-target">
    </div>

    <!-- Project Title -->
    <h3 class="text-3xl font-bold text-gray-900 mt-5 group-hover:text-blue-600 transition-colors duration-200">
        {{ $project['name'] }}
    </h3>

    <!-- Description -->
    <p class="text-lg text-gray-500 mt-3 leading-relaxed group-hover:text-gray-700 transition-colors duration-200 max-w-lg">
        {{ $project['description'] }}
    </p>

    <!-- Buttons Container -->
    <div class="mt-6 flex flex-col sm:flex-row gap-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <!-- GitHub Button -->
        <a href="{{ $project['githubUrl'] }}" target="_blank"
            class="inline-flex items-center gap-2 text-sm font-medium rounded-lg px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            <i class="fab fa-github"></i>
            <span>View on GitHub</span>
        </a>

        <!-- Live Preview Button -->
        <button onclick="openFullscreenPreview('{{ $project['liveUrl'] }}')"
            class="inline-flex items-center gap-2 text-sm font-medium rounded-lg px-5 py-2.5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            <i class="fas fa-external-link-alt"></i>
            <span>Live Preview</span>
        </button>
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
        overlay.style.display = 'flex';
    }

    function closeFullscreenPreview() {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');
        iframe.src = ''; // Clear the iframe src to stop loading the page
        overlay.style.display = 'none';
    }
</script>

<!-- Styling for the Fullscreen Overlay and Animation -->
<style>
    /* Fullscreen Overlay Styles */
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

    /* Flip Animation Keyframes */
    @keyframes flip-horizontal-bottom {
      0% {
        transform: rotateX(0);
      }
      100% {
        transform: rotateX(-180deg);
      }
    }

    /* When group is hovered, target the image for flip animation */
    .group:hover .flip-horizontal-bottom-target {
        animation: flip-horizontal-bottom 0.4s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
    }
</style>
