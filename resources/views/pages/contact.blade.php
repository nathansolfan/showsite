<x-layout>
    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white dark:bg-gray-900">
      <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 dark:text-gray-100">
          Contact Me
        </h2>
        <p class="mt-4 text-lg text-center max-w-2xl mx-auto text-gray-600 dark:text-gray-300">
          I'd love to hear from you! Please fill out the form below to get in touch.
        </p>

        <div class="mt-10 max-w-lg mx-auto">
          <form action="#" method="POST" novalidate class="space-y-6">
            @csrf
            <!-- Name Field -->
            <div>
              <label for="name" class="block text-gray-700 dark:text-gray-200">Name</label>
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Your Name"
                aria-required="true"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200"
                required>
            </div>

            <!-- Email Field -->
            <div>
              <label for="email" class="block text-gray-700 dark:text-gray-200">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="you@example.com"
                aria-required="true"
                autocomplete="email"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200"
                required>
            </div>

            <!-- Message Field -->
            <div>
              <label for="message" class="block text-gray-700 dark:text-gray-200">Message</label>
              <textarea
                id="message"
                name="message"
                rows="5"
                placeholder="Your Message..."
                aria-required="true"
                class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-700 rounded-md bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-200"
                required></textarea>
            </div>

            <!-- Honeypot Field (hidden from users) -->
            <div class="hidden">
              <label for="honeypot" class="block">Leave this field empty</label>
              <input type="text" id="honeypot" name="honeypot">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
              <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 transition-colors duration-200 text-white py-3 px-6 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>


{{--  --}}





    <div class="w-full max-w-[16rem] mx-auto">
        <div class="relative">
            <label for="npm-install-copy-button" class="sr-only">Label</label>
            <input id="npm-install-copy-button" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="nathansolfan@gmail.com" disabled readonly>
            <button data-copy-to-clipboard-target="npm-install-copy-button" data-tooltip-target="tooltip-copy-npm-install-copy-button" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center">
                <span id="default-icon">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                    </svg>
                </span>
                <span id="success-icon" class="hidden">
                    <svg class="w-3.5 h-3.5 text-blue-700 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                </span>
            </button>
            <div id="tooltip-copy-npm-install-copy-button" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-xs opacity-0 tooltip dark:bg-gray-700">
                <span id="default-tooltip-message">Copy to clipboard</span>
                <span id="success-tooltip-message" class="hidden">Copied!</span>
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </div>



  </x-layout>
