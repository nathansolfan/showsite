<x-layout>
    <!-- Profile Section -->
    <section id="about" class="py-20 bg-gradient-to-r from-blue-50 to-white">
        <div class="container mx-auto text-center">
            <img src="{{ asset('images/profile-picture.jpg') }}" alt="Nathan Ferreira" class="rounded-full w-32 h-32 mx-auto mb-6">
            <h1 class="text-5xl font-bold text-gray-800">Nathan Ferreira</h1>
            <p class="text-xl text-gray-600">Web Developer | Frontend & Backend Specialist</p>
        </div>
    </section>


    {{-- Download PDF CV --}}
    <section class="py-10 text-center">
        <a href="{{ asset('download/CVNathanFerreira.pdf') }}" download class="inline-flex items-center bg-blue-600 text-white px-8 py-4 rounded-lg shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">
            <i class="fas fa-download mr-2"></i> Download My CV
        </a>

    </section>

    <!-- Personal Statement Section -->
    <section id="statement" class="py-20 bg-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">Personal Statement</h2>
            <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto text-center leading-relaxed">
                I'm a passionate web developer skilled in both front-end and back-end development. My expertise includes HTML, CSS, JavaScript, PHP, React.js, Node.js, Git, MySQL, and MongoDB.
            </p>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto text-center leading-relaxed">
                I constantly seek to improve, staying updated with web development trends to tackle exciting projects. My commitment to quality makes me a valuable addition to any team.
            </p>
        </div>
    </section>

    <!-- LinkedIn Button Section -->
    <section class="py-10 bg-gray-50">
        <div class="container mx-auto text-center">
            <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" target="_blank" class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">
                <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="w-6 h-6 mr-2">
                Connect with me on LinkedIn
            </a>
        </div>
    </section>




    <!-- Technical Skills Section -->
    <section id="skills" class="py-20 bg-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">
                <i class="fas fa-tools mr-2"></i> Technical Skills
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Languages</h3>
                    <p class="mt-4 text-gray-600">HTML, CSS, JavaScript, PHP</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Frameworks & Libraries</h3>
                    <p class="mt-4 text-gray-600">Laravel, React, NodeJS, React Native, Tailwind CSS</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Databases</h3>
                    <p class="mt-4 text-gray-600">MySQL, MongoDB</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Specializations Section -->
    <section id="specializations" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">Specializations</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Frontend Development</h3>
                    <p class="mt-4 text-gray-600">Building dynamic, interactive user interfaces using JavaScript, React, and Tailwind CSS.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Backend Development</h3>
                    <p class="mt-4 text-gray-600">Proficient in Laravel/PHP and NodeJS for server-side logic with database integration.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">API Development</h3>
                    <p class="mt-4 text-gray-600">Designing and implementing RESTful APIs capable of handling CRUD operations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-white">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">Education</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-700">Codenation</h3>
                    <p class="mt-2 text-gray-600">Web Developer Certificate, Graduated: 2023</p>
                    <p class="text-gray-600">HTML, CSS, JavaScript, PHP, React, Node.js, MySQL, Python</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-700">I.S.I.S.S Dal Cero</h3>
                    <p class="mt-2 text-gray-600">Graduated: 2012</p>
                    <p class="text-gray-600">Coursework: Civil Construction, Topography, Real Estate Appraisal, Technical Drawing</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
