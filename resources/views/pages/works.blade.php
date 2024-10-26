<x-layout>
    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-100">
        <div class="container mx-auto max-w-6xl">
            <!-- Section Heading -->
            <h2 class="text-4xl font-bold text-center text-gray-800">My GitHub Projects</h2>
            <p class="mt-4 text-lg text-gray-600 text-center">Here are some of the projects I have worked on.</p>

            <!-- Projects Grid -->
            <div id="github-projects" class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                @foreach ($paginator->items() as $repo)
                    <div class="project-item text-center bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up">
                        <!-- Project Info -->
                        <h3 class="text-2xl font-bold text-gray-800 mt-4">{{ $repo['name'] }}</h3>
                        <p class="mt-2 text-gray-600">{{ $repo['description'] ?? 'No description available.' }}</p>

                        <!-- View on GitHub Button -->
                        <a href="{{ $repo['html_url'] }}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">View on GitHub</a>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="text-center mt-8">
                {{ $paginator->links() }}
            </div>
        </div>
    </section>
</x-layout>
