@props(['name', 'label' => '', 'checkList' => [], 'checkedItem' => []])

<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
    @endif
</div>
@foreach ($checkList as $key => $value)
    <div class="form-check">
        <input name="{{ $name }}" type="checkbox" id="{{ $key }}Input"
            {{ $attributes->merge(['class' => 'form-check-input']) }} value="{{ $key }}"

            @if (in_array($key, $checkedItem)) checked @endif>

        <label for="{{ $key }}Input" class="form-check-label">{{ $value }}</label>
    </div>
@endforeach
@error($name)
    <div class="form-text text-danger">{{ $message }}</div>
@enderror
