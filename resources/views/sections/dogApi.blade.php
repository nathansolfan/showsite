@php
    // Define project data directly in the Blade template
    $project = [
        'name' => 'DogAPIGenerator',
        'description' => 'A random dog image generator using an API to fetch adorable dog photos and information.',
        'githubUrl' => 'https://github.com/nathansolfan/DogAPIGenerator',
        'liveUrl' => 'https://dog-photo-app-one.vercel.app/',
    ];
@endphp

<div class="project-item group relative flex flex-col justify-center items-center text-center bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition-transform transform hover:-translate-y-1 duration-300 ease-in-out border border-gray-200 mb-8 min-h-[500px] overflow-hidden">
    <!-- Project Image -->
    <div class="w-full h-48 overflow-hidden rounded-t-xl">
        <img src=" {{ asset('images/dogscreenshot.jpg')}} " alt="Dog API Project" class="w-full h-full object-cover transition-transform duration-300 transform group-hover:scale-110">
    </div>

    <!-- Project Title and Description -->
    <h3 class="text-3xl font-semibold text-gray-900 mt-4 group-hover:text-blue-500">{{ $project['name'] }}</h3>
    <p class="text-base text-gray-500 mt-4 leading-relaxed group-hover:text-gray-700">{{ $project['description'] }}</p>

    <!-- Buttons Container -->
    <div class="mt-6 flex space-x-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <!-- GitHub Button -->
        <a href="{{ $project['githubUrl'] }}" target="_blank" class="inline-block bg-blue-500 text-white py-3 px-6 rounded-lg font-medium shadow hover:bg-blue-600 hover:shadow-md transition duration-200 ease-in-out">
            View on GitHub
        </a>

        <!-- Live Preview Button -->
        <button class="inline-block bg-gradient-to-r from-green-400 to-green-500 text-white py-3 px-6 rounded-lg font-medium shadow hover:from-green-500 hover:to-green-600 hover:shadow-md transition duration-200 ease-in-out" onclick="openFullscreenPreview('{{ $project['liveUrl'] }}')">
            Live Preview
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
