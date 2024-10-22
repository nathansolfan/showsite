<x-layout>

    <!-- Hero Section -->
    <div class="hero bg-cover bg-center h-screen flex items-center justify-center">
        <div class="text-center">
            <h1 class="text-5xl md:text-7xl font-bold text-gray">
                Nathan Ferreira
                <br>
                <span id="typewriter-text" class="text-blue-500 "></span>
            </h1>
            <p class="text-xl text-black-200 mt-4">I'm a passionate webb developer skilled in both front-end and back-end tasks.</p>
            {{-- <a href="{{ url('/works') }}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">See My Work</a> --}}
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
