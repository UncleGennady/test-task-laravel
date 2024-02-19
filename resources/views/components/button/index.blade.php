<button {{ $attributes->class(['btn', 'p-1', 'px-md-3', 'py-md-2'])->merge([
    'type' => 'button',
]) }}>
    {{ $slot }}
</button>
