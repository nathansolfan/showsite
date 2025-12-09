<x-layout>

    @foreach($blogs as $blog)
        <a href="blog/{{ $blog->id }}">
            {{ $blog->title }}
        </a>
    @endforeach


</x-layout>
