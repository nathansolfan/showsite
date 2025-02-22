<x-layout>
    {{-- <!-- Video Background -->
        <div>
            <video id="background-video" class="absolute top-0 left-0 w-full h-full object-cover hidden sm:block"
                src="/videos/video1.mp4" poster="/images/video-poster.jpg" autoplay muted loop playsinline>
            </video>
            <div class="absolute inset-0 bg-gray-900 sm:hidden">
                <img src="/images/video-poster.jpg" alt="Video Fallback" class="w-full h-full object-cover" />
            </div>
        </div> --}}

    <!-- Draggable Video Toggle Button -->
    {{-- <button id="toggle-video" aria-label="Toggle Video Playback"
            class="absolute z-20 bottom-6 right-6 w-14 h-14 bg-white text-gray-900 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-200 transition-transform duration-300 ease-in-out cursor-grab">
            <i id="toggle-icon" class="fas fa-pause text-xl"></i>
        </button> --}}



    <div class="relative h-[400px] md:h-[700px] lg:h-[800px] flex items-center justify-center overflow-hidden bg-cover bg-center"
        style="background-image: url('{{ asset('images/bgimage1.jpg') }}');">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center px-6 max-w-4xl">
            <h1 class="text-5xl text-white md:text-7xl font-extrabold leading-tight animate-fadeIn">
                Nathan Ferreira
                <br>
                <span id="typewriter-text" class="text-blue-400"></span>
            </h1>
            <p class="text-xl mt-4 text-white max-w-3xl mx-auto animate-fadeInSlow">
                Full-Stack Web Developer | Crafting Clean, Scalable, and High-Performance Applications.
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="mt-8 flex flex-wrap justify-center gap-6 animate-fadeIn">
                <a href="{{ url('/works') }}"
                    class="bg-black text-white rounded-lg px-8 py-4 text-lg font-semibold transition-all hover:bg-gray-800 hover: shadow-lg">
                    See My Work
                </a>

                <a href="{{ url('/contact') }}"
                    class="bg-white text-black border border-gray-900 rounded-lg px-8 py-4 text-lg font-semibold transition-all hover:bg-gray-300 hover:shadow-lg">
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
                <a href="mailto:email@email.com" aria-label="Email" class="hover:text-gray-300 transition duration-200">
                    <i class="fas fa-envelope text-3xl"></i>
                </a>
            </div>
        </div>
    </div>




    <!-- Skills Section -->
    <div class="mt-12 ">
        @include('pages.skillsStatic')
    </div>



 <!-- Projects Section -->
 <section id="projects" class="mt-20">
    <!-- Pinned First Project -->
    {{-- <div class="first-project h-screen w-full flex items-center justify-center project-box bg-red-300 rounded-xl">
        @include('sections.dogApi')
    </div> --}}

    <!-- Horizontal Scroll for Remaining Projects -->
    <section class="horizontal-wrapper">
        <div class="horizontal-container">

            {{-- <div class="">
                @include('sections.dogApi3')
            </div> --}}
            {{-- <div class="panel h-screen w-full flex items-center justify-center project-box bg-green-300"> --}}
                <div>
                @include('sections.driverApp')
            </div>
            <div class="">
                @include('sections.financeApp')
            </div>
            {{-- <div class="">
                @include('sections.box1')
            </div> --}}
            <div class="">
                @include('sections.box2')
            </div>
            {{-- <div class="">
                @include('sections.box3')
            </div> --}}
        </div>
    </section>
</section>





    {{-- <!-- Projects Section -->
    <div class="relative bg-fixed bg-cover bg-center"
        style="background-image: url('{{ asset('images/cardbgimage.webp') }}');">
        <div class="bg-gray-900/70 py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-base font-semibold text-indigo-400">My Projects</h2>
                <p
                    class="mx-auto mt-2 mb-12 max-w-lg text-center text-4xl font-semibold tracking-tight text-white sm:text-5xl">
                    A selection of my latest work
                </p>

                <div class="h-full flex flex-col justify-center items-center gap-12">
                    @include('sections.dogApi')
                    @include('sections.newDogApi')
                    @include('sections.driverApp')
                    @include('sections.financeApp')
                </div>

                <!-- View All Projects Button -->
                <div class="mt-12 text-center">
                    <a href="{{ url('/projects') }}"
                        class="bg-indigo-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all hover:bg-indigo-700 shadow-md hover:shadow-lg">
                        View All Projects
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Load Home-specific Scripts -->
    @vite(['resources/js/home.js'])
    @vite(['resources/js/projectAnimation.js'])
    @vite(['resources/js/textAnimation.js'])






</x-layout>
