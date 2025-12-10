<x-layout>
    @php
        $service = (object) [
            'id' => 1,
            'name' => 'Removals & Moving Services',
            'icon' => '🚚'
        ];


        $fields = [
    [
        'name' => 'delivery_address',
        'type' => 'text',
        'label' => 'Delivery Address',
        'placeholder' => 'Where should we deliver?',
        'required' => true,
    ],
    [
        'name' => 'delivery_postcode',
        'type' => 'text',
        'label' => 'Delivery Postcode',
        'required' => true,
    ],
    [
        'name' => 'move_type',
        'type' => 'select',
        'label' => 'Move Type',
        'required' => true,
        'options' => [
            'single_item' => 'Single Item',
            'small_move' => 'Small Move (1 room)',
            'standard_move' => 'Standard Move (1-2 bedrooms)',
            'large_move' => 'Large Move (3+ bedrooms)',
        ]
    ],
    [
        'name' => 'floor_level',
        'type' => 'select',
        'label' => 'Floor Level',
        'options' => [
            'ground' => 'Ground Floor',
            '1st' => '1st Floor',
            '2nd' => '2nd Floor',
            '3rd_plus' => '3rd Floor or Higher',
            'lift' => 'Lift Available',
        ]
    ],
];
    @endphp

    <x-forms.vanForm :service="$service" :fields="$fields" />
</x-layout>
