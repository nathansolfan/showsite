<x-layout>


    {{-- success msg --}}
    @if (session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8" role="alert">
        <p>{{ session('success') }}</p>
    </div>
@endif

    <!-- Hero Section with Subtle Animation -->
    <section class="relative overflow-hidden bg-white py-24 md:py-36">
        <!-- Subtle animated background gradient -->
        {{-- <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute -inset-[10%] opacity-10 blur-3xl" aria-hidden="true">
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-500 via-purple-400 to-blue-300 animate-slow-pulse"></div>
            </div>
        </div> --}}

        <!-- Decorative element -->
        <div class="absolute top-0 right-0 -mt-16 -mr-16 hidden md:block">
            <div class="w-64 h-64 border border-gray-200 rounded-full"></div>
        </div>

        <div class="container relative z-10 mx-auto px-6">
            <div class="max-w-3xl">
                <span class="block mb-3 text-sm font-medium tracking-widest text-gray-500 uppercase">Get in touch</span>
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-light tracking-tight text-gray-900 mb-6">
                    Let's create<br />something <span class="italic">great</span>.
                </h1>
                <p class="text-lg md:text-xl text-gray-600 max-w-lg">
                    Available for freelance projects, collaborations, and interesting opportunities.
                </p>
            </div>
        </div>
    </section>


    <!-- Contact Content Section -->
    <section class="pb-24 md:pb-36">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-y-16 md:gap-x-20">
                    <!-- Form Section -->
                    <div class="md:col-span-7">
                        <form action="/contact-submit" method="POST" class="space-y-10">

                            @csrf
                            <div class="space-y-10">
                                <!-- Name Field -->
                                <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300">
                                    <label for="name" class="block text-xs font-medium text-gray-400 uppercase tracking-wide mb-2 group-focus-within:text-gray-900 transition-colors">Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Your name"
                                        class="block w-full border-0 border-b border-transparent bg-transparent focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg"
                                        required>
                                </div>

                                <!-- Email Field -->
                                <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300">
                                    <label for="email" class="block text-xs font-medium text-gray-400 uppercase tracking-wide mb-2 group-focus-within:text-gray-900 transition-colors">Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="Your email address"
                                        class="block w-full border-0 border-b border-transparent bg-transparent focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg"
                                        required>
                                </div>

                                <!-- Message Field with Character Count -->
                                <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300 relative">
                                    <div class="flex justify-between items-center mb-2">
                                        <label for="message" class="block text-xs font-medium text-gray-400 uppercase tracking-wide group-focus-within:text-gray-900 transition-colors">Message</label>
                                        <span id="char-count" class="text-xs text-gray-400 transition-opacity opacity-0">0/500</span>
                                    </div>
                                    <textarea
                                        id="message"
                                        name="message"
                                        rows="5"
                                        maxlength="500"
                                        placeholder="Tell me about your project..."
                                        class="block w-full border-0 border-b border-transparent bg-transparent focus:border-gray-900 focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg resize-none"
                                        required></textarea>
                                </div>
                            </div>

                            <!-- Honeypot Field -->
                            <div class="hidden">
                                <label for="honeypot">Leave this field empty</label>
                                <input type="text" id="honeypot" name="honeypot">
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-8 flex justify-between items-center">
                                <div class="text-xs text-gray-400">* All fields required</div>
                                <button
                                    type="submit"
                                    class="inline-flex items-center bg-gray-900 text-white px-8 py-4 text-base hover:bg-gray-800 transition-colors group relative overflow-hidden">
                                    <span class="relative z-10">Send Message</span>
                                    <span class="absolute inset-0 bg-gray-800 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></span>
                                    <svg class="ml-2 w-4 h-4 relative z-10 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="md:col-span-5">
                        <div class="space-y-16">
                            <!-- Personal Info -->
                            <div>
                                <h3 class="text-xs font-medium text-gray-400 uppercase tracking-wide mb-6">Contact Information</h3>

                                <div class="space-y-8">
                                    <!-- Email -->
                                    <div class="group">
                                        <div class="flex items-start">
                                            <div class="mt-1">
                                                <svg class="w-5 h-5 text-gray-300 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-6">
                                                <p class="text-sm text-gray-400 group-hover:text-gray-500 transition-colors">Email</p>
                                                <div class="relative">
                                                    <p id="email-value" class="mt-1 text-lg text-gray-900">nathansolfan@gmail.com</p>
                                                    <button id="copy-email-btn" class="absolute -right-7 top-1/2 transform -translate-y-1/2 opacity-0 group-hover:opacity-100 transition-opacity focus:opacity-100">
                                                        <svg class="w-5 h-5 text-gray-400 hover:text-gray-900 transition-colors" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                                                            <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                                                        </svg>
                                                    </button>
                                                    <span id="copy-success" class="absolute top-full left-0 mt-1 text-xs text-green-600 hidden">
                                                        Copied to clipboard
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Location -->
                                    <div class="group">
                                        <div class="flex items-start">
                                            <div class="mt-1">
                                                <svg class="w-5 h-5 text-gray-300 group-hover:text-gray-900 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                            </div>
                                            <div class="ml-6">
                                                <p class="text-sm text-gray-400 group-hover:text-gray-500 transition-colors">Location</p>
                                                <p class="mt-1 text-lg text-gray-900">Liverpool, United Kingdom</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Links -->
                            <div>
                                <h3 class="text-xs font-medium text-gray-400 uppercase tracking-wide mb-6">Connect</h3>
                                <div class="flex flex-col space-y-4">
                                    <a href="https://github.com/nathansolfan" target="_blank" rel="noopener" class="group flex items-center text-gray-600 hover:text-gray-900 transition-colors">
                                        <svg class="h-5 w-5 text-gray-400 group-hover:text-gray-900 transition-colors mr-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>GitHub</span>
                                    </a>
                                    <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" target="_blank" rel="noopener" class="group flex items-center text-gray-600 hover:text-gray-900 transition-colors">
                                        <svg class="h-5 w-5 text-gray-400 group-hover:text-gray-900 transition-colors mr-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"></path>
                                        </svg>
                                        <span>LinkedIn</span>
                                    </a>
                                    {{-- <a href="https://www.instagram.com/nathancacun/" target="_blank" rel="noopener" class="group flex items-center text-gray-600 hover:text-gray-900 transition-colors">
                                        <svg class="h-5 w-5 text-gray-400 group-hover:text-gray-900 transition-colors mr-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span>Instagram</span>
                                    </a> --}}
                                </div>
                            </div>

                            <!-- Status Indicator -->
                            <div class="pt-8 border-t border-gray-100">
                                <div class="inline-flex items-center">
                                    <span class="w-3 h-3 bg-green-400 rounded-full shadow-inner mr-3 flex-shrink-0"></span>
                                    <span class="text-gray-600">Currently available for new projects</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Copy email functionality
            const copyBtn = document.getElementById('copy-email-btn');
            const copySuccess = document.getElementById('copy-success');

            copyBtn.addEventListener('click', function() {
                const emailText = document.getElementById('email-value').textContent;

                navigator.clipboard.writeText(emailText)
                    .then(() => {
                        copySuccess.classList.remove('hidden');

                        setTimeout(() => {
                            copySuccess.classList.add('hidden');
                        }, 2000);
                    })
                    .catch(err => {
                        console.error('Could not copy text: ', err);
                    });
            });

            // Character counter for message textarea
            const messageArea = document.getElementById('message');
            const charCount = document.getElementById('char-count');

            if (messageArea && charCount) {
                messageArea.addEventListener('input', function() {
                    const current = this.value.length;
                    const max = this.getAttribute('maxlength');
                    charCount.textContent = current + '/' + max;

                    if (current > 0) {
                        charCount.classList.remove('opacity-0');
                    } else {
                        charCount.classList.add('opacity-0');
                    }

                    // Change color when approaching limit
                    if (current > max * 0.8) {
                        charCount.classList.add('text-amber-500');
                    } else {
                        charCount.classList.remove('text-amber-500');
                    }
                });

                // Focus event
                messageArea.addEventListener('focus', function() {
                    if (this.value.length > 0) {
                        charCount.classList.remove('opacity-0');
                    }
                });

                // Blur event
                messageArea.addEventListener('blur', function() {
                    if (this.value.length === 0) {
                        charCount.classList.add('opacity-0');
                    }
                });
            }
        });
    </script>

    <style>
        @keyframes slow-pulse {
            0%, 100% { opacity: 0.1; }
            50% { opacity: 0.2; }
        }

        .animate-slow-pulse {
            animation: slow-pulse 8s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
    </style>
</x-layout>
