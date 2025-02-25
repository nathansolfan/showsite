<x-layout>
    <!-- Display Feedback Section -->
    <section id="display-feedback" class="py-20 bg-gradient-to-r from-blue-50 to-white">
        <div class="container mx-auto text-center">
          <h2 class="text-4xl font-bold text-gray-800">
            <i class="fas fa-comments mr-2"></i> Feedback & Testimonials
          </h2>
          <p class="text-lg text-gray-600 mt-4">
            Here’s what people I’ve worked with have to say about me.
          </p>

          @if ($feedbacks->isEmpty())
            <p class="text-gray-500 mt-8">No feedback available yet. Be the first to leave one!</p>
          @else
            <div class="mt-10 flex flex-wrap justify-center gap-8">
              @foreach ($feedbacks as $feedback)
                <div class="bg-gray-50 p-6 rounded-lg shadow-lg hover:shadow-xl transition max-w-md">
                  <p class="text-gray-700 italic">"{{ $feedback->message }}"</p>
                  <p class="mt-4 text-sm text-gray-500">- {{ $feedback->name }}</p>
                </div>
              @endforeach
            </div>
          @endif
        </div>
      </section>

    <!-- Leave Feedback Section -->
    <section id="leave-feedback" class="py-20 bg-gray-50">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800">Leave Your Feedback</h2>
            <p class="text-lg text-gray-600 text-center mt-4">We value your feedback! Share your thoughts below.</p>

            <form action="{{ route('feedback.store') }}" method="POST" class="max-w-2xl mx-auto mt-8 bg-white p-8 rounded-lg shadow-lg">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">Email (Optional)</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-medium">Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 shadow-md">
                        Submit Feedback
                    </button>
                </div>
            </form>
        </div>
    </section>
</x-layout>
