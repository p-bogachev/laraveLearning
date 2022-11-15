@extends('layouts.base')

@section('page.title', $post->title)

@section('content')

    <a href="{{route('blog')}}">
        Back
    </a>

    <h1>
        {{ $post->title }}
    </h1>

    <p>
        {!! $post->content !!}
    </p>

@endsection

