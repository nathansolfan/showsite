<x-layout>
    <section class="py-20 bg-gray-100">
      <div class="container mx-auto px-4">
        <h1 class="text-5xl font-bold text-center mb-8">Welcome to My Blog</h1>
        <p class="text-lg text-center text-gray-700 mb-12">
          Sharing my journey, insights, and projects along the way.
        </p>

        <!-- Placeholder blog posts grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Blog Post Title 1</h2>
            <a href="{{ route('blog.show', 'dogProject') }}" class="text-blue-600 hover:underline">View Dog Project Post</a>
            <a href="#" class="text-blue-600 hover:underline">Read More &rarr;</a>
          </div>
          <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Blog Post Title 2</h2>
            <p class="text-gray-700 mb-4">
              Here’s a brief overview of the second blog post. Stay tuned for more insights.
            </p>
            <a href="#" class="text-blue-600 hover:underline">Read More &rarr;</a>
          </div>
          <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Blog Post Title 3</h2>
            <p class="text-gray-700 mb-4">
              This is a placeholder for the third blog post. More exciting content is on the way.
            </p>
            <a href="#" class="text-blue-600 hover:underline">Read More &rarr;</a>
          </div>
        </div>
      </div>
    </section>
  </x-layout>
