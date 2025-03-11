<!-- Footer -->
<footer class="bg-gray-900 text-white py-10">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Main Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            <!-- Left: Info -->
            <div>
                <h2 class="text-lg font-semibold text-white mb-3">Nathan Ferreira</h2>
                <p class="text-gray-400 text-sm mb-5">Full-stack developer creating clean, scalable web applications.</p>

                <!-- Social Links -->
                <div class="flex space-x-5">
                    <a href="https://www.instagram.com/nathancacun/" aria-label="Instagram"
                       class="text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" aria-label="LinkedIn"
                       class="text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-linkedin-in text-lg"></i>
                    </a>
                    <a href="https://github.com/nathansolfan" aria-label="GitHub"
                       class="text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fab fa-github text-lg"></i>
                    </a>
                    <a href="mailto:email@email.com" aria-label="Email"
                       class="text-gray-400 hover:text-blue-400 transition-colors">
                        <i class="fas fa-envelope text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Middle: Links -->
            <div>
                <h3 class="text-lg font-semibold mb-3 text-white">Links</h3>
                <div class="grid grid-cols-1 gap-2">
                    <a href="{{ url('/') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Home</a>
                    <a href="{{ url('/works') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm">Projects</a>
                    <a href="{{ url('/about') }}" class="text-gray-400 hover:text-blue-400 transition-colors text-sm">About</a>

                </div>
            </div>

            <!-- Right: Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-3 text-white">Stay Updated</h3>
                <form class="flex">
                    <input type="email" placeholder="Your email"
                           class="bg-gray-800 text-sm text-white px-3 py-2 rounded-l-md focus:outline-none w-full border-r-0 border border-gray-700">
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-r-md transition-colors">
                        <i class="fas fa-arrow-right text-sm"></i>
                    </button>
                </form>
                <p class="text-gray-500 text-xs mt-2">No spam, unsubscribe anytime.</p>

            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-800 mb-6"></div>

        <!-- Bottom Section -->
        <div class="flex flex-col sm:flex-row justify-between items-center text-xs">
            <!-- Copyright -->
            <p class="text-gray-500 mb-3 sm:mb-0">&copy; {{ date('Y') }} Nathan Ferreira. All rights reserved.</p>

            <!-- Back to Top -->
            <a href="#top" class="text-gray-500 hover:text-blue-400 transition-colors" aria-label="Back to top">
                Back to top <i class="fas fa-arrow-up ml-1"></i>
            </a>
        </div>
    </div>
</footer>
