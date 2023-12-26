@props(['active', 'iconClass','navigate'])

@php
$classes = ($active ?? false)
            ? 'flex space-x-2 items-center  hover:text-pink-900  text-sm text-gray-500'
            : 'flex space-x-2 items-center  hover:text-pink-900  text-sm text-gray-500';

            
@endphp


<div class="{{ $classes }}">
    @isset($iconClass)
        <i class="{{ $iconClass }}" style="color: pink;"></i>
    @endisset
</div>

<a {{$navigate ?? true? 'wire:navigate' : ''}} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
