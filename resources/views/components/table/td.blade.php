@props(['align' => 'left', 'class_td' => ''])

@php
    $textAlign = [
        'left' => 'text-left',
        'right' => 'text-right',
        'center' => 'text-center'
    ][$align] ?? 'text-left';
@endphp

<td class="px-2 {{ $textAlign }} col-{{ $class_td }}">
    {{ $slot }}
</td>
