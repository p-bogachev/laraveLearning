@extends('layouts.main')

@section('page.title', 'Create post')

@section('main.content')

    <x-title>
        {{ __('Create post') }}

        <x-slot name="link">
            <a href="{{ route('user.posts') }}">
                {{ 'Back' }}
            </a>
        </x-slot>
    </x-title>


    <x-post.form action=" {{ route('user.posts.store') }}" method="post">
        <x-button type="submit">
            {{ __('Create post') }}
        </x-button>
    </x-post.form>
@endsection
