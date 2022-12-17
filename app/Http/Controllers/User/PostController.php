<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Autem, sint!',
        ];
        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store(Request $request)
    {
        $postName = $request->input('title');
        $postContent = $request->input('content');

        dd($postName, $postContent);

        return "Запрос создание поста";
    }

    public function show($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Autem, sint!',
        ];

        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Autem, sint!',
        ];

        return view('user.posts.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $postName = $request->input('title');
        $postContent = $request->input('content');

        dd($postName, $postContent);

        return "Запрос изменения поста";
    }

    public function delete($post)
    {
        return "Запрос удаление поста $post";
    }

    public function like()
    {
        return "Лайк + 1";
    }
}
