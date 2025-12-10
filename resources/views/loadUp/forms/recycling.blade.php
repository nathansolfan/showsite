<x-layout>
    @php
        $service = (object) [
            'id' => 2,
            'name' => 'Recycling & Disposal',
            'icon' => '♻️'
        ];

        $fields = [];
    @endphp

    <x-forms.vanForm :service="$service" :fields="$fields" />
</x-layout>
