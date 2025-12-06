<x-layout>

    <x-forms.userForm
        title="Edit your account"
        action="/user/{{$user->id}}"
        method="PATCH"
{{--        paragraph="Edit your account"--}}
        btn-submit="Update"
        :value="$user"
        value="{{old('email', $value->email ?? '')}}"


    />


</x-layout>
