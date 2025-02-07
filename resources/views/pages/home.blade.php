<x-layout>
    <!-- Hero Section -->
    <div class="relative bg-gray-900 text-white h-[400px] md:h-[700px] lg:h-[700px] flex items-center justify-center overflow-hidden">

    <!-- Video Background with Smooth Transition -->
    <div>
    <video
    id="background-video"
    class="absolute top-0 left-0 w-full h-full object-cover transition-opacity duration-500"
    src="/videos/video1.mp4"
    poster="/images/video-poster.jpg"
    autoplay muted loop playsinline></video>

    <!-- Overlay for Better Readability -->
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/40 to-transparent"></div>
</div>

    <!-- Draggable Video Toggle Button -->
    <button id="toggle-video" aria-label="Toggle Video Playback"
        class="absolute z-20 bottom-6 right-6 w-16 h-16 bg-white text-gray-900 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-200 transition-transform duration-300 ease-in-out">
        <i id="toggle-icon" class="fas fa-pause text-xl"></i>
    </button>

    <!-- Hero Content -->
    <div class="relative z-10 text-center px-6">
        <h1 class="text-5xl md:text-7xl font-extrabold leading-tight animate-fadeIn">
            Nathan Ferreira
            <br>
            <span id="typewriter-text" class="text-blue-400"></span>
        </h1>
        <p class="text-xl mt-4 text-gray-300 max-w-3xl mx-auto animate-fadeInSlow">
            Full-Stack Web Developer | Crafting Clean, Scalable, and High-Performance Applications.
        </p>

        <!-- Call-to-Action Buttons -->
        <div class="mt-8 flex flex-wrap justify-center gap-4 animate-fadeIn">
            <a href="{{ url('/works') }}"
            class="bg-transparent border-2 border-black text-white rounded-lg px-8 py-4 text-lg font-semibold transition-all hover:border-gray-400 hover:text-gray-300 active:translate-y-[1px]">
            See My Work
</a>
            <a href="{{ url('/contact') }}"
            class="bg-transparent border-2 border-black text-white rounded-lg px-8 py-4 text-lg font-semibold transition-all hover:border-gray-400 hover:text-gray-300 active:translate-y-[1px]">
            Contact Me
            </a>
        </div>

        <!-- Social Media Links -->
        <div class="mt-6 flex justify-center space-x-6">
            <a href="https://www.instagram.com/nathancacun/" aria-label="Instagram"
                class="hover:text-gray-300 transition duration-200">
                <i class="fab fa-instagram text-3xl"></i>
            </a>
            <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" aria-label="LinkedIn"
                class="hover:text-gray-300 transition duration-200">
                <i class="fab fa-linkedin text-3xl"></i>
            </a>
            <a href="mailto:email@email.com" aria-label="Email"
                class="hover:text-gray-300 transition duration-200">
                <i class="fas fa-envelope text-3xl"></i>
            </a>
        </div>
    </div>

</div>



    <!-- Additional Sections -->
    <div class="mb-24 h-[75vh] bg-gray-200 flex items-center justify-center">
        @include('pages.skillsStatic')
    </div>
    <div class="mt-24 mb-24">
        @include('sections.dogApi')
    </div>
    <div class="mt-24 mb-24">
        @include('sections.newDogApi')
    </div>
    <div class="mt-24 mb-24">
        @include('sections.driverApp')
    </div>
    <div class="mt-24 mb-24">
        @include('sections.financeApp')
    </div>

    <!-- JavaScript for Video Toggle, Draggable Button, and Typewriter Effect -->
    <script type="module">
        // Video toggle functionality
        const video = document.getElementById("background-video");
        const toggleButton = document.getElementById("toggle-video");
        const toggleIcon = document.getElementById("toggle-icon");

        toggleButton.addEventListener("click", () => {
            if (video.paused) {
                video.play();
                toggleIcon.classList.remove("fa-play");
                toggleIcon.classList.add("fa-pause");
            } else {
                video.pause();
                toggleIcon.classList.remove("fa-pause");
                toggleIcon.classList.add("fa-play");
            }
        });

        // Make the toggle button draggable
        let isDragging = false;
        let offsetX = 0;
        let offsetY = 0;

        toggleButton.addEventListener("mousedown", (e) => {
            isDragging = true;
            const rect = toggleButton.getBoundingClientRect();
            offsetX = e.clientX - rect.left;
            offsetY = e.clientY - rect.top;
            toggleButton.style.cursor = "grabbing";
        });

        document.addEventListener("mousemove", (e) => {
            if (isDragging) {
                toggleButton.style.position = "absolute";
                toggleButton.style.left = `${e.clientX - offsetX}px`;
                toggleButton.style.top = `${e.clientY - offsetY}px`;
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
