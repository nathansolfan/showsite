<x-layout>
    <!-- Hero Section -->
    <section class="py-16 md:py-24 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6" data-aos="fade-up">Developer Insights</h1>
                <p class="text-xl text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="100">
                    Sharing my journey through web development, coding tips, and project breakdowns.
                </p>
                <div class="flex justify-center gap-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="#latest-posts" class="bg-white text-blue-600 hover:bg-blue-100 transition px-6 py-3 rounded-lg font-medium">
                        Read Latest
                    </a>
                    {{-- <a href="{{ route('blog.categories') }}" class="bg-transparent border-2 border-white hover:bg-white/10 transition px-6 py-3 rounded-lg font-medium">
                        Browse Categories
                    </a> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Post -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800" data-aos="fade-right">Featured Post</h2>
                <a href="#latest-posts" class="text-blue-600 hover:text-blue-800 font-medium flex items-center gap-1" data-aos="fade-left">
                    View all posts <i class="fas fa-arrow-right text-sm"></i>
                </a>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100 rounded-xl shadow-lg overflow-hidden" data-aos="fade-up">
                <div class="p-8 md:p-12">
                    <div class="flex items-center gap-4 mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">
                            Web Development
                        </span>
                        <span class="text-gray-500 text-sm">
                            <i class="far fa-calendar-alt mr-1"></i> Feb 22, 2025
                        </span>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                        Building a Portfolio with Laravel and TailwindCSS
                    </h3>
                    <p class="text-gray-600 mb-6">
                        A deep dive into creating a modern, responsive portfolio website using Laravel,
                        TailwindCSS, and interactive SVG animations. Learn how I built this site from scratch.
                    </p>
                    <a href="{{ route('blog.show', 'portfolio-development') }}"
                       class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                        Read Full Article <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Posts -->
    <section id="latest-posts" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center" data-aos="fade-up">Latest Articles</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Post Card 1 -->
                <div class="bg-white rounded-xl shadow border border-gray-100 p-6 transition-all hover:shadow-lg hover:border-blue-200" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-3 py-1 rounded-full">API</span>
                        <span class="text-gray-500 text-sm"><i class="far fa-calendar-alt mr-1"></i> Feb 15, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Creating the Ultimate Dog Image Generator</h3>
                    <p class="text-gray-600 mb-4">
                        Learn how I built a fun dog image generator using the Dog API, with step-by-step explanations
                        of the code behind the scenes.
                    </p>
                    <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 8 min read</span>
                        <a href="{{ route('blog.show', 'dogProject') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                            Read More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Post Card 2 -->
                <div class="bg-white rounded-xl shadow border border-gray-100 p-6 transition-all hover:shadow-lg hover:border-green-200" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-3 py-1 rounded-full">Laravel</span>
                        <span class="text-gray-500 text-sm"><i class="far fa-calendar-alt mr-1"></i> Feb 8, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Building a Finance Tracker with Laravel</h3>
                    <p class="text-gray-600 mb-4">
                        A comprehensive walkthrough of creating a finance tracking application
                        with Laravel, including authentication, database design, and front-end implementation.
                    </p>
                    <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 12 min read</span>
                        <a href="{{ route('blog.show', 'finance-tracker') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                            Read More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Post Card 3 -->
                <div class="bg-white rounded-xl shadow border border-gray-100 p-6 transition-all hover:shadow-lg hover:border-blue-200" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-3 py-1 rounded-full">Case Study</span>
                        <span class="text-gray-500 text-sm"><i class="far fa-calendar-alt mr-1"></i> Jan 30, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Driver App: A Complete Case Study</h3>
                    <p class="text-gray-600 mb-4">
                        Exploring the architecture and development process behind the driver management
                        application, including route management and performance analytics.
                    </p>
                    <div class="flex items-center justify-between mt-6 pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 15 min read</span>
                        <a href="{{ route('blog.show', 'driver-app') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                            Read More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center" data-aos="fade-up">
                <nav class="inline-flex rounded-md shadow-sm">
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Previous
                    </a>
                    <a href="#" class="px-4 py-2 bg-blue-600 border border-blue-600 text-sm font-medium text-white hover:bg-blue-700">
                        1
                    </a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">
                        2
                    </a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">
                        3
                    </a>
                    <a href="#" class="px-4 py-2 bg-white border border-gray-300 text-sm font-medium text-gray-500 hover:bg-gray-50">
                        Next
                    </a>
                </nav>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-12 bg-blue-50">
        <div class="container mx-auto px-4">
            <div class="max-w-xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Subscribe to my newsletter</h2>
                <p class="text-gray-600 mb-6">Get the latest articles, tutorials, and project updates delivered directly to your inbox.</p>

                <form class="flex flex-col sm:flex-row gap-2">
                    <input type="email" placeholder="Your email address"
                           class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <button type="submit"
                            class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                        Subscribe
                    </button>
                </form>
                <p class="text-gray-500 text-sm mt-3">I respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </section>
</x-layout>
