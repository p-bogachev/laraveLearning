<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class BlogController extends Controller
{
    public function index()
    {
        return "Список постов";
    }

    public function show($post)
    {
        return "Показать {$post} пост в блоге";
    }

    public function like($post)
    {
        return "Поставить лайк {$post} посту";
    }
}
