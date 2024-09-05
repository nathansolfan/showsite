// dogApi.js
export const dogApiGenerator = {
    name: 'DogAPIGenerator',
    liveUrl: 'https://dog-photo-app-one.vercel.app/',
    description: 'A random dog image generator using an API to fetch adorable dog photos and information.',
    githubUrl: 'https://github.com/nathansolfan/DogAPIGenerator',
};

export function createDogApiProjectCard(container) {
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
