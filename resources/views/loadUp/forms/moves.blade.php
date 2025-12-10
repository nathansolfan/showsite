,<x-layout>
    @php
        $fakeService = (object) [
            'id' => 3,
            'name' => 'Movings'
            ]
    @endphp

    <x-forms.vanForm
        :service="$fakeService"
    >


    </x-forms.vanForm>
</x-layout>
