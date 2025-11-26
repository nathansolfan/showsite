<x-layout>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto">
                <span class="bg-white/20 text-white text-xs font-semibold px-3 py-1 rounded-full">
                    Web Development
                </span>

                <h1 class="text-4xl md:text-5xl font-bold mt-6 mb-4">
                    Building a Portfolio with Laravel and TailwindCSS
                </h1>

                <p class="text-blue-100 text-lg mb-6">
                    A deep dive into creating a modern, responsive portfolio website using Laravel,
                    TailwindCSS, and interactive SVG animations.
                </p>

                <p class="text-blue-200 text-sm flex items-center gap-2">
                    <i class="far fa-calendar-alt"></i> Feb 22, 2025
                </p>
            </div>
        </div>
    </section>

    <!-- Article Body -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-3xl mx-auto text-gray-800 leading-relaxed text-lg">

                <!-- INTRO -->
                <p class="mb-6">
                    When I started building my portfolio, I wanted something clean, fast, and modern —
                    something that reflected my skills as a developer. Laravel’s backend structure paired with TailwindCSS’s utility-first approach gave me exactly that.
                </p>

                <p class="mb-6">
                    In this article, I’ll walk you through the architecture behind this website,
                    the components I created, and some decisions that helped me keep everything simple, reusable, and scalable.
                </p>

                <hr class="my-12 border-gray-200">

                <!-- SECTION 1 -->
                <h2 class="text-3xl font-bold mb-4">1. Why Laravel for a Portfolio?</h2>
                <p class="mb-6">
                    Laravel offers a beautifully structured MVC framework with Blade templates, routing, controllers,
                    and extremely clean syntax. For a personal portfolio, it might feel "too much", but the truth is:
                    it gives you the flexibility to scale your site into something bigger — blogs, admin panels, APIs,
                    or even client dashboards.
                </p>

                <blockquote class="border-l-4 border-blue-500 pl-4 italic text-gray-600 mb-6">
                    "Your portfolio shouldn’t just show your work — it should *be* an example of your work."
                </blockquote>

                <!-- SECTION 2 -->
                <h2 class="text-3xl font-bold mb-4">2. TailwindCSS + Blade Components</h2>
                <p class="mb-6">
                    Tailwind helps keep the design consistent. By mixing Tailwind with Blade components,
                    I created reusable UI pieces: cards, sections, buttons, forms, layouts.
                </p>

                <p class="font-semibold text-gray-700 mb-3">Example of a reusable component:</p>

                <pre class="bg-gray-900 text-green-300 p-6 rounded-lg text-sm overflow-x-auto mb-8">
&lt;x-button type="primary"&gt;
    Read More
&lt;/x-button&gt;
                </pre>

                <!-- SECTION 3 -->
                <h2 class="text-3xl font-bold mb-4">3. Interactive SVG Animations</h2>
                <p class="mb-6">
                    To add personality, I used lightweight SVGs combined with Tailwind animations and CSS transitions.
                    This keeps performance high while giving the site a modern and dynamic feel.
                </p>

                <!-- SECTION 4 -->
                <h2 class="text-3xl font-bold mb-4">4. Final Thoughts</h2>
                <p class="mb-6">
                    This portfolio is more than just a showcase of projects — it's a foundation I can keep expanding.
                    And the best part? Laravel + TailwindCSS makes every new page, feature, or component easy and enjoyable to build.
                </p>

                <p class="mb-12">
                    If you're thinking of building or upgrading your portfolio, I absolutely recommend this stack.
                </p>

                <!-- BACK BUTTON -->
                <a href="/blog"
                   class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Back to Articles
                </a>

            </div>
        </div>
    </section>

</x-layout>
