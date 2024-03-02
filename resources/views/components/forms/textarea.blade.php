<textarea 
    name="{{ $name }}" 
    rows="{{ $rows }}" 
    cols="{{ $cols }}" 
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => $class]) }}
>
{{ $value }}
</textarea>
