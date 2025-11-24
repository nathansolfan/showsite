<x-layout>

    <div class="flex flex-col">
        @foreach($users as $user)
            {{$user->name}}
            <a href="/user/{{$user->id}}">Check</a>

        @endforeach

    </div>





</x-layout>
