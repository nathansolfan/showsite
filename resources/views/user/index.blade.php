<x-layout>

    <h1>yo</h1>
    @foreach($users as $user)
        {{$user->name}}
    @endforeach


</x-layout>
