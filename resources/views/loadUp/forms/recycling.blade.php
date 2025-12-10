,<x-layout>
    @php
    $fakeService = (object) [
        'id' => 2,
        'name' => 'Recicyling Centre'
        ]
    @endphp

    <x-forms.vanForm
        :service="$fakeService"
    >


    </x-forms.vanForm>
</x-layout>
