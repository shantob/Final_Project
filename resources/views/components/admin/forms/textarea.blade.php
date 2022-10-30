@props(['name', 'type' => 'text', 'label' => '', 'value' => ''])

<div class="mb-3">
    @if ($label)
        <label for="{{ $name }}Input" class="form-label">{{ $label }}</label>
    @endif


    <textarea name="{{ $name }}" id="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-control', 'class' => 'w-100']) }}>{!! $value !!}
    
        @error($name)
<div class="form-text text-danger">{{ $message }}</div>
@enderror
    </textarea>



</div>
