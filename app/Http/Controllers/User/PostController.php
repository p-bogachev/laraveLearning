<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return "Страница список постов";
    }

    public function create()
    {
        return "Страница создание поста";
    }

    public function store()
    {
        return "Запрос создание поста";
    }

    public function show($id)
    {
        return "Страница просмотра поста {$id}";
    }

    public function edit($id)
    {
        return "Страница изменения поста {$id}";
    }

    public function patch($id)
    {
        return "Запрос изменения поста {$id}";
    }

    public function delete($id)
    {
        return "Запрос удаление поста $id";
    }

    public function like()
    {
        return "Лайк + 1";
    }
}
