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

    <section id="feedback" class="py-20 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">Leave Your Feedback</h2>
            <p class="text-lg text-gray-600 text-center mt-4">We value your feedback! Share your thoughts below.</p>

            <form action="{{ route('feedback.store') }}" method="POST" class="max-w-2xl mx-auto mt-8 bg-white p-8 rounded-lg shadow-lg">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email (Optional)</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">Submit Feedback</button>
            </form>
        </div>
    </section>

    <!-- Display Feedback -->
    <section class="py-20 bg-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">What Others Say</h2>
            <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($feedbacks as $feedback)
                    <div class="bg-gray-50 p-6 rounded-lg shadow">
                        <p class="text-gray-700">"{{ $feedback->message }}"</p>
                        <p class="mt-4 text-sm text-gray-500">- {{ $feedback->name }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
