<x-layout title="{{ $title }}">
    @if ($slug === 'rahasia')
            <h1>Anjay, kamu menemukan halaman rahasia</h1>
    @else 
            <h1>Selamat datang</h1>
            <h2>Hello World! {{ $slug }}</h2>
    @endif
</x-layout>