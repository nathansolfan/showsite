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


    <!-- Animated Square Section -->
    <div class="absolute top-0 right-0 w-full h-full pointer-events-none z-50">
        <div id="animated-square" class="w-16 h-16 bg-blue-500 fixed top-20 right-10"></div>
    </div>


    <!-- Skills Section -->
    <div class="mt-12 ">
        @include('pages.skillsStatic')
    </div>

 <!-- BIG LONG TEXT Section -->
<div class="scroll-text-container overflow-hidden w-full py-6 bg-gray-100 text-right mb-32">
    <p class="scroll-text whitespace-nowrap text-9xl font-bold">Some projects...</p>
</div>







    <!-- Projects Section -->
    <div class="mt-20 w-full min-h-screen flex flex-col justify-start items-center">
        <div class="h-screen w-full flex items-center justify-center project-box bg-red-500  rounded-xl">
            @include('sections.dogApi')
        </div>

        <div class="h-screen w-full flex items-center justify-center project-box bg-red-500">
            @include('sections.dogApi2')
        </div>

        <div class="h-screen w-full flex items-center justify-center project-box bg-blue-500">
            @include('sections.newDogApi')
        </div>

<svg version="1.0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve" fill="#000000">
  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
  <g id="SVGRepo_iconCarrier">
    <g id="Guides">
      <g id="_x32_0_px_2_"></g>
      <g id="_x32_0px"></g>
      <g id="_x34_0px"></g>
      <g id="_x34_4_px"></g>
      <g id="_x34_8px">
        <g id="_x31_6px"></g>
        <g id="square_4px">
          <g id="_x32_8_px">
            <g id="square_4px_2_"></g>
            <g id="square_4px_3_"></g>
            <g id="square_4px_1_"></g>
            <g id="_x32_4_px_2_"></g>
            <g id="_x31_2_px"></g>
          </g>
        </g>
      </g>
    </g>
    <g id="Icons"></g>
    <g id="_x32_0_px"></g>
    <g id="square_6px">
      <g id="_x31_2_PX"></g>
    </g>
    <g id="_x33_6_px">
      <g id="_x33_2_px">
        <g id="_x32_8_px_1_">
          <g id="square_6px_1_"></g>
          <g id="_x32_0_px_1_">
            <g id="_x31_2_PX_2_"></g>
            <g id="_x34_8_px">
              <g id="_x32_4_px"></g>
              <g id="_x32_4_px_1_"></g>
            </g>
          </g>
        </g>
      </g>
    </g>
    <g id="_x32_0_px_3_"></g>
    <g id="_x32_0_px_4_"></g>
    <g id="New_Symbol_8">
      <g id="_x32_4_px_3_"></g>
    </g>
    <g id="Artboard"></g>
    <g id="Free_Icons">
      <g>
        <line style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="7.5" y1="4" x2="7.5" y2="5"></line>
        <polyline style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="14,8.5 18.5,18 18.5,23.5"></polyline>
        <polyline style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="10,5 11.5,8.5 17,8.5 13,0.5 6.5,0.5 4.5,4.5 1.5,5.5 1.5,9.5 5.5,9.5 7.5,15.5 5,20.5"></polyline>
        <polyline style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="14.5,16.5 10,16.5 8,20.5 3.5,20.5 2.5,23.5 18.5,23.5"></polyline>
        <polyline style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="18.5,23.5 22.5,19.5 22.5,16 20.5,12"></polyline>
      </g>
    </g>
    <g id="_x32_0_px_3_"></g>
    <g id="_x32_0_px_4_"></g>
    <g id="New_Symbol_8">
      <g id="_x32_4_px_3_"></g>
    </g>
  </g>
  <g id="Artboard"></g>
  <g id="Free_Icons">
    <g>
      <line style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="7.5" y1="4" x2="7.5" y2="5"></line>
      <polyline style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="14,8.5 18.5,18 18.5,23.5"></polyline>
      <polyline style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="10,5 11.5,8.5 17,8.5 13,0.5 6.5,0.5 4.5,4.5 1.5,5.5 1.5,9.5 5.5,9.5 7.5,15.5 5,20.5"></polyline>
      <polyline style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="14.5,16.5 10,16.5 8,20.5 3.5,20.5 2.5,23.5 18.5,23.5"></polyline>
      <polyline style="fill:none;stroke:#000000;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="18.5,23.5 22.5,19.5 22.5,16 20.5,12"></polyline>
    </g>
  </g>
</svg>


        <div class="h-screen w-full flex items-center justify-center project-box bg-green-500">
            @include('sections.driverApp')
        </div>

        <div class="h-screen w-full flex items-center justify-center project-box bg-yellow-500">
            @include('sections.financeApp')
        </div>

        <div class="h-screen w-full flex items-center justify-center project-box bg-purple-500">
            @include('sections.box1')
        </div>

        <div class="h-screen w-full flex items-center justify-center project-box bg-pink-500">
            @include('sections.box2')
        </div>

        <div class="h-screen w-full flex items-center justify-center project-box bg-indigo-500">
            @include('sections.box3')
        </div>
    </div>






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




    {{-- <script>
        gsap.registerPlugin(ScrollTrigger);

        gsap.to("#animated-square", {
            scrollTrigger: {
                trigger: "body", // The whole page
                start: "top top", // Start when the page loads
                end: "bottom bottom", // End when you reach the bottom
                scrub: true, // Smooth scrolling effect
                pin: false, // Don't stick it
            },
            y: window.innerHeight - 100, // Move down the full screen height
            x: window.innerWidth - 100, // Move right as well
            rotation: 360, // Rotate while moving
            scale: 1.5, // Scale up
            backgroundColor: "#4F46E5", // Change color
            ease: "power2.out",
        });
    </script> --}}


</x-layout>
