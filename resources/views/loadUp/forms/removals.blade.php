<x-layout>
    @php
        $service = (object) [
            'id' => 1,
            'name' => 'Removals & Moving Services',
            'icon' => '🚚'
        ];


        $fields = [];
    @endphp

    <x-forms.vanForm :service="$service" :fields="$fields" />
</x-layout>
