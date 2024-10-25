<x-layout>

    <!-- Hero Section -->
    <div class="relative bg-gray-900 text-white h-screen flex items-center justify-center overflow-hidden">
        <!-- Video Background -->
        <video class="absolute top-0 left-0 w-full h-full object-cover" src="/videos/video1.mp4" autoplay muted loop playsinline></video>


        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-bold">
                Nathan Ferreira
                <br>
                <span id="typewriter-text" class="text-blue-500"></span>
            </h1>
            <p class="text-xl mt-4">I'm a passionate web developer skilled in both front-end and back-end tasks.</p>

            <!-- Optional Button -->
            <a href="{{ url('/works') }}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700 transition duration-300">See My Work</a>

            <!-- Optional Social Media Links (similar to WordPress) -->
            <div class="mt-6 flex justify-center space-x-6">
                <a href="https://www.instagram.com/" class="hover:text-gray-300">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="https://www.linkedin.com/" class="hover:text-gray-300">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="mailto:email@email.com" class="hover:text-gray-300">
                    <i class="fas fa-envelope text-2xl"></i>
                </a>
            </div>
        </div>
    </div>

    @include('pages.skillsStatic')

    <div class="mb-8">
        @include('sections.dogApi')
    </div>

    {{-- <div class="mb-8">
        @include('sections.cards')
    </div> --}}

    {{-- <div class="mb-8">
        @include('pages.contact')
    </div> --}}



    <!-- Add your JavaScript at the end of the body to load after the page content -->
    <script type="module">
        // import { createDogApiProjectCard } from '/js/dogApi.js';

        document.addEventListener('DOMContentLoaded', function() {
            const texts = ["Web Developer", "Designer", "Freelancer", "Learner"];
            let count = 0;
            let index = 0;
            let currentText = '';
            let letter = '';

            function type() {
                if (count === texts.length) {
                    count = 0;
                }
                currentText = texts[count];
                letter = currentText.slice(0, ++index);
                document.getElementById('typewriter-text').textContent = letter;

                if (letter.length === currentText.length) {
                    count++;
                    index = 0;
                    setTimeout(type, 2000);
                } else {
                    setTimeout(type, 150);
                }
            }
            type();

            // Load Dog API Project
            // const container = document.getElementById('dog-api-container');
            // createDogApiProjectCard(container);  // Call the function after loading the script
        });
    </script>

    <style>
        #dog-api-container {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Align items vertically */
            flex-wrap: wrap;
            gap: 1rem; /* Spacing between items */
        }

        .project-item {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        #dog-api-project {
            padding-top: 3rem;
            padding-bottom: 3rem;
            text-align: center;
        }
    </style>
</x-layout>
