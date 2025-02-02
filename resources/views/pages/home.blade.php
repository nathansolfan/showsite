<x-layout>
    <!-- Hero Section -->
    <div class="relative bg-gray-900 text-white h-screen flex items-center justify-center overflow-hidden">
        <!-- Video Background with fallback poster -->
        <video id="background-video" class="absolute top-0 left-0 w-full h-full object-cover" src="/videos/video1.mp4" poster="/images/video-poster.jpg" autoplay muted loop playsinline></video>

        <!-- Video Controls -->
        <button id="toggle-video" aria-label="Toggle Video Playback" class="absolute z-20 bottom-4 right-4 bg-white text-gray-900 px-3 py-2 rounded-lg shadow hover:bg-gray-200 transition">
            Pause Video
        </button>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black opacity-60"></div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-bold">
                Nathan Ferreira
                <br>
                <span id="typewriter-text" class="text-blue-500"></span>
            </h1>
            <p class="text-xl mt-4">I'm a passionate web developer skilled in both front-end and back-end tasks.</p>

            <!-- Call-to-Action Button -->
            <a href="{{ url('/works') }}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700 transition duration-300">See My Work</a>

            <!-- Social Media Links -->
            <div class="mt-6 flex justify-center space-x-6">
                <a href="https://www.instagram.com/nathancacun/" aria-label="Instagram" class="hover:text-gray-300">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" aria-label="LinkedIn" class="hover:text-gray-300">
                    <i class="fab fa-linkedin text-2xl"></i>
                </a>
                <a href="mailto:email@email.com" aria-label="Email" class="hover:text-gray-300">
                    <i class="fas fa-envelope text-2xl"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Additional Sections -->
    @include('pages.skillsStatic')
    <div class="mb-8">
        @include('sections.dogApi')
    </div>
    <div class="mb-8">
        @include('sections.driverApp')
    </div>
    <div class="mb-8">
        @include('sections.financeApp')
    </div>

    <!-- JavaScript for Video Toggle, Draggable Button, and Typewriter Effect -->
    <script type="module">
        const video = document.getElementById('background-video');
        const toggleButton = document.getElementById('toggle-video');

        toggleButton.addEventListener("click", () => {
            if (video.paused) {
                video.play();
                toggleButton.textContent = 'Pause Video';
            } else {
                video.pause();
                toggleButton.textContent = 'Play Video';
            }
        });

        document.addEventListener("mouseup", () => {
            isDragging = false;
            toggleButton.style.cursor = "grab";
        });

        // Typewriter effect
        document.addEventListener("DOMContentLoaded", () => {
            const texts = ["Web Developer", "Designer", "Freelancer", "Learner"];
            let count = 0;
            let index = 0;
            function type() {
                if (count === texts.length) count = 0;
                const currentText = texts[count];
                const letter = currentText.slice(0, ++index);
                document.getElementById("typewriter-text").textContent = letter;

                if (letter.length === currentText.length) {
                    count++;
                    index = 0;
                    setTimeout(type, 2000);
                } else {
                    setTimeout(type, 150);
                }
            }
            type();
        });
    </script>

    <style>
        /* Video toggle button size and icon styles */
        #toggle-video {
            width: 56px; /* Button width */
            height: 56px; /* Button height */
        }

        #toggle-icon {
            font-size: 20px; /* Icon size */
        }

        /* Optional styles for sections */
        #dog-api-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
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
