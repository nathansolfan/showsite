<x-layout>
    <!-- Hero Section with Animated Background -->
    <section class="relative min-h-[60vh] flex items-center overflow-hidden">
        <!-- Animated gradient background -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-indigo-500 to-purple-600 animate-gradient-x"></div>

        <!-- Geometric shapes background -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-64 h-64 bg-white/10 rounded-full blur-xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/3 right-1/4 w-40 h-40 bg-blue-300/10 rounded-full blur-xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight leading-none">
                    I Build <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-300 to-pink-300">Digital Experiences</span>
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    Full-stack developer passionate about crafting elegant solutions to complex problems
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ asset('download/CVNathanFerreira.pdf') }}" download
                       class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold flex items-center justify-center gap-2 hover:bg-blue-50 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <i class="fas fa-download"></i>
                        <span>Download CV</span>
                    </a>
                    <a href="#contact"
                       class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-lg font-semibold flex items-center justify-center gap-2 hover:bg-white/10 transition">
                        <i class="fas fa-paper-plane"></i>
                        <span>Get in Touch</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <!-- Left: Profile content -->
                    <div data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 inline-flex items-center">
                            <span class="w-10 h-1 bg-blue-600 inline-block mr-4"></span>
                            About Me
                        </h2>
                        <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                            I'm Nathan, a full-stack developer with a passion for crafting beautiful, functional digital experiences. I specialize in building modern web applications that solve real-world problems.
                        </p>
                        <p class="text-lg text-gray-700 mb-8 leading-relaxed">
                            My journey in web development started with curiosity about how the internet works and evolved into a career built on continuous learning and improvement. I believe in writing clean, maintainable code and creating intuitive user experiences.
                        </p>

                        <!-- Professional profiles -->
                        <div class="flex flex-wrap gap-4">
                            <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" target="_blank"
                               class="flex items-center gap-2 px-5 py-3 bg-blue-50 text-blue-600 rounded-lg hover:bg-blue-100 transition">
                                <i class="fab fa-linkedin text-lg"></i>
                                <span>LinkedIn</span>
                            </a>
                            <a href="https://github.com/nathansolfan" target="_blank"
                               class="flex items-center gap-2 px-5 py-3 bg-gray-100 text-gray-800 rounded-lg hover:bg-gray-200 transition">
                                <i class="fab fa-github text-lg"></i>
                                <span>GitHub</span>
                            </a>
                            <a href="mailto:contact@nathanferreira.com"
                               class="flex items-center gap-2 px-5 py-3 bg-gray-100 text-gray-800 rounded-lg hover:bg-gray-200 transition">
                                <i class="fas fa-envelope text-lg"></i>
                                <span>Email</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Stats and experience -->
                    <div class="bg-gray-50 p-8 rounded-2xl shadow-lg" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <span class="text-4xl font-bold text-blue-600 block">3+</span>
                                <span class="text-gray-600">Years Experience</span>
                            </div>
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <span class="text-4xl font-bold text-blue-600 block">20+</span>
                                <span class="text-gray-600">Projects Completed</span>
                            </div>
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <span class="text-4xl font-bold text-blue-600 block">10+</span>
                                <span class="text-gray-600">Technologies</span>
                            </div>
                            <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                                <span class="text-4xl font-bold text-blue-600 block">5+</span>
                                <span class="text-gray-600">Happy Clients</span>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h3 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                <i class="fas fa-layer-group text-blue-600 mr-2"></i>
                                Current Tech Stack
                            </h3>

                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                <!-- Laravel -->
                                <div class="bg-gradient-to-br from-red-50 to-red-100 p-3 rounded-xl text-center transition-all hover:shadow-md hover:-translate-y-1 group">
                                    <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-2 group-hover:shadow">
                                        <i class="fab fa-laravel text-red-500 text-2xl"></i>
                                    </div>
                                    <span class="font-medium text-gray-800">Laravel</span>
                                </div>

                                <!-- React -->
                                <div class="bg-gradient-to-br from-blue-50 to-blue-100 p-3 rounded-xl text-center transition-all hover:shadow-md hover:-translate-y-1 group">
                                    <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-2 group-hover:shadow">
                                        <i class="fab fa-react text-blue-500 text-2xl"></i>
                                    </div>
                                    <span class="font-medium text-gray-800">React</span>
                                </div>

                                <!-- Tailwind -->
                                <div class="bg-gradient-to-br from-teal-50 to-teal-100 p-3 rounded-xl text-center transition-all hover:shadow-md hover:-translate-y-1 group">
                                    <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-2 group-hover:shadow">
                                        <svg class="w-6 h-6 text-teal-500" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z"/>
                                        </svg>
                                    </div>
                                    <span class="font-medium text-gray-800">Tailwind</span>
                                </div>

                                <!-- JavaScript -->
                                <div class="bg-gradient-to-br from-yellow-50 to-yellow-100 p-3 rounded-xl text-center transition-all hover:shadow-md hover:-translate-y-1 group">
                                    <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-2 group-hover:shadow">
                                        <i class="fab fa-js text-yellow-500 text-2xl"></i>
                                    </div>
                                    <span class="font-medium text-gray-800">JavaScript</span>
                                </div>

                                <!-- MySQL -->
                                <div class="bg-gradient-to-br from-blue-50 to-indigo-100 p-3 rounded-xl text-center transition-all hover:shadow-md hover:-translate-y-1 group">
                                    <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-2 group-hover:shadow">
                                        <i class="fas fa-database text-indigo-500 text-2xl"></i>
                                    </div>
                                    <span class="font-medium text-gray-800">MySQL</span>
                                </div>

                                <!-- PHP -->
                                <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-3 rounded-xl text-center transition-all hover:shadow-md hover:-translate-y-1 group">
                                    <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-2 group-hover:shadow">
                                        <i class="fab fa-php text-indigo-600 text-2xl"></i>
                                    </div>
                                    <span class="font-medium text-gray-800">PHP</span>
                                </div>

                                <!-- Node.js -->
                                <div class="bg-gradient-to-br from-green-50 to-green-100 p-3 rounded-xl text-center transition-all hover:shadow-md hover:-translate-y-1 group">
                                    <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-2 group-hover:shadow">
                                        <i class="fab fa-node-js text-green-600 text-2xl"></i>
                                    </div>
                                    <span class="font-medium text-gray-800">Node.js</span>
                                </div>

                                <!-- Git -->
                                <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-3 rounded-xl text-center transition-all hover:shadow-md hover:-translate-y-1 group">
                                    <div class="w-12 h-12 mx-auto bg-white rounded-full flex items-center justify-center shadow-sm mb-2 group-hover:shadow">
                                        <i class="fab fa-git-alt text-orange-600 text-2xl"></i>
                                    </div>
                                    <span class="font-medium text-gray-800">Git</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills & Expertise -->
    <section class="py-24 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">My Expertise</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        I specialize in building full-stack web applications with modern technologies.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Frontend -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all" data-aos="zoom-in" data-aos-delay="100">
                        <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-code text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Frontend Development</h3>
                        <p class="text-gray-600 mb-6">
                            Creating responsive, interactive user interfaces using modern frameworks and design principles.
                        </p>
                        <div class="space-y-3">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">React</span>
                                <span class="text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>

                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Tailwind CSS</span>
                                <span class="text-gray-500">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                            </div>

                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">JavaScript</span>
                                <span class="text-gray-500">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Backend -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all" data-aos="zoom-in" data-aos-delay="200">
                        <div class="w-16 h-16 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-server text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Backend Development</h3>
                        <p class="text-gray-600 mb-6">
                            Building robust, scalable server-side applications and APIs to power web applications.
                        </p>
                        <div class="space-y-3">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Laravel</span>
                                <span class="text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>

                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">PHP</span>
                                <span class="text-gray-500">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 85%"></div>
                            </div>

                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">MySQL</span>
                                <span class="text-gray-500">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-indigo-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools & Deployment -->
                    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all" data-aos="zoom-in" data-aos-delay="300">
                        <div class="w-16 h-16 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-6">
                            <i class="fas fa-tools text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Tools & Deployment</h3>
                        <p class="text-gray-600 mb-6">
                            Using modern development workflows and deployment strategies to deliver quality software.
                        </p>
                        <div class="space-y-3">
                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Git & GitHub</span>
                                <span class="text-gray-500">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-600 h-2 rounded-full" style="width: 90%"></div>
                            </div>

                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">CI/CD</span>
                                <span class="text-gray-500">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-600 h-2 rounded-full" style="width: 75%"></div>
                            </div>

                            <div class="flex justify-between mb-1">
                                <span class="text-gray-700">Server Management</span>
                                <span class="text-gray-500">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-600 h-2 rounded-full" style="width: 80%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education & Experience -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Experience & Education</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        My professional journey and educational background
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                    <!-- Experience Timeline -->
                    <div data-aos="fade-right">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-8 flex items-center">
                            <span class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-briefcase"></i>
                            </span>
                            Professional Experience
                        </h3>

                        <div class="relative pl-8 border-l-2 border-blue-600 space-y-10">
                            <!-- Experience Item 1 -->
                            <div class="relative">
                                <div class="absolute -left-[25px] w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="pl-6">
                                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full mb-2">
                                        2025 - 2025
                                    </span>
                                    <h4 class="text-xl font-bold text-gray-800">Junior Web Developer</h4>
                                    <p class="text-gray-700 mt-2 font-semibold">
                                        Entigy Software - Crewe/UK
                                    </p>
                                    <p class="text-gray-700 mt-2">
                                        Building custom websites and web applications for clients across various industries. Specializing in Laravel and React development.
                                    </p>
                                </div>
                            </div>

                            <!-- Experience Item 2 -->
                            <div class="relative">
                                <div class="absolute -left-[25px] w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div class="pl-6">
                                    <span class="inline-block px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full mb-2">
                                        2023-Present
                                    </span>
                                    <h4 class="text-xl font-bold text-gray-800">Web Developer</h4>
                                    <p class="text-gray-700 mt-2 font-semibold">
                                        Upwork - UK
                                    </p>
                                    <p class="text-gray-700 mt-2">
                                        Worked on frontend development projects, focusing on responsive design and user experience. Collaborated with design and backend teams.
                                    </p>
                                </div>
                            </div>

                            <!-- Add more experience items as needed -->
                        </div>
                    </div>

                    <!-- Education Timeline -->
                    <div data-aos="fade-left">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-8 flex items-center">
                            <span class="w-10 h-10 bg-indigo-600 text-white rounded-full flex items-center justify-center mr-4">
                                <i class="fas fa-graduation-cap"></i>
                            </span>
                            Educational Background
                        </h3>

                        <div class="relative pl-8 border-l-2 border-indigo-600 space-y-10">
                            <!-- Education Item 1 -->
                            <div class="relative">
                                <div class="absolute -left-[25px] w-12 h-12 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-certificate"></i>
                                </div>
                                <div class="pl-6">
                                    <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-semibold rounded-full mb-2">
                                        2023
                                    </span>
                                    <h4 class="text-xl font-bold text-gray-800">Codenation</h4>
                                    <p class="text-gray-700 mt-2">
                                        Web Developer Certificate. Comprehensive training in HTML, CSS, JavaScript, PHP, React, Node.js, MySQL, and Python.
                                    </p>
                                </div>
                            </div>

                            <!-- Education Item 2 -->
                            <div class="relative">
                                <div class="absolute -left-[25px] w-12 h-12 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center">
                                    <i class="fas fa-school"></i>
                                </div>
                                <div class="pl-6">
                                    <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-semibold rounded-full mb-2">
                                        2012
                                    </span>
                                    <h4 class="text-xl font-bold text-gray-800">I.S.I.S.S Dal Cero</h4>
                                    <p class="text-gray-700 mt-2">
                                        Coursework in Civil Construction, Topography, Real Estate Appraisal, and Technical Drawing.
                                    </p>
                                </div>
                            </div>

                            <!-- Add more education items as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Let's Work Together</h2>
                <p class="text-xl text-gray-300 mb-10 max-w-3xl mx-auto">
                    I'm currently available for freelance work. If you have a project that needs some creative coding, I'd love to hear about it.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center mb-12">
                    <div class="bg-gray-800 p-6 rounded-xl">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Email</h3>
                        <p class="text-blue-300">contact@nathanferreira.com</p>
                    </div>

                    <div class="bg-gray-800 p-6 rounded-xl">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Location</h3>
                        <p class="text-blue-300">Liverpool, United Kingdom</p>
                    </div>

                    <div class="bg-gray-800 p-6 rounded-xl">
                        <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Social</h3>
                        <div class="flex justify-center space-x-4 mt-2">
                            <a href="https://github.com/nathansolfan" class="text-white hover:text-blue-300 transition">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/nathan-ferreira-023252b1/" class="text-white hover:text-blue-300 transition">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                            <a href="#" class="text-white hover:text-blue-300 transition">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="mailto:contact@nathanferreira.com" class="inline-block px-8 py-4 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition shadow-lg">
                    Get In Touch
                </a>
            </div>
        </div>
    </section>

    <!-- Add CSS for animations in <style> section -->
    <style>
        @keyframes gradient-x {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradient-x 15s ease infinite;
        }
    </style>
</x-layout>
