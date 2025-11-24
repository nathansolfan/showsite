<x-layout>

    <x-forms.userForm
        action="/user"
        title="Edit your account"
{{--        paragraph="Edit your account"--}}
        button="Update"
        :value="$user"


    />


</x-layout>
