<x-layout>
    @php
    $fakeService = (object) [
        'id' => 1,
        'name' => 'Removal Form'
]

 @endphp


    <x-forms.vanForm
    :service="$fakeService"
    >

    </x-forms.vanForm>
</x-layout>
