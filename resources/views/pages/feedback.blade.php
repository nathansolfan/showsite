<x-layout>
    <!-- Feedback Section -->
    <section id="feedback" class="py-20 bg-gradient-to-r from-blue-50 to-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">
                <i class="fas fa-comments mr-2"></i> Feedback & Testimonials
            </h2>
            <p class="mt-4 text-lg text-gray-600 text-center">
                Here’s what people I’ve worked with have to say about me.
            </p>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                <!-- Testimonial Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                    <p class="text-lg text-gray-600 italic">
                        "Nathan is an exceptionally talented developer. His ability to solve problems and deliver projects on time is unmatched."
                    </p>
                    <div class="flex items-center mt-4">
                        <img src="{{ asset('images/person1.jpg') }}" alt="John Doe" class="w-12 h-12 rounded-full shadow-md">
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800">John Doe</h4>
                            <p class="text-sm text-gray-600">Project Manager</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                    <p class="text-lg text-gray-600 italic">
                        "Nathan’s expertise in both frontend and backend development played a key role in our project’s success."
                    </p>
                    <div class="flex items-center mt-4">
                        <img src="{{ asset('images/person2.jpg') }}" alt="Jane Smith" class="w-12 h-12 rounded-full shadow-md">
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800">Jane Smith</h4>
                            <p class="text-sm text-gray-600">Senior Developer</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                    <p class="text-lg text-gray-600 italic">
                        "Working with Nathan was a pleasure. His dedication and attention to detail made all the difference."
                    </p>
                    <div class="flex items-center mt-4">
                        <img src="{{ asset('images/person3.jpg') }}" alt="Michael Brown" class="w-12 h-12 rounded-full shadow-md">
                        <div class="ml-4">
                            <h4 class="font-semibold text-gray-800">Michael Brown</h4>
                            <p class="text-sm text-gray-600">Client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
