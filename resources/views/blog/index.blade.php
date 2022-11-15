@extends('layouts.base')

@section('page.title', 'Blog Page')

@section('content')

    <h1>
        Blog page
    </h1>

    <h3 class="mb-5">
        List of posts
    </h3>

    @if(empty($posts))
        There are no posts
    @else

        @foreach($posts as $post)
            <div class="mb-4">
                <h5>
                    <a href=" {{ route('blog.show', $post->id) }}">

                        {{ $post->title }} {{$loop->iteration}}

                    </a>
                </h5>

                <p>
                    {!! $post->content !!}
                </p>
            </div>
        @endforeach

    @endif

@endsection

