<x-layout>

    <x-forms.userForm
        title="Edit your account"
        action="/user/{{$user->id}}"
        method="PATCH"
        title="Edit your account"
{{--        paragraph="Edit your account"--}}
        btn-submit="Update"
        :value="$user"


    />


</x-layout>
