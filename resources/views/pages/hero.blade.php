<x-layout>

{{-- resources/views/pages/hero.blade.php --}}

<div class="hero bg-cover bg-center h-screen relative" style="background-image: url('{{ asset('images/hero-background.jpg') }}');">
    <div class="container mx-auto flex flex-col items-center justify-center h-full">
        <h1 class="text-5xl md:text-7xl font-bold text-white text-center">Welcome to My Portfolio</h1>
        <p class="text-xl md:text-2xl text-gray-300 mt-4 text-center">I'm Nathan Ferreira, a passionate web developer skilled in both front-end and back-end tasks.</p>
        <a href="{{ url('/works') }}" class="mt-8 inline-block bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">See My Work</a>
    </div>
</div>
</x-layout>
