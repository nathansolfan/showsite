<x-layout>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">My GitHub Projects</h2>
            <p class="mt-4 text-lg text-gray-600 text-center">Here are some of the projects I have worked on.</p>

            <div id="github-projects" class="grid grid-cols-1 md:grid-cols-1 gap-8 mt-10">
                <!-- Skeleton loading placeholders -->
                <div class="project-item skeleton"></div>
                <div class="project-item skeleton"></div>
                <div class="project-item skeleton"></div>
            </div>
        </div>
    </section>

    <!-- Fullscreen Overlay for Project Preview -->
    <x-fullscreen-overlay />

</x-layout>

<script>
    const githubUsername = 'nathansolfan';
    const projectsContainer = document.getElementById('github-projects');

    const dogApiGenerator = {
        name: 'DogAPIGenerator',
        liveUrl: 'https://dog-photo-app-one.vercel.app/',
        description: 'A random dog image generator using an API to fetch adorable dog photos and information.',
        githubUrl: 'https://github.com/nathansolfan/DogAPIGenerator',
    };

    // Reusable function to create DogAPIGenerator card
    function createDogApiProjectCard(container) {
        const projectCard = `
            <div class="project-item text-center bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                <h3 class="text-2xl font-bold text-gray-800 mt-4">${dogApiGenerator.name}</h3>
                <p class="mt-2 text-gray-600">${dogApiGenerator.description}</p>
                <a href="${dogApiGenerator.githubUrl}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700">View on GitHub</a>
                <button class="mt-4 ml-4 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700" onclick="openFullscreenPreview('${dogApiGenerator.liveUrl}')">Live Preview</button>
            </div>
        `;
        container.innerHTML += projectCard;
    }

    // Reuse the DogAPIGenerator in the current page or anywhere
    // createDogApiProjectCard();

    function getLivePreviewUrl(repoName) {
        const livePreviewLinks = {
            'LanguageCompanion': 'https://b673d07e-05ae-47a6-91d2-1f03771b1cc6-00-29msu0h1kj7at.janeway.replit.dev/',
            'DogAPIGenerator': 'https://dog-photo-app-one.vercel.app/',
            'ProjectManagement': 'https://f4dc5472-7b94-4d5d-9d3c-47a593936bae-00-9rdbdkg59zgu.kirk.replit.dev/',
            'cleaning-service': 'https://b6e1d417-8813-4644-8809-ac80d0e28676-00-316gxfu84tyex.janeway.replit.dev/'
        };
        return livePreviewLinks[repoName] || null;
    }

    // Function to fetch the README content
function fetchReadme(repoName) {
    return fetch(`https://api.github.com/repos/${githubUsername}/${repoName}/readme`, {
        headers: {
            Accept: 'application/vnd.github.v3.raw' // Get raw markdown content
        }
    })
        .then(response => response.text())
        .then(text => {
            // Extract the first 200 characters from the README or return a default description
            return text ? text.split('\n').slice(0, 3).join(' ').substring(0, 200) : 'No description available.';
        })
        .catch(() => 'No description available.');
}

    function openFullscreenPreview(url) {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');

        iframe.src = url;
        overlay.classList.add('show');
    }

    function closeFullscreenPreview() {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');

        iframe.src = '';
        overlay.classList.remove('show');
    }

    // Fetch GitHub projects
    fetch(`https://api.github.com/users/${githubUsername}/repos?sort=updated&per_page=6`)
        .then(response => response.json())
        .then(data => {
            document.querySelectorAll('.skeleton').forEach(skeleton => skeleton.remove());
            data.forEach(repo => {
                const livePreviewUrl = getLivePreviewUrl(repo.name);

                const projectCard = `
                    <div class="project-item text-center bg-white p-6 rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
                        <h3 class="text-2xl font-bold text-gray-800 mt-4">${repo.name}</h3>
                        <a href="${repo.html_url}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700">View on GitHub</a>
                        ${livePreviewUrl ? `<button class="mt-4 ml-4 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700" onclick="openFullscreenPreview('${livePreviewUrl}')">Live Preview</button>` : ''}
                    </div>
                `;
                projectsContainer.innerHTML += projectCard;
            });
        });
</script>

<style>
    /* Fullscreen overlay for the project preview */
    .fullscreen-overlay {
        opacity: 0;
        visibility: hidden;
        display: flex;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        justify-content: center;
        align-items: center;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .fullscreen-overlay.show {
        opacity: 1;
        visibility: visible;
    }

    .fullscreen-overlay iframe {
        width: 90%;
        height: 90%;
        border: none;
        border-radius: 10px;
        transform: scale(0.9);
        transition: transform 0.3s ease;
    }

    .fullscreen-overlay.show iframe {
        transform: scale(1);
    }


    /* Project Card */
    .project-item {
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: white;
        min-height: 50vh;
    }

    .project-item:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
    }

    /* Loading Skeleton */
    .skeleton {
        background: #f2f2f2;
        border-radius: 12px;
        width: 100%;
        height: 200px;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .grid-cols-3 {
            grid-template-columns: 1fr;
        }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
        .grid-cols-3 {
            grid-template-columns: 1fr 1fr;
        }
    }
</style>
