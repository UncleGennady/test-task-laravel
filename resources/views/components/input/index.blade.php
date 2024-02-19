@props([
    'initialValue' => null,
    'type' => 'text',
    'title' => 'Default title',
    'id' => 'defaultInput',
    'placeholder' => 'text',
    'name' => 'default_input',
])
<h5>
    {{ $title }}
</h5>
<div class="mb-2">
    <label for="{{ $id }}" class="form-label"></label>
    <input type="{{ $type }}" name="{{ $name }}" {{ $attributes->class(['form-control']) }}
        id="{{ $id }}" placeholder="{{ $placeholder }}" value="{{ !!$initialValue ? $initialValue : '' }}"
        required />
</div>
