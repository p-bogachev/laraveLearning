@extends('layouts.main')

@section('page.title', 'Edit post')

@section('main.content')

    <x-title>
        {{ __('Edit post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts.show', $post->id) }}">
                {{ 'Back' }}
            </a>
        </x-slot>
    </x-title>


    <x-post.form action="{{ route('user.posts.update', $post->id) }}" method="put" :post="$post">
        <x-button type="submit">
            {{ 'Save' }}
        </x-button>
    </x-post.form>
@endsection
