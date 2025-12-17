<?php

namespace App\Services;

class BookingServiceConfig
{
    public static function getFieldsForService(string $serviceName): array
    {
        $configs = [
            'Removals & Moving Services' => [
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
            ],

            'Recycling & Disposal' => [
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
            ],

            'Additional Services' => [
                [
                    'name' => 'service_type',
                    'type' => 'select',
                    'label' => 'Service Type',
                    'required' => true,
                    'options' => [
                        'assembly' => 'Furniture Assembly',
                        'store_pickup' => 'Store Pickup',
                        'delivery' => 'Delivery Only',
                        'other' => 'Other',
                    ]
                ],
                [
                    'name' => 'special_requirements',
                    'type' => 'textarea',
                    'label' => 'Special Requirements',
                    'placeholder' => 'Tell us more about what you need...',
                ]
            ],
        ];

        return $configs[$serviceName] ?? [];
    }
}
