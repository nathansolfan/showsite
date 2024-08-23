<x-layout>
    <style>
        /* Keyframes for the fill animation */
        @keyframes fill {
            0% { width: 0; }
            100% { width: var(--progress-width); }
        }

        /* Keyframes for the pulsing glow */
        @keyframes pulse {
            0% { box-shadow: 0 0 10px rgba(78, 84, 200, 0.5); }
            50% { box-shadow: 0 0 20px rgba(78, 84, 200, 0.7); }
            100% { box-shadow: 0 0 10px rgba(78, 84, 200, 0.5); }
        }

        /* Animation for the progress bar */
        .animate-fill {
            animation: fill 2s ease-in-out forwards, pulse 2s infinite;
            --progress-width: 0;
            background: linear-gradient(to right, #4e54c8, #8f94fb);
            border-radius: 9999px;
        }

        /* Matching progress width with inline style */
        .animate-fill[style*="width: 100%"] { --progress-width: 100%; }
        .animate-fill[style*="width: 90%"] { --progress-width: 90%; }
        .animate-fill[style*="width: 85%"] { --progress-width: 85%; }
        .animate-fill[style*="width: 80%"] { --progress-width: 80%; }
        .animate-fill[style*="width: 75%"] { --progress-width: 75%; }
        .animate-fill[style*="width: 70%"] { --progress-width: 70%; }

        /* Hover effect for progress bars */
        .animate-fill:hover {
            background: linear-gradient(to right, #8f94fb, #4e54c8);
            box-shadow: 0 0 15px rgba(78, 84, 200, 0.8);
        }
    </style>
    <!-- Hero Section -->
    <section id="hero" class="w-full bg-cover bg-center h-auto" style="background-image: url('your-image-url.jpg');">
        <div class="container mx-auto flex items-center justify-center py-20">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-black">Welcome to My Portfolio</h1>
                <p class="text-xl text-black-200 mt-4">I'm Nathan Ferreira, a passionate web developer skilled in both front-end and back-end tasks.</p>
                <a href="{{ url('/works')}}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">See My Work</a>
            </div>
        </div>
    </section>

    <!-- Skills/Technologies Section -->
    <section id="skills" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">Skills & Technologies</h2>
            <div class="mt-10 max-w-4xl mx-auto">

                <!-- Skill 1 -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700">HTML & CSS</h3>
                    <div class="w-full bg-gray-300 rounded-full h-4">
                        <div class="bg-blue-600 h-4 rounded-full animate-fill" style="width: 100%;"></div>
                    </div>
                </div>

                <!-- Skill 2 -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700">JavaScript</h3>
                    <div class="w-full bg-gray-300 rounded-full h-4">
                        <div class="bg-blue-600 h-4 rounded-full animate-fill" style="width: 85%;"></div>
                    </div>
                </div>

                <!-- Skill 3 -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700">Laravel/PHP</h3>
                    <div class="w-full bg-gray-300 rounded-full h-4">
                        <div class="bg-blue-600 h-4 rounded-full animate-fill" style="width: 90%;"></div>
                    </div>
                </div>

                <!-- Skill 4 -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700">React.js</h3>
                    <div class="w-full bg-gray-300 rounded-full h-4">
                        <div class="bg-blue-600 h-4 rounded-full animate-fill" style="width: 75%;"></div>
                    </div>
                </div>

                <!-- Skill 5 -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700">Node.js</h3>
                    <div class="w-full bg-gray-300 rounded-full h-4">
                        <div class="bg-blue-600 h-4 rounded-full animate-fill" style="width: 70%;"></div>
                    </div>
                </div>

                <!-- Skill 6 -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-700">MySQL & MongoDB</h3>
                    <div class="w-full bg-gray-300 rounded-full h-4">
                        <div class="bg-blue-600 h-4 rounded-full animate-fill" style="width: 80%;"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</x-layout>
