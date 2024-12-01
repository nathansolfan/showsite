<x-layout>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <section class="relative bg-gradient-to-r from-blue-500 to-blue-400 text-white py-20">
        <div class="container mx-auto text-center">
            {{-- <img src="{{ asset('images/profile.jpg') }}" alt="Profile Photo" class="w-32 h-32 mx-auto rounded-full shadow-lg"> --}}
            <h1 class="text-5xl font-bold mt-6">Nathan Ferreira</h1>
            <p class="text-xl mt-4">Web Developer | Frontend & Backend Specialist</p>
            <a href="{{ asset('download/CVNathanFerreira.pdf') }}" download class="mt-6 inline-block bg-white text-blue-500 py-2 px-4 rounded-lg shadow hover:bg-gray-100 transition">
                <i class="fas fa-download mr-2"></i> Download My CV
            </a>
        </div>
    </section>


    <!-- Personal Statement Section -->
    <section id="statement" class="py-20 bg-gradient-to-r from-blue-50 to-white">
        <div class="container mx-auto">
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
                <h2 class="text-4xl font-bold text-center text-gray-800">Personal Statement</h2>
                <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                    I'm a passionate web developer skilled in both front-end and back-end development. My expertise includes HTML, CSS, JavaScript, PHP, React.js, Node.js, Git, MySQL, and MongoDB.
                </p>
                <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                    I constantly seek to improve, staying updated with web development trends to tackle exciting projects. My commitment to quality makes me a valuable addition to any team.
                </p>
            </div>
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



    <!-- Techinical Skills Section -->
    <section id="skills" class="py-20 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">
                <i class="fas fa-tools mr-2"></i> Technical Skills
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
                <div class="flex items-center bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <i class="fas fa-code text-4xl text-blue-500 mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Languages</h3>
                        <p class="text-gray-600">HTML, CSS, JavaScript, PHP</p>
                    </div>
                </div>
                <div class="flex items-center bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <i class="fas fa-layer-group text-4xl text-blue-500 mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Frameworks & Libraries</h3>
                        <p class="text-gray-600">Laravel, React, Node.js, Tailwind CSS</p>
                    </div>
                </div>
                <div class="flex items-center bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
                    <i class="fas fa-database text-4xl text-blue-500 mr-4"></i>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800">Databases</h3>
                        <p class="text-gray-600">MySQL, MongoDB</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Specializations Section -->
    <section id="specializations" class="py-20 bg-gray-100">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">
                <i class="fas fa-code mr-2"></i> Specializations
            </h2>            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-10">
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
            <h2 class="text-4xl font-bold text-center text-gray-800">
                <i class="fas fa-graduation-cap mr-2"></i> Education
            </h2>            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
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
