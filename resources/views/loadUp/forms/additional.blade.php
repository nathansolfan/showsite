,<x-layout>
    @php
        $fakeService = (object) [
            'id' => 4,
            'name' => 'Others'
            ]
    @endphp

    <x-forms.vanForm
        :service="$fakeService"
    >


    </x-forms.vanForm>
</x-layout>
