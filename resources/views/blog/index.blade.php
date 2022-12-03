@extends('layouts.main')

@section('page.title', 'Blog Page')

@section('main.content')

    <x-title>
        {{ __('List of posts') }}
    </x-title>

    @if(empty($posts))
        {{ ('There are no posts') }}
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post"/>
                </div>
            @endforeach
        </div>
    @endif

@endsection
