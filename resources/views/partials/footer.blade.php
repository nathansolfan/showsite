<!-- Footer -->
<footer class="bg-gradient-to-b from-gray-800 to-gray-900 text-white py-12">
    <div class="max-w-6xl mx-auto px-6">
        <!-- Top Section with Logo and Info -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-12">
            <!-- Left: Logo and Info -->
            <div class="md:col-span-5">
                <div class="flex items-center mb-4">
                    <!-- Replace with your actual logo -->
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-10 w-10 rounded-md flex items-center justify-center mr-3 shadow-lg">
                        <span class="font-bold text-white">NF</span>
                    </div>
                    <h2 class="text-xl font-bold text-white">Nathan Ferreira</h2>
                </div>
                <p class="text-gray-300 mb-4 max-w-md leading-relaxed">Full-stack developer with expertise in Laravel, React, and AWS cloud solutions. Creating clean, scalable, and high-performance web applications.</p>

                <!-- Current Status -->
                <div class="flex items-center text-sm mb-5 bg-gray-700/50 py-2 px-3 rounded-md w-fit">
                    <span class="h-2 w-2 rounded-full bg-green-500 mr-2 animate-pulse"></span>
                    <span class="text-gray-300">Available for new projects</span>
                </div>

                <!-- Social Links with labels -->
                <div class="flex flex-wrap gap-3 mt-6">
                    <a href="https://www.instagram.com/nathancacun/" aria-label="Instagram"
                       class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-700 text-gray-300 hover:bg-blue-600 hover:text-white transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                        <span class="text-sm">Instagram</span>
                    </a>
                    <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" aria-label="LinkedIn"
                       class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-700 text-gray-300 hover:bg-blue-600 hover:text-white transition-all duration-300">
                        <i class="fab fa-linkedin-in"></i>
                        <span class="text-sm">LinkedIn</span>
                    </a>
                    <a href="https://github.com/nathansolfan" aria-label="GitHub"
                       class="flex items-center gap-2 px-4 py-2 rounded-md bg-gray-700 text-gray-300 hover:bg-blue-600 hover:text-white transition-all duration-300">
                        <i class="fab fa-github"></i>
                        <span class="text-sm">GitHub</span>
                    </a>
                </div>
            </div>

            <!-- Middle: Quick Links -->
            <div class="md:col-span-3">
                <h3 class="text-lg font-semibold mb-5 text-white flex items-center">
                    <i class="fas fa-link text-blue-400 mr-2"></i> Quick Links
                </h3>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ url('/') }}" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center group">
                            <span class="w-8 h-8 mr-3 bg-gray-700 rounded-md flex items-center justify-center group-hover:bg-blue-500 transition-colors">
                                <i class="fas fa-home text-gray-400 group-hover:text-white transition-colors"></i>
                            </span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/works') }}" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center group">
                            <span class="w-8 h-8 mr-3 bg-gray-700 rounded-md flex items-center justify-center group-hover:bg-blue-500 transition-colors">
                                <i class="fas fa-laptop-code text-gray-400 group-hover:text-white transition-colors"></i>
                            </span>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center group">
                            <span class="w-8 h-8 mr-3 bg-gray-700 rounded-md flex items-center justify-center group-hover:bg-blue-500 transition-colors">
                                <i class="fas fa-user text-gray-400 group-hover:text-white transition-colors"></i>
                            </span>
                            <span>About</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}" class="text-gray-300 hover:text-blue-400 transition-colors flex items-center group">
                            <span class="w-8 h-8 mr-3 bg-gray-700 rounded-md flex items-center justify-center group-hover:bg-blue-500 transition-colors">
                                <i class="fas fa-envelope text-gray-400 group-hover:text-white transition-colors"></i>
                            </span>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Right: Newsletter and Contact -->
            <div class="md:col-span-4">
                <h3 class="text-lg font-semibold mb-5 text-white flex items-center">
                    <i class="fas fa-paper-plane text-blue-400 mr-2"></i> Get In Touch
                </h3>

                <!-- Email Contact Button -->
                <a href="mailto:email@email.com" class="flex items-center mb-5 bg-gray-700 hover:bg-gray-600 rounded-md p-3 transition-colors group">
                    <div class="bg-gray-800 group-hover:bg-blue-600 h-10 w-10 rounded-md flex items-center justify-center mr-3 transition-colors">
                        <i class="fas fa-envelope text-gray-300 group-hover:text-white"></i>
                    </div>
                    <div>
                        <div class="text-gray-400 text-xs">Email me at</div>
                        <div class="text-gray-200">email@email.com</div>
                    </div>
                </a>

                <!-- Newsletter -->
                <div class="bg-gray-700/50 rounded-lg p-4 backdrop-blur-sm">
                    <p class="text-gray-300 mb-4 text-sm">Subscribe for updates on my latest projects and tech insights.</p>
                    <form class="space-y-2">
                        <div class="relative">
                            <input type="email" placeholder="Your email"
                                class="bg-gray-800 text-white px-4 py-3 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-full pl-10">
                            <i class="fas fa-envelope absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </div>
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-3 rounded-md transition-colors w-full flex items-center justify-center gap-2 font-medium">
                            <i class="fas fa-paper-plane"></i> Subscribe
                        </button>
                    </form>
                    <p class="text-gray-500 text-xs mt-2">I respect your privacy. No spam, ever.</p>
                </div>
            </div>
        </div>

        <!-- Tech Stack Section -->
        <div class="mb-10 border-t border-gray-700 pt-10">
            <h4 class="text-center text-sm uppercase tracking-wider text-gray-500 mb-6">Technologies I Work With</h4>
            <div class="flex flex-wrap justify-center gap-5">
                <div class="tech-icon" title="Laravel">
                    <i class="fab fa-laravel text-2xl text-gray-400 hover:text-red-500 transition-colors"></i>
                </div>
                <div class="tech-icon" title="React">
                    <i class="fab fa-react text-2xl text-gray-400 hover:text-blue-400 transition-colors"></i>
                </div>
                <div class="tech-icon" title="JavaScript">
                    <i class="fab fa-js-square text-2xl text-gray-400 hover:text-yellow-400 transition-colors"></i>
                </div>
                <div class="tech-icon" title="HTML5">
                    <i class="fab fa-html5 text-2xl text-gray-400 hover:text-orange-500 transition-colors"></i>
                </div>
                <div class="tech-icon" title="CSS3">
                    <i class="fab fa-css3-alt text-2xl text-gray-400 hover:text-blue-500 transition-colors"></i>
                </div>
                <div class="tech-icon" title="PHP">
                    <i class="fab fa-php text-2xl text-gray-400 hover:text-purple-500 transition-colors"></i>
                </div>
                <div class="tech-icon" title="Git">
                    <i class="fab fa-git-alt text-2xl text-gray-400 hover:text-orange-600 transition-colors"></i>
                </div>
                <div class="tech-icon" title="AWS">
                    <i class="fab fa-aws text-2xl text-gray-400 hover:text-yellow-500 transition-colors"></i>
                </div>
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
                <a href="{{ url('/admin/visits') }}" class="text-gray-500 hover:text-blue-400 text-sm">Analytics</a>
                <a href="{{ url('/sitemap') }}" class="text-gray-500 hover:text-blue-400 text-sm">Sitemap</a>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="flex justify-center mt-8">
            <a href="#top"
               class="group bg-gray-700 hover:bg-blue-600 text-white h-12 w-12 rounded-full flex items-center justify-center transition-all duration-300 shadow-lg"
               aria-label="Back to top">
                <i class="fas fa-arrow-up text-sm group-hover:animate-bounce"></i>
            </a>
        </div>
    </div>
</footer>

<!-- Performance Script -->
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
