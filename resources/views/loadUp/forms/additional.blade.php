<x-layout>
    @php
        $service = (object) [
            'id' => 3,
            'name' => 'Additional Services',
            'icon' => '🔧'
        ];

        $fields = [
            [
                'name' => 'service_type',
                'type' => 'select',
                'label' => 'Service Type',
                'required' => true,

                'options' =>
                [
                'assembly' => 'Furniture Assembly',
                'store_pickup' => 'Store Pickup',
                'delivery' => 'Delivery Only',
                'other' => 'Other',
                ],

                [
                'name' => 'special_requirements',
                'type' => 'textarea',
                'label' => 'Special Requirements',
                'placeholder' => 'Tell us more about what you need...',
                ]
            ]
    ];

    @endphp

    <x-forms.vanForm :service="$service" :fields="$fields"/>
</x-layout>
