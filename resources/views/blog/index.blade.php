<x-layout>
    <!-- Hero Section -->
    <section class="py-16 md:py-24 bg-gradient-to-r from-blue-700 to-indigo-800 text-white">
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
                    @guest
                        <a href="/user/create" class="bg-white text-blue-600 hover:bg-blue-100 transition px-6 py-3 rounded-lg font-medium">
                            Create
                        </a>
                    @endguest
                    @auth
                        <a href="/blog/create" class="bg-white text-blue-600 hover:bg-blue-100 transition px-6 py-3 rounded-lg font-medium">
                            Project
                        </a>
                    @endauth


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

            {{-- First FEATURED POST--}}
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
                    <a href="/blog/article"
                       class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                        Read Full Article <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>

            {{-- 2nd FEATURED POST--}}
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-100 rounded-xl shadow-lg overflow-hidden mt-6" data-aos="fade-up">
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
                        Creating a 2 Men and a Van Website
                    </h3>
                    <p class="text-gray-600 mb-6">
                        Our client has requested this beautiful website reactive, using Blade, SQL
                    </p>
                    <a href="/blog/article"
                       class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                        Read Full Article <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- Latest Posts -->
    <section id="latest-articles" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-gray-800 mb-12 text-center" data-aos="fade-up">Latest Articles</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Post Card 1 -->
                <div class="bg-white rounded-xl shadow border border-gray-100 p-6 transition-all hover:shadow-lg hover:border-blue-200 h-full flex flex-col" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-blue-200 text-yellow-800 text-xs font-medium px-3 py-1 rounded-full">API</span>
                        <span class="text-gray-500 text-sm"><i class="far fa-calendar-alt mr-1"></i> Feb, 2024</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Creating the Ultimate Dog Image Generator</h3>
                    <p class="text-gray-600 mb-4">
                        Learn how I built a fun dog image generator using the Dog API, with step-by-step explanations
                        of the code behind the scenes.
                    </p>

                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 8 min read</span>
                        <a href="{{ route('blog.show', 'dogProject') }}" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                            Read More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Post Card 2 -->
                <div class="bg-white rounded-xl shadow border border-gray-100 p-6 transition-all hover:shadow-lg hover:border-green-200 h-full flex flex-col" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-green-100 text-green-800 text-xs font-medium px-3 py-1 rounded-full">Laravel</span>
                        <span class="text-gray-500 text-sm"><i class="far fa-calendar-alt mr-1"></i> Nov, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Feelings Analyzer</h3>
                    <p class="text-gray-600 mb-4">
                        Here we use Finn with a lexicon of all words related to feelings with a scale that goes from -5 to +5.
                        <br>
                        A script was made and generated the json for the feelings and based on the input you have the final result.
                    </p>

                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 12 min read</span>
                        <a href="/analyze" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
                            Read More <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Post Card 3 -->
                <div class="bg-white rounded-xl shadow border border-gray-100 p-6 transition-all hover:shadow-lg hover:border-blue-200 h-full flex flex-col" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center gap-2 mb-4">
                        <span class="bg-blue-200 text-yellow-800 text-xs font-medium px-3 py-1 rounded-full">API</span>
                        <span class="text-gray-500 text-sm"><i class="far fa-calendar-alt mr-1"></i> Sep, 2025</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800">Quote API</h3>
                    <p class="text-gray-600 mb-4">
                        Quotes are taken from an API on this little project.
                        Jquery is used for the interaction and it`s displayed on the homepage

                    </p>

                    <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                        <span class="text-sm text-gray-500"><i class="far fa-clock mr-1"></i> 15 min read</span>
                        <a href="/#quotes-section" class="inline-flex items-center font-medium text-blue-600 hover:text-blue-800">
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
    <section class="py-12 bg-blue-500">
        <div class="container mx-auto px-4">
            <div class="max-w-xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Subscribe to my newsletter</h2>
                <p class="text-black-600 mb-6">Get the latest articles, tutorials, and project updates delivered directly to your inbox.</p>

                <form class="flex flex-col sm:flex-row gap-2">
                    <input type="email" placeholder="Your email address"
                           class="flex-1 px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <button type="submit"
                            class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                        Subscribe
                    </button>
                </form>
                <p class="text-black-500 text-sm mt-3">I respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </section>
</x-layout>
