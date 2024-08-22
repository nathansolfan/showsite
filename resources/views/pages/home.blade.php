<x-layout>
    <!-- Hero Section -->
    <section id="hero" class="w-full bg-cover bg-center min-h-screen" style="background-image: url('your-image-url.jpg');">
        <div class="container mx-auto h-full flex items-center justify-center">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-black">Welcome to My Portfolio</h1>
                <p class="text-xl text-black-200 mt-4">I'm Nathan Ferreira, a passionate web developer skilled in both front-end and back-end tasks.</p>
                <a href=" {{ url('/works')}}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">See My Work</a>
            </div>
        </div>
    </section>


</x-layout>
