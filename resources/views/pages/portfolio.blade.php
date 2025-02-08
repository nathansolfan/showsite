<x-layout>

    <div class="bg-gradient-to-b from-green-100 to-white py-16 px-6">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between space-y-10 md:space-y-0">

            <!-- Text Section -->
            <div class="max-w-lg text-center md:text-left">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">
                    Browse our latest products
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    Discover a selection of high-quality items curated just for you.
                </p>
                <a href="{{ url('/shop') }}" class="bg-black text-white px-6 py-3 rounded-md shadow-md hover:bg-gray-800 transition">
                    Shop Now
                </a>
            </div>

            <!-- Image Section -->
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('images/bgimagecake.jpg') }}" alt="Cake Image" class="w-full max-w-md rounded-lg shadow-lg">
            </div>

        </div>
    </div>

</x-layout>
