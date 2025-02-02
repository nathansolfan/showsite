@php
    // Define project data directly in the Blade template
    $project = [
        'name' => 'DogAPIGenerator',
        'description' => 'A random dog image generator using an API to fetch adorable dog photos and information.',
        'githubUrl' => 'https://github.com/nathansolfan/DogAPIGenerator',
        'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
    ];
@endphp

<div
    class="project-item group relative flex flex-col justify-center items-center text-center bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-transform transform hover:-translate-y-2 duration-300 ease-in-out border border-gray-200 mb-8 min-h-[520px] overflow-hidden">
    <!-- Project Image -->
    <div class="w-full h-52 overflow-hidden rounded-xl">
        <img src="{{ asset('images/dogsAI.jpg') }}" alt="Dog API Project"
            class="w-full h-full object-cover transition-transform duration-500 transform group-hover:scale-105">
    </div>

    <!-- Project Title -->
    <h3 class="text-3xl font-bold text-gray-900 mt-5 group-hover:text-blue-600 transition-colors duration-200">
        {{ $project['name'] }}
    </h3>

    <!-- Description -->
    <p
        class="text-lg text-gray-500 mt-3 leading-relaxed group-hover:text-gray-700 transition-colors duration-200 max-w-lg">
        {{ $project['description'] }}
    </p>

    <!-- Buttons Container -->
    <div class="mt-6 flex space-x-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
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
