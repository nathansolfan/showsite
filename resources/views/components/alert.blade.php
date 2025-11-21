@props([
    'type',
    'message'
    ])

@php

$typeClasses = match($type) {
    'error' => 'bg-red-100 text-red-700',
    'success' => 'bg-green-100 text-green-700',
    default => 'bg-gray-100 text-gray-700'
}

@endphp

<div {{ $attributes->merge(['class' => "p-3 rounded text-sm mb-4 $typeClasses"]) }} >

    {{$slot}}

</div>
