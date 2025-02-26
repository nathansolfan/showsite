<x-layout>
    <div class="relative h-[400px] md:h-[700px] lg:h-[800px] flex items-center justify-center overflow-hidden bg-cover bg-center"
        style="background-image: url('{{ asset('images/bgimage1.jpg') }}');">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Hero Content -->
        <div class="relative z-10 text-center px-6 max-w-4xl">
            <h1 class="text-5xl text-white md:text-7xl font-extrabold leading-tight" data-aos="fade-down" data-aos-duration="800">
                Nathan Ferreira
                <br>
                <span id="typewriter-text" class="text-blue-400"></span>
            </h1>
            <p class="text-xl mt-4 text-white max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400" data-aos-duration="800">
                Full-Stack Web Developer | Crafting Clean, Scalable, and High-Performance Applications.
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="mt-8 flex flex-wrap justify-center gap-6" data-aos="zoom-in" data-aos-delay="600">
                <a href="{{ url('/works') }}"
                    class="bg-black text-white rounded-lg px-8 py-4 text-lg font-semibold transition-all hover:bg-gray-800 hover:shadow-lg">
                    See My Work
                </a>

                <a href="{{ url('/contact') }}"
                    class="bg-white text-black border border-gray-900 rounded-lg px-8 py-4 text-lg font-semibold transition-all hover:bg-gray-300 hover:shadow-lg">
                    Contact Me
                </a>
            </div>

            <!-- Social Media Links -->
            <div class="mt-6 flex justify-center space-x-6" data-aos="fade-up" data-aos-delay="800">
                <a href="https://www.instagram.com/nathancacun/" aria-label="Instagram"
                    class="text-white hover:text-gray-300 transition duration-200">
                    <i class="fab fa-instagram text-3xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" aria-label="LinkedIn"
                    class="text-white hover:text-gray-300 transition duration-200">
                    <i class="fab fa-linkedin text-3xl"></i>
                </a>
                <a href="mailto:email@email.com" aria-label="Email" class="text-white hover:text-gray-300 transition duration-200">
                    <i class="fas fa-envelope text-3xl"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="mt-12" data-aos="fade-up" data-aos-duration="1000">
        @include('pages.skillsStatic')
    </div>

    <!-- Projects Section -->
    <section id="projects" class="mt-20">
        <div class="container mx-auto px-4 mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900" data-aos="fade-up">
                Featured Projects
            </h2>
            <p class="text-xl text-gray-600 text-center mt-4 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Here's a selection of my latest work. Each project represents different skills and technologies.
            </p>
        </div>

        <div class="flex flex-col space-y-8">
            <!-- First Project Card -->
            <div class="min-h-screen w-full flex items-center" data-aos="fade-right" data-aos-duration="800" data-aos-offset="300">
                <div class="flex flex-col justify-between w-[90%] max-w-7xl h-auto mx-auto rounded-lg shadow-lg">
                    @include('sections.driverApp')
                </div>
            </div>

            <!-- Second Project Card -->
            <div class="min-h-screen w-full flex items-center" data-aos="fade-left" data-aos-duration="800" data-aos-offset="300">
                <div class="flex flex-col justify-between w-[90%] max-w-7xl h-auto mx-auto rounded-lg shadow-lg">
                    @include('sections.financeApp')
                </div>
            </div>

            <!-- Third Project Card (if needed) -->
            <div class="min-h-screen w-full flex items-center" data-aos="fade-up" data-aos-duration="800" data-aos-offset="300">
                <div class="flex flex-col justify-between w-[90%] max-w-7xl h-auto mx-auto rounded-lg shadow-lg">
                    @include('sections.box2')
                </div>
            </div>
        </div>

        <!-- View All Projects Button -->
        <div class="mt-12 text-center" data-aos="zoom-in" data-aos-offset="100">
            <a href="{{ url('/projects') }}"
                class="bg-blue-600 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-all hover:bg-blue-700 shadow-md hover:shadow-lg inline-flex items-center">
                <span>View All Projects</span>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Testimonial or Additional Content Section -->
    <section class="py-20 bg-gray-50 mt-20">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Let's Build Something Amazing Together</h2>
                <p class="text-lg text-gray-600 mb-8">
                    I'm always open to discussing new projects, creative ideas or opportunities to be part of your vision.
                </p>
                <a href="{{ url('/contact') }}"
                   class="bg-black text-white rounded-lg px-8 py-4 text-lg font-semibold transition-all hover:bg-gray-800 hover:shadow-lg inline-block">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

    <!-- Load Home-specific Scripts -->
    @vite(['resources/js/home.js'])
    @vite(['resources/js/projectAnimation.js'])
    @vite(['resources/js/textAnimation.js'])
</x-layout>
