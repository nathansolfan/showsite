<x-layout>
    <section id="projects" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">My GitHub Projects</h2>
            <p class="mt-4 text-lg text-gray-600 text-center">Here are some of the projects I have worked on.</p>

            <div id="github-projects" class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                @foreach ($paginator->items() as $repo)
                    <div class="project-item text-center bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mt-4">{{ $repo['name'] }}</h3>
                        <p class="mt-2 text-gray-600">{{ $repo['description'] ?? 'No description available.' }}</p>
                        <a href="{{ $repo['html_url'] }}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700">View on GitHub</a>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $paginator->links() }} <!-- Render pagination links -->
            </div>
        </div>
    </section>
</x-layout>
