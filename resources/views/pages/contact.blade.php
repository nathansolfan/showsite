<x-layout>
    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">Contact Me</h2>
            <p class="mt-4 text-lg text-gray-600 text-center">I'd love to hear from you! Please fill out the form below to get in touch.</p>

            <div class="mt-10 max-w-lg mx-auto">
                <form action="#" method="POST">
                    <div class="mb-6">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-600 text-white py-3 px-6 rounded-full hover:bg-blue-700">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-layout>
