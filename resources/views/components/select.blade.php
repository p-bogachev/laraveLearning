@props(['value' => null, 'options' => []])

<select {{$attributes->class([
    'form-control',
]) }}>

    @foreach($options as $key => $text)
        <option value="{{ $key }}" {{ ($key == $text) ? 'selected' : null}}>
            {{ $text }}
        </option>
    @endforeach
</select>
