<x-layout>
    <!-- Projects Section -->
    <section id="projects" class="block py-20 bg-gray-100">
        <div class="container mx-auto block-layout max-w-7xl" style="--m-grid-template-rows: auto auto auto;">
            <!-- Section Heading -->
            <div class="text-center mb-16">
                <h2 class="text-5xl font-extrabold text-gray-900 tracking-tight">My GitHub Projectssss</h2>
                <p class="mt-4 text-lg text-gray-600">Here are some of the projects I have worked on.</p>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($paginator->items() as $repo)
                    <div class="project-item bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 transform hover:scale-105">
                        <!-- Project Image -->
                        <img src="https://via.placeholder.com/300x200" alt="{{ $repo['name'] }} project image" class="rounded-lg mb-4 object-cover h-48 w-full">

                        <!-- Project Info -->
                        <div class="project-info">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $repo['name'] }}</h3>
                            <p class="text-gray-600">{{ $repo['description'] ?? 'No description available.' }}</p>
                        </div>

                        <!-- View on GitHub Button -->
                        <a href="{{ $repo['html_url'] }}" target="_blank" class="mt-4 inline-block bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-2 px-4 rounded-full hover:bg-gradient-to-r hover:from-indigo-600 hover:to-blue-600 transition duration-300">
                            View on GitHub
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="text-center mt-12">
                {{ $paginator->links() }} <!-- Render pagination links -->
            </div>
        </div>
    </section>
</x-layout>
