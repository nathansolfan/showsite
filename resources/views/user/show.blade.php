<x-layout>

    <div>
        {{$user->name}}
        <a href="/user/{{$user->id}}/edit">Edit</a>
    </div>

</x-layout>
