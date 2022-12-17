@php
    use Illuminate\Support\Str;
    $id = Str::uuid();
@endphp
<div class="form-check">
    <input type="checkbox" {{ $attributes->merge([
    'value' => 1,
]) }} class="form-check-input" id="{{ $id }}">

    <label class="form-check-label" for="{{ $id }}">
        {{ $slot }}
    </label>
</div>
