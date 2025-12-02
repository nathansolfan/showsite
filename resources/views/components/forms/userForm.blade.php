@props([
    'action',
    'title'     => '',
    'paragraph' => '',
    'button1'   => '',
    'button2'   => '',
    'value'     => null,
    'showName'  => true
])


<section id="" class="py-20 md:py-36 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    {{$title}}
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    {{$paragraph}}
                </p>
            </div>

            <!-- Create Form -->
            <form action="{{$action}}" method="POST" class="space-y-10 bg-white p-10 rounded shadow-xl" data-aos="fade-up" data-aos-delay="150">
                @csrf

                @if($showName)
                    <!-- Name Field -->
                    <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300">
                        <label for="name" class="block text-xs font-medium text-gray-400 uppercase tracking-wide mb-2 group-focus-within:text-gray-900 transition-colors">
                            Your Name
                        </label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name', $value->name ?? '') }}"
                            placeholder="Your name"
                            class="block w-full border-0 bg-transparent focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg"
                            required>
                    </div>
                @endif


                <!-- Email Field -->
                <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300">
                    <label for="email" class="block text-xs font-medium text-gray-400 uppercase tracking-wide mb-2 group-focus-within:text-gray-900 transition-colors">
                        Email Address <span class="text-gray-400 font-normal lowercase"></span>
                    </label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Type your email"
                        class="block w-full border-0 bg-transparent focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg">
                </div>

                <!-- Password Field -->
                <div class="group border-b border-gray-200 focus-within:border-gray-900 pb-1 transition-all duration-300">
                    <label for="password" class="block text-xs font-medium text-gray-400 uppercase tracking-wide mb-2 group-focus-within:text-gray-900 transition-colors">
                        Password <span class="text-gray-400 font-normal lowercase"></span>
                    </label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Type your password"
                        class="block w-full border-0 bg-transparent focus:ring-0 p-0 pb-2 placeholder-gray-300 text-gray-900 text-lg">
                </div>





                <!-- Honeypot -->
                <div class="hidden">
                    <label for="honeypot">Leave this field empty</label>
                    <input type="text" id="honeypot" name="honeypot">
                </div>


                <!-- Login Button -->
                <div class="pt-4 flex justify-end gap-2">

                    <!-- good to remember -->
                    @if(!empty($button1))
                        <a
                            href="/login"
                            class="inline-flex items-center bg-gray-900 text-white px-8 py-4 text-base hover:bg-gray-800 transition-colors group relative overflow-hidden rounded-xl">
                            <span class="relative z-10">{{$button1}}</span>
                            <span class="absolute inset-0 bg-gray-800 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></span>
                            <svg class="ml-2 w-4 h-4 relative z-10 transform group-hover:translate-x-1 transition-transform"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>

                    @endif

                <!-- Submit Button -->
                    <button
                        type="submit"
                        class="inline-flex items-center bg-gray-900 text-white px-3 py-3 text-base hover:bg-gray-800 transition-colors group relative overflow-hidden rounded-xl">
                        <span class="relative z-10">{{$button2}}</span>
                        <span class="absolute inset-0 bg-gray-800 translate-y-full group-hover:translate-y-0 transition-transform duration-300"></span>
                        <svg class="ml-2 w-4 h-4 relative z-10 transform group-hover:translate-x-1 transition-transform"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </form>

            {{--                <!-- Thank You Note -->--}}
            {{--                <div class="mt-12 text-center text-gray-500 text-sm" data-aos="fade-up" data-aos-delay="250">--}}
            {{--                    <p>Thank you for sharing your thoughts — every testimonial makes a difference 💬</p>--}}
            {{--                </div>--}}
        </div>
    </div>
</section>
