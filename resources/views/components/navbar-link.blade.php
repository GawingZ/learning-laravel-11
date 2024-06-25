@props(['href', 'label', 'isActive'])

@php
    $classes = "text-gray-300 hover:bg-gray-700 hover:text-white";
    if($isActive){
        $classes .= 'text-white bg-gray-900';
    }
@endphp

<a href="{{ $href }}" class="rounded-md px-3 py-2 text-sm font-medium {{ $classes }}">{{ $label }}</a>
