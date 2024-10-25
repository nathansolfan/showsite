<x-layout>
    <!-- Projects Section -->
    <section id="projects" class="block py-20 bg-gray-100" style="--block-padding-top: 16px; --block-padding-bottom: 16px;">
        <div class="container mx-auto block-layout" style="--m-grid-template-rows: auto auto auto; --grid-template-columns: 1fr; --block-min-height: auto;">
            <!-- Section Heading -->
            <div class="layout-element text-center mb-10" style="--m-element-margin: 0 0 16px 0;">
                <h2 class="text-4xl font-bold text-gray-800">My GitHub Projects</h2>
                <p class="mt-4 text-lg text-gray-600">Here are some of the projects I have worked on.</p>
            </div>

            <!-- Projects Grid -->
            <div class="layout-element grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach ($paginator->items() as $repo)
                    <div class="project-item bg-white p-6 rounded-lg shadow-lg text-center">
                        <img src="https://via.placeholder.com/300x200" alt="{{ $repo['name'] }} project image" class="rounded-lg mb-4">
                        <div class="project-info">
                            <h3 class="text-2xl font-bold text-gray-800">{{ $repo['name'] }}</h3>
                            <p class="mt-2 text-gray-600">{{ $repo['description'] ?? 'No description available.' }}</p>
                            <a href="{{ $repo['html_url'] }}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700 transition duration-300">View on GitHub</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="layout-element text-center mt-10">
                {{ $paginator->links() }} <!-- Render pagination links -->
            </div>
        </div>
    </section>
</x-layout>
