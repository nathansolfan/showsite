<x-layout>

    <div class="bg-gradient-to-b from-green-100 to-white min-h-screen py-16 px-6">
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

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            {{-- Product 1 --}}
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="flex justify-center mb-4">
                    {{-- SVG T-Shirt --}}
                    <svg width="100" height="100" viewBox="0 0 24 24" fill="#F59E0B" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L15.09 4H20V10H18V22H6V10H4V4H9L12 2Z" stroke="black" stroke-width="1.5"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold">Example product title</h3>
                <p class="text-gray-600 mt-1">£19.99 GBP</p>
            </div>

            {{-- Product 2 --}}
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="flex justify-center mb-4">
                    {{-- SVG T-Shirt --}}
                    <svg width="100" height="100" viewBox="0 0 24 24" fill="#374151" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L15.09 4H20V10H18V22H6V10H4V4H9L12 2Z" stroke="black" stroke-width="1.5"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold">Example product title</h3>
                <p class="text-gray-600 mt-1">£19.99 GBP</p>
            </div>

            {{-- Product 3 --}}
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="flex justify-center mb-4">
                    {{-- SVG T-Shirt --}}
                    <svg width="100" height="100" viewBox="0 0 24 24" fill="#059669" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L15.09 4H20V10H18V22H6V10H4V4H9L12 2Z" stroke="black" stroke-width="1.5"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold">Example product title</h3>
                <p class="text-gray-600 mt-1">£19.99 GBP</p>
            </div>

            {{-- Product 4 --}}
            <div class="bg-white p-6 rounded-lg shadow-md text-center">
                <div class="flex justify-center mb-4">
                    {{-- SVG T-Shirt --}}
                    <svg width="100" height="100" viewBox="0 0 24 24" fill="#DC2626" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L15.09 4H20V10H18V22H6V10H4V4H9L12 2Z" stroke="black" stroke-width="1.5"/>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold">Example product title</h3>
                <p class="text-gray-600 mt-1">£19.99 GBP</p>
            </div>
        </div>
    </div>

        </div>
    </div>

</x-layout>
