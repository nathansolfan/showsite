<!-- Footer -->
<footer class="bg-gradient-to-b from-gray-800 to-gray-900 text-white py-12">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Top Section with Logo and Info -->
        <div class="flex flex-col md:flex-row justify-between mb-12">
            <!-- Left: Logo and Info -->
            <div class="mb-8 md:mb-0 md:w-1/3">
                <div class="flex items-center mb-4">
                    <!-- You can replace this with your actual logo -->
                    <div class="bg-blue-500 h-8 w-8 rounded-md flex items-center justify-center mr-3">
                        <span class="font-bold text-white">NF</span>
                    </div>
                    <h2 class="text-xl font-bold text-white">Nathan Ferreira</h2>
                </div>
                <p class="text-gray-400 mb-4 max-w-xs">Full-stack developer creating clean, scalable, and high-performance web applications.</p>

                <!-- Social Links -->
                <div class="flex space-x-4 mt-6">
                    <a href="https://www.instagram.com/nathancacun/" aria-label="Instagram"
                       class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center text-gray-300 hover:bg-blue-500 hover:text-white transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" aria-label="LinkedIn"
                       class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center text-gray-300 hover:bg-blue-500 hover:text-white transition-all duration-300">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://github.com/nathansolfan" aria-label="GitHub"
                       class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center text-gray-300 hover:bg-blue-500 hover:text-white transition-all duration-300">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="mailto:email@email.com" aria-label="Email"
                       class="h-10 w-10 rounded-full bg-gray-700 flex items-center justify-center text-gray-300 hover:bg-blue-500 hover:text-white transition-all duration-300">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>
            </div>

            <!-- Middle: Quick Links -->
            <div class="mb-8 md:mb-0">
                <h3 class="text-lg font-semibold mb-4 text-white">Quick Links</h3>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ url('/') }}" class="text-gray-400 hover:text-blue-400 transition-colors flex items-center">
                            <i class="fas fa-home mr-2 text-xs"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/works') }}" class="text-gray-400 hover:text-blue-400 transition-colors flex items-center">
                            <i class="fas fa-laptop-code mr-2 text-xs"></i> Projects
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="text-gray-400 hover:text-blue-400 transition-colors flex items-center">
                            <i class="fas fa-user mr-2 text-xs"></i> About
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="text-gray-400 hover:text-blue-400 transition-colors flex items-center">
                            <i class="fas fa-envelope mr-2 text-xs"></i> Contact
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/policy') }}" class="text-gray-400 hover:text-blue-400 transition-colors flex items-center">
                            <i class="fas fa-shield-alt mr-2 text-xs"></i> Privacy
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Right: Newsletter -->
            <div class="md:w-1/3">
                <h3 class="text-lg font-semibold mb-4 text-white">Stay Updated</h3>
                <p class="text-gray-400 mb-4">Subscribe to my newsletter for the latest projects and tech insights.</p>
                <form class="flex flex-col sm:flex-row gap-2">
                    <input type="email" placeholder="Your email"
                           class="bg-gray-700 text-white px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-full">
                    <button type="submit"
                            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md transition-colors whitespace-nowrap">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>

        <!-- Divider -->
        <div class="border-t border-gray-700 my-8"></div>

        <!-- Bottom Section -->
        <div class="flex flex-col sm:flex-row justify-between items-center">
            <!-- Copyright -->
            <p class="text-gray-500 text-sm mb-4 sm:mb-0">&copy; {{ date('Y') }} Nathan Ferreira. All rights reserved.</p>

            <!-- Additional Links -->
            <div class="flex space-x-6">
                <a href="{{ url('/policy') }}" class="text-gray-500 hover:text-blue-400 text-sm">Privacy Policy</a>
                <a href="{{ url('/terms') }}" class="text-gray-500 hover:text-blue-400 text-sm">Terms of Service</a>
                <a href="{{ url('/sitemap') }}" class="text-gray-500 hover:text-blue-400 text-sm">Sitemap</a>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="flex justify-center mt-8">
            <a href="#top" class="bg-gray-700 hover:bg-blue-500 text-white h-10 w-10 rounded-full flex items-center justify-center transition-all duration-300" aria-label="Back to top">
                <i class="fas fa-arrow-up text-sm"></i>
            </a>
        </div>
    </div>
</footer>

<!-- Add this to your partials/footer.blade.php file before the closing tag -->
<script>
    // Performance optimizations for animations
    (function() {
      // Detect mobile/low-power devices
      const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
      const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

      // Apply optimizations based on device capabilities
      if (isMobile || prefersReducedMotion) {
        // 1. Disable or simplify blob animations on mobile
        const blobElements = document.querySelectorAll('.animate-blob');
        blobElements.forEach(blob => {
          // Option 1: Completely disable animations
          blob.style.animation = 'none';

          // Option 2: Or use a simplified static position instead
          blob.classList.remove('animate-blob');
          blob.style.transform = 'none';

          // Reduce blur for better performance
          blob.style.filter = 'blur(5px)';
        });

        // 2. Optimize AOS animations
        // You can access the global AOS object after it's initialized
        if (typeof AOS !== 'undefined') {
          // Make animations simpler and less frequent on mobile
          AOS.init({
            duration: 600, // Slightly longer for smoother appearance
            once: true, // Only animate once
            disable: 'phone', // Disable on phones completely (optional)
            throttleDelay: 200, // Less frequent scroll checks
            offset: 50 // Trigger earlier to prevent janky appearance
          });
        }

        // 3. Remove any other intensive animations or effects
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach(card => {
          // Remove any hover animations that might cause jank during scrolling
          card.style.transition = 'none';
        });
      }
    })();
  </script>
