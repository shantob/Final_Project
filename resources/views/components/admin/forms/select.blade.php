@props(['name', 'label' => '', 'values' => '', 'color' => '', 'selectedval' => []])


<div class="mb-3 ">
    @if ($label)
        <label for="{{ $name }}Input">{{ $label }}</label><br>
    @endif
    <select name="{{ $name }}" id="{{ $name }}Input"
        {{ $attributes->merge(['class' => 'form-control']) }}>
        <option value="">Select One</option>
        @foreach ($values as $key => $option)
            <option
                @if ($color != null) style="color: 
             @foreach ($color as $color_code)
             {{ $color_code }}"
            @endforeach @endIf
                value="{{ $key }}" @if ($selectedval == $key) selected @endif>{{ $option }}
            </option>
        @endforeach
    </select>
    <br>


    @error($name)
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
