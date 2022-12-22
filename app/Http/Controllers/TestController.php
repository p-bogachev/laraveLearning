<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    public function __construct()
    {
        //$this->middleware('token:secret');

        /* не более 10 запросов в минуту */
        //$this->middleware('throttle:10');
    }

    public function __invoke(Request $request)
    {
//        return 'invoke';

        //actions

        //response
//        $response = app()->make('response');
//        $response = app('response');
//        $response = Response::make('');

//        return response('test', 200, [
//            'foo' => 'bar',
//        ]);

        //преобразование массива в формат JSON
//        return ['foo' => 'bar'];

        //очень редко указываются параметры status и headers
        return response()->json(['foo' => 'bar']);
    }
}
