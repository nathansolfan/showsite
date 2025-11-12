<x-layout>
    <!-- ==========================================
         HERO SECTION
         ========================================== -->
    <section class="relative py-12 bg-gradient-to-b from-blue-50 to-white overflow-hidden">
        <!-- Container -->
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Client Testimonials
                </h1>
                <p class="text-lg text-gray-600">
                    Every project is a partnership. Discover what others have experienced working with me.
                </p>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 -mt-10 -mr-10 hidden md:block opacity-20">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="60" cy="60" r="59.5" stroke="#4F46E5" stroke-dasharray="4 4"/>
            </svg>
        </div>
        <div class="absolute bottom-0 left-0 -mb-10 -ml-10 hidden md:block opacity-20">
            <svg width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="60" cy="60" r="59.5" stroke="#4F46E5" stroke-dasharray="4 4"/>
            </svg>
        </div>
    </section>

    <!-- ==========================================
         DISPLAY FEEDBACK SECTION
         ========================================== -->
    <section id="display-feedback" class="py-16 md:py-24">
        <div class="container mx-auto px-4">
            <!-- Empty State -->
            @if ($feedbacks->isEmpty())
                <div class="bg-blue-50 border border-blue-100 p-8 rounded-xl text-center max-w-2xl mx-auto">
                    <svg class="w-16 h-16 text-blue-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                              d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                        </path>
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Be the First to Share!</h3>
                    <p class="text-gray-600">
                        No testimonials have been submitted yet. Share your experience and be the first to leave feedback!
                    </p>
                </div>
            <!-- Display Testimonials -->
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-8">
                    @foreach ($feedbacks as $feedback)
                        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300"
                             data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">

                            <!-- Quote Icon -->
                            <div class="mb-4 text-blue-500">
                                <svg class="w-10 h-10 opacity-50" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                                </svg>
                            </div>

                            <!-- Testimonial Content -->
{{--                            <p class="text-gray-700 text-lg mb-6 leading-relaxed text-center">--}}
{{--                                {{ $feedback->message }}--}}
{{--                            </p>--}}

                            <!-- Author Info -->
                            <div class="flex items-center">
                                <!-- Avatar Placeholder -->
                                <div class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold text-lg">
                                    {{ strtoupper(substr($feedback->name, 0, 1)) }}
                                </div>
                                <div class="ml-3">
                                    <h4 class="font-semibold text-gray-900">{{ $feedback->name }}</h4>
                                    @if ($feedback->email)
                                        <p class="text-sm text-gray-500">
                                            {{ Str::mask($feedback->email, '*', 3, -4) }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <!-- ==========================================
         LEAVE FEEDBACK SECTION
         ========================================== -->
    <section id="leave-feedback" class="py-24 md:py-36 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Share Your Experience
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Your feedback helps me grow and improve future collaborations.
                    </p>
                </div>

                <!-- Feedback Form -->
                <form action="{{ route('feedback.store') }}" method="POST" class="space-y-10 bg-white p-10 rounded-3xl shadow-xl" data-aos="fade-up" data-aos-delay="150">
                    @csrf

                    <!-- Name Field -->
                    <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300">
                        <label for="name" class="block text-xs font-medium text-gray-400 uppercase tracking-wide mb-2 group-focus-within:text-gray-900 transition-colors">
                            Your Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Your name"
                            class="block w-full border-0 bg-transparent focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg"
                            required>
                    </div>

                    <!-- Email Field -->
                    <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300">
                        <label for="email" class="block text-xs font-medium text-gray-400 uppercase tracking-wide mb-2 group-focus-within:text-gray-900 transition-colors">
                            Email Address <span class="text-gray-400 font-normal lowercase">(optional)</span>
                        </label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Type your email"
                            class="block w-full border-0 bg-transparent focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg">
                    </div>

                    <!-- Message Field -->
                    <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300">
                        <label for="message" class="block text-xs font-medium text-gray-400 uppercase tracking-wide mb-2 group-focus-within:text-gray-900 transition-colors">
                            Your Feedback
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            maxlength="800"
                            placeholder="Share your experience working with me..."
                            class="block w-full border-0 bg-transparent focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg resize-none"
                            required></textarea>
                    </div>

                    <!-- Honeypot -->
                    <div class="hidden">
                        <label for="honeypot">Leave this field empty</label>
                        <input type="text" id="honeypot" name="honeypot">
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-8 flex justify-end">
                        <button
                            type="submit"
                            class="inline-flex items-center bg-gray-900 text-white px-8 py-4 text-base hover:bg-gray-800 transition-colors group relative overflow-hidden rounded-xl">
                            <span class="relative z-10">Submit Testimonial</span>
                            <span class="absolute inset-0 bg-gray-800 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></span>
                            <svg class="ml-2 w-4 h-4 relative z-10 transform group-hover:translate-x-1 transition-transform"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </form>

                <!-- Thank You Note -->
                <div class="mt-12 text-center text-gray-500 text-sm" data-aos="fade-up" data-aos-delay="250">
                    <p>Thank you for sharing your thoughts — every testimonial makes a difference 💬</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         CALL-TO-ACTION SECTION
         ========================================== -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-6" data-aos="fade-up">
                Ready to Start Your Project?
            </h2>
            <p class="max-w-2xl mx-auto text-blue-100 mb-8" data-aos="fade-up" data-aos-delay="100">
                Let's create something amazing together. Contact me today to discuss your project needs.
            </p>

            <!-- Fix the route error by using URL instead of named route -->
            <a href="{{ url('/contact') }}"
               class="inline-flex items-center px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:bg-blue-50 transition shadow-lg"
               data-aos="fade-up"
               data-aos-delay="200">
                Get In Touch
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </a>
        </div>
    </section>
</x-layout>
