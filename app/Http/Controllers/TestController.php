<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('token:secret, foo');

        /* не более 10 запросов в минуту */
        //$this->middleware('throttle:10');
    }

    public function __invoke()
    {
        return 'invoke';
    }
}
