<x-layout>
    @php
        $service = \App\Models\LoadUp\Service::firstOrCreate(
            ['name' => 'Recycling & Disposal'],
            ['icon' => '♻️']
        );

        $fields = [
    [
        'name' => 'volume_estimate',
        'type' => 'select',
        'label' => 'Estimated Volume',
        'required' => true,
        'options' => [
            'small' => 'Small (few bags)',
            'medium' => 'Medium (car boot)',
            'large' => 'Large (van load)',
            'extra_large' => 'Extra Large',
        ]
    ],
    [
        'name' => 'item_condition',
        'type' => 'select',
        'label' => 'Item Condition',
        'options' => [
            'working' => 'Working / Good',
            'broken' => 'Broken / Damaged',
            'mixed' => 'Mixed',
        ]
    ],
];
    @endphp

    <x-forms.vanForm
        :service="$service"
        :fields="$fields"
        action="/bookings"
    />
</x-layout>
