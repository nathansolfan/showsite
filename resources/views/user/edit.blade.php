<x-layout>

    <x-forms.userForm
        action="/user/{{$user->id}}"
        title="Edit your account"
{{--        paragraph="Edit your account"--}}
        button="Update"
        :value="$user"


    />


</x-layout>
