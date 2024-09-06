@php
    // Define project data directly in the Blade template
    $project = [
        'name' => 'DogAPIGenerator',
        'description' => 'A random dog image generator using an API to fetch adorable dog photos and information.',
        'githubUrl' => 'https://github.com/nathansolfan/DogAPIGenerator',
        'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
    ];
@endphp

<!-- Dog API Project Card -->
<div class="project-item text-center bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
    <h3 class="text-2xl font-bold text-gray-800 mt-4">{{ $project['name'] }}</h3>
    <p class="mt-2 text-gray-600">{{ $project['description'] }}</p>
    <a href="{{ $project['githubUrl'] }}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700">View on GitHub</a>
    <button class="mt-4 ml-4 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700" onclick="openFullscreenPreview('{{ $project['liveUrl'] }}')">Live Preview</button>
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
