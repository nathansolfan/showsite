<x-layout>
    @php
        $service = (object) [
            'id' => 3,
            'name' => 'Additional Services',
            'icon' => '🔧'
        ];

        $fields = [];
    @endphp

    <x-forms.vanForm :service="$service" :fields="$fields" />
</x-layout>
