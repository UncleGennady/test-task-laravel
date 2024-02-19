@props(['action' => null, 'method' => 'POST'])
@php
    $check = strtoupper($method) !== 'GET' || strtoupper($method) !== 'POST';

@endphp

<form action={{ $action }}
    method={{ strtoupper($method) === 'GET' || strtoupper($method) === 'POST' ? strtoupper($method) : 'POST' }}>
    @if ($check)
        @method($method)
    @endif
    @if (strtoupper($method) !== 'GET')
        @csrf
    @endif
    {{ $slot }}
</form>
