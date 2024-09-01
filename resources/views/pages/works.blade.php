<x-layout>

    <section id="projects" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">My GitHub Projects</h2>
            <p class="mt-4 text-lg text-gray-600 text-center">Here are some of the projects I have worked on.</p>

            <div id="github-projects" class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                <!-- GitHub projects will be dynamically loaded here -->
            </div>
        </div>
    </section>


    <!-- Work Section -->
    {{-- <section id="work" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">My Work</h2>
            <p class="mt-4 text-lg text-gray-600 text-center">Here are some of my recent projects.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-10">
                <!-- Project 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="project-image-url.jpg" alt="Project 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800">Project Name</h3>
                        <p class="mt-2 text-gray-600">Short description of the project.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="project-image-url.jpg" alt="Project 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800">Project Name</h3>
                        <p class="mt-2 text-gray-600">Short description of the project.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="project-image-url.jpg" alt="Project 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-800">Project Name</h3>
                        <p class="mt-2 text-gray-600">Short description of the project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</x-layout>
<script>



    const githubUsername = 'nathansolfan';
    const projectsContainer = document.getElementById('github-projects');
    function getLivePreviewUrl(repoName) {
    const livePreviewLinks = {
        'dog-photo-app': 'https://dog-photo-app-one.vercel.app/', // Replace with your actual repo name if different
        // Add more mappings for other projects as needed
    };

    return livePreviewLinks[repoName] || null;
}

    fetch(`https://api.github.com/users/${githubUsername}/repos?sort=updated&per_page=6`)
        .then(response => response.json())
        .then(data => {
            data.forEach(repo => {
                const livePreviewUrl = getLivePreviewUrl(repo.name);

                const projectCard = `
                    <div class="text-center bg-white p-6 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mt-4">${repo.name}</h3>
                        <p class="mt-2 text-gray-600">${repo.description || 'No description available.'}</p>
                        <a href="${repo.html_url}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700">View on GitHub</a>
                        ${livePreviewUrl ? `<a href="${livePreviewUrl}" target="_blank" class="mt-4 ml-4 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700">Live Preview</a>` : ''}

                    </div>
                `;
                projectsContainer.innerHTML += projectCard;
            });
        });
</script>
