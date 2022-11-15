<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {
//        return view('blog.index')
//            ->with('baz', [1,2,3])
//            ->with('foo','bar');

//        return view('blog.index', [
//            'posts' => $posts,
//        ]);
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Autem, sint!',
        ];
        $posts = array_fill(0, 10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show($post)
    {
        $post = (object)[
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum <strong>dolor</strong> sit amet, consectetur adipisicing elit. Autem, sint!',
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post)
    {
        return "Поставить лайк {$post} посту";
    }
}
