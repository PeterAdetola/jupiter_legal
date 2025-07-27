<!-- resources/views/components/image.blade.php -->
<img {{ $attributes->merge(['class' => 'img-fluid', 'loading' => 'lazy']) }} src="{{ Vite::asset($src) }}" alt="{{ $alt }}">
