<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $token, string $foo = 'default')
    {
        /* dd и dump выводят переданные значения, но dd еще прерывает скрипт*/
//        dd($foo);
        dump($foo);

        /* Либо указываем токен через конфиг */
        //$token = config('example.token');
        /* Либо указываем параметр в ->middleware('key:parameter') и передаем parameter, как аргумент функции (см. TestController)
        (middleware указан в конструкторе TestController, как пример того, что так можно делать) */
        if($request->input('token') === $token) {
            return $next($request);
        }

        abort(403);
    }
}
