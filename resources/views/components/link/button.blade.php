@props(['href' => '/'])
<a href="{{ $href }}" {{ $attributes->class(['btn', 'p-1', 'px-md-3', 'py-md-2']) }}>
    {{ $slot }}
</a>
