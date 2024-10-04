@php
    // Example product data
    $products = [
        [
            'name' => 'Aloe Vera Moisturizer',
            'description' => 'Hydrates and nourishes your skin with pure aloe vera.',
            'imageUrl' => '/images/aloe-vera-moisturizer.jpg',
            'price' => '$25',
            'category' => 'Skincare',
        ],
        [
            'name' => 'Coconut Hair Mask',
            'description' => 'Deeply conditions and repairs damaged hair.',
            'imageUrl' => '/images/coconut-hair-mask.jpg',
            'price' => '$30',
            'category' => 'Haircare',
        ],
        // Add more products as needed
    ];
@endphp

<x-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-400 to-blue-500 text-white py-20">
        <div class="container mx-auto text-center px-4">
            <h1 class="text-5xl md:text-7xl font-bold">Tropical Beauty</h1>
            <p class="mt-4 text-xl">Discover the natural beauty secrets from Brazil</p>
            <a href="#products" class="mt-8 inline-block bg-white text-green-500 py-3 px-6 rounded-full font-semibold hover:bg-gray-100 transition duration-300">Shop Now</a>
        </div>
    </section>

    <!-- Product Categories -->
    <section id="categories" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center mb-12">Our Categories</h2>
            <div class="flex flex-wrap justify-center space-x-4">
                <a href="#products" class="bg-green-500 text-white py-2 px-4 rounded-full hover:bg-green-600 transition duration-200">Skincare</a>
                <a href="#products" class="bg-blue-500 text-white py-2 px-4 rounded-full hover:bg-blue-600 transition duration-200">Haircare</a>
                <a href="#products" class="bg-pink-500 text-white py-2 px-4 rounded-full hover:bg-pink-600 transition duration-200">Makeup</a>
                <a href="#products" class="bg-yellow-500 text-white py-2 px-4 rounded-full hover:bg-yellow-600 transition duration-200">Body Care</a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section id="products" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center mb-12">Our Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($products as $product)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 relative">
                        <img src="{{ $product['imageUrl'] }}" alt="{{ $product['name'] }}" class="w-full h-56 object-cover">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold text-gray-800">{{ $product['name'] }}</h3>
                            <p class="mt-2 text-gray-600">{{ $product['description'] }}</p>
                            <p class="mt-4 text-xl font-bold text-green-500">{{ $product['price'] }}</p>
                            <button onclick="openProductModal('{{ $product['name'] }}', '{{ $product['description'] }}', '{{ $product['imageUrl'] }}', '{{ $product['price'] }}')" class="mt-4 w-full bg-green-500 text-white py-2 px-4 rounded-lg font-medium hover:bg-green-600 transition duration-200">View Details</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Product Modal -->
    <div id="product-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
        <div class="bg-white rounded-lg overflow-hidden w-11/12 md:w-2/3 lg:w-1/2">
            <div class="flex justify-end p-4">
                <button onclick="closeProductModal()" class="text-gray-500 hover:text-gray-700">&times;</button>
            </div>
            <div class="p-6">
                <img id="modal-image" src="" alt="" class="w-full h-64 object-cover rounded-md">
                <h3 id="modal-name" class="text-2xl font-semibold text-gray-800 mt-4"></h3>
                <p id="modal-description" class="mt-2 text-gray-600"></p>
                <p id="modal-price" class="mt-4 text-xl font-bold text-green-500"></p>
                <button class="mt-6 w-full bg-green-500 text-white py-2 px-4 rounded-lg font-medium hover:bg-green-600 transition duration-200">Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="py-20 bg-gray-100">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <img src="/images/about-us.jpg" alt="About Tropical Beauty" class="w-full md:w-1/2 rounded-lg shadow-lg">
            <div class="mt-8 md:mt-0 md:ml-12">
                <h2 class="text-3xl font-semibold text-gray-800">About Us</h2>
                <p class="mt-4 text-gray-600">At Tropical Beauty, we are passionate about bringing you the finest beauty products sourced directly from the lush landscapes of Brazil. Our mission is to enhance your natural beauty with products crafted from the highest quality ingredients.</p>
            </div>
        </div>
    </section>

    <!-- Customer Testimonials -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-semibold text-center mb-12">What Our Customers Say</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-gray-600">"Tropical Beauty's Aloe Vera Moisturizer has transformed my skincare routine. My skin feels hydrated and refreshed all day long!"</p>
                    <h4 class="mt-4 text-xl font-semibold text-gray-800">- Maria Silva</h4>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-gray-600">"The Coconut Hair Mask is a game-changer! My hair is softer, shinier, and healthier than ever."</p>
                    <h4 class="mt-4 text-xl font-semibold text-gray-800">- João Pereira</h4>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <p class="text-gray-600">"I love the natural ingredients and the amazing results. Tropical Beauty products are now a staple in my beauty routine."</p>
                    <h4 class="mt-4 text-xl font-semibold text-gray-800">- Ana Costa</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Subscription -->
<section class="py-20 bg-gradient-to-r from-green-400 to-blue-500 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-semibold">Stay Updated</h2>
        <p class="mt-4">Subscribe to our newsletter to receive the latest updates and exclusive offers.</p>
        <form class="mt-8 flex flex-col sm:flex-row justify-center items-center">
            <!-- Email Input Field -->
            <input
                type="email"
                placeholder="Enter your email"
                class="w-full sm:w-1/3 py-4 px-6 bg-white text-gray-800 rounded-l-lg focus:outline-none"
                required
            >
            <!-- Subscribe Button -->
            <button
                type="submit"
                class="mt-4 sm:mt-0 sm:ml-2 bg-white text-green-500 py-2.5 px-2 rounded-r-lg font-semibold hover:bg-gray-100 transition duration-300 flex items-center justify-center"
            >
                Subscribe
            </button>
        </form>

        <!-- Success Message -->
        @if(session('success'))
            <div class="mt-4 text-green-200">
                {{ session('success') }}
            </div>
        @endif

        <!-- Error Message -->
        @if($errors->any())
            <div class="mt-4 text-red-200">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</section>


    {{-- <!-- Footer -->
    <footer class="bg-gray-800 text-gray-200 py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <p>&copy; {{ date('Y') }} Tropical Beauty. All rights reserved.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="hover:text-white">Facebook</a>
                <a href="#" class="hover:text-white">Instagram</a>
                <a href="#" class="hover:text-white">Twitter</a>
            </div>
        </div>
    </footer> --}}

    <!-- JavaScript for Modal Functionality -->
    <script>
        function openProductModal(name, description, imageUrl, price) {
            document.getElementById('modal-image').src = imageUrl;
            document.getElementById('modal-name').textContent = name;
            document.getElementById('modal-description').textContent = description;
            document.getElementById('modal-price').textContent = price;
            document.getElementById('product-modal').classList.remove('hidden');
        }

        function closeProductModal() {
            document.getElementById('product-modal').classList.add('hidden');
            document.getElementById('modal-image').src = '';
        }
    </script>

    <!-- Styles for the Product Modal -->
    <style>
        /* Product Modal Styles */
        #product-modal {
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }
    </style>
</x-layout>

