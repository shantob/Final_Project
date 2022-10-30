@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <span style="margin-right: 10px">{{ $message }}</span>
        @endforeach
    </ul>
@endif
