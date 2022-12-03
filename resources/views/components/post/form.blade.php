@props(['post' => null])

<x-form {{ $attributes }} method="POST">
    <x-form-item>
        <x-label required>{{ __('Name of post') }}</x-label>
        <x-input name="title" value="{{ $post->title ?? '' }}" autofocus/>
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Post content') }}</x-label>
        <x-trix name="content" value="{{ $post->content ?? '' }}"/>
    </x-form-item>


    <x-button type="submit">
        {{ $slot }}
    </x-button>
</x-form>

