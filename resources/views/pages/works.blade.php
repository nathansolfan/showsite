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

    <!-- Fullscreen Overlay for Project Preview -->
    <div id="fullscreen-overlay" class="fullscreen-overlay">
        <button class="close-btn" onclick="closeFullscreenPreview()">Close</button>
        <iframe id="fullscreen-iframe" src=""></iframe>
    </div>

</x-layout>

<script>
    const githubUsername = 'nathansolfan';
    const projectsContainer = document.getElementById('github-projects');

    function getLivePreviewUrl(repoName) {
        const livePreviewLinks = {
            'DogAPIGenerator': 'https://dog-photo-app-one.vercel.app/', // Replace with your actual repo name if different
            'ProjectManagement' : 'https://f4dc5472-7b94-4d5d-9d3c-47a593936bae-00-9rdbdkg59zgu.kirk.replit.dev/',
            'cleaning-service' : 'https://b6e1d417-8813-4644-8809-ac80d0e28676-00-316gxfu84tyex.janeway.replit.dev/'
        };
        return livePreviewLinks[repoName] || null;
    }

    function openFullscreenPreview(url) {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');

        iframe.src = url;
        overlay.style.display = 'flex';
    }

    function closeFullscreenPreview() {
        const overlay = document.getElementById('fullscreen-overlay');
        const iframe = document.getElementById('fullscreen-iframe');

        iframe.src = ''; // Clear the iframe src to stop loading the page
        overlay.style.display = 'none';
    }

    fetch(`https://api.github.com/users/${githubUsername}/repos?sort=updated&per_page=6`)
        .then(response => response.json())
        .then(data => {
            data.forEach(repo => {
                const livePreviewUrl = getLivePreviewUrl(repo.name);

                const projectCard = `
                    <div class="project-item text-center bg-white p-6 rounded-lg shadow-lg">
                        <div class="project-info">
                            <h3 class="text-2xl font-bold text-gray-800 mt-4">${repo.name}</h3>
                            <p class="mt-2 text-gray-600">${repo.description || 'No description available.'}</p>
                            <a href="${repo.html_url}" target="_blank" class="mt-4 inline-block bg-blue-600 text-white py-2 px-4 rounded-full hover:bg-blue-700">View on GitHub</a>
                            ${livePreviewUrl ? `<button class="mt-4 ml-4 inline-block bg-green-600 text-white py-2 px-4 rounded-full hover:bg-green-700" onclick="openFullscreenPreview('${livePreviewUrl}')">Live Preview</button>` : ''}
                        </div>
                    </div>
                `;
                projectsContainer.innerHTML += projectCard;
            });
        });
</script>

<style>
    /* Fullscreen overlay for the project preview */
    .fullscreen-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .fullscreen-overlay iframe {
        width: 90%;
        height: 90%;
        border: none;
        border-radius: 10px;
    }

    .fullscreen-overlay .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        background-color: #ffffff;
        color: #333;
        padding: 10px 15px;
        font-size: 18px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        z-index:
