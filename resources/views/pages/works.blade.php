<x-layout>

    <section id="projects" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">My GitHub Projects</h2>
            <p class="mt-4 text-lg text-gray-600 text-center">Here are some of the projects I have worked on.</p>

            <div id="github-projects" class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                <!-- GitHub projects will be dynamically loaded here -->
                @foreach ($paginator->items() as $repo)
                    <div class="project-item text-center bg-white p-6 rounded-lg shadow-lg">
                        <div class="project-info">
                            <h3 class="text-2xl font-bold text-gray-800 mt-4">{{ $repo['name'] }}</h3>
                            <p class="mt-2 text-gray-600">{{ $repo['description'] ?? 'No description available.' }}</p>

                            <a href="{{ $repo['html_url'] }}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700">View on GitHub</a>
                            @if(isset($repo['live_preview_url']))
                            <button class="mt-4 ml-4 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700" onclick="openFullscreenPreview('{{ $repo['live_preview_url'] }}')">Live Preview</button>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination Links -->
            <div class="mt-8">
                {{ $paginator->links() }}
            </div>
        </div>
    </section>
    <!-- Include Fullscreen Overlay Component -->
    @include('components.fullscreen-overlay')

</x-layout>

<script>

    // const githubUsername = 'nathansolfan';
    // const projectsContainer = document.getElementById('github-projects');
    // let currentPage = 1;
    // const perPage = 3;

    // function getLivePreviewUrl(repoName) {
    //     const livePreviewLinks = {
    //         'LanguageCompanion': 'https://example-link.com/',
    //         'DogAPIGenerator': 'https://dog-photo-app-one.vercel.app/',
    //         'ProjectManagement': 'https://example-link.com/',
    //         'cleaning-service': 'https://example-link.com/'
    //     };
    //     return livePreviewLinks[repoName] || null;
    // }

    // fetch(`https://api.github.com/users/${githubUsername}/repos?sort=updated&per_page=6`)
    //     .then(response => response.json())
    //     .then(data => {
    //         // Clear previous projects
    //         projectsContainer.innerHTML = '';
    //             // Populate new projects
    //         data.forEach(repo => {
    //             const livePreviewUrl = getLivePreviewUrl(repo.name);

    //             const projectCard = `
    //                 <div class="project-item text-center bg-white p-6 rounded-lg shadow-lg">
    //                     <div class="project-info">
    //                         <h3 class="text-2xl font-bold text-gray-800 mt-4">${repo.name}</h3>
    //                         <p class="mt-2 text-gray-600">${repo.description || 'No description available.'}</p>
    //                         <a href="${repo.html_url}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700">View on GitHub</a>
    //                         ${livePreviewUrl ? `<button class="mt-4 ml-4 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700" onclick="openFullscreenPreview('${livePreviewUrl}')">Live Preview</button>` : ''}
    //                     </div>
    //                 </div>
    //             `;
    //             projectsContainer.innerHTML += projectCard;
    //         });
    //     });
</script>
