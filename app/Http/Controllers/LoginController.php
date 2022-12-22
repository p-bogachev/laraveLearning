<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //return app('view')->make('login.index');
        //return view()->make('login.index');
        //return View::make('login.index');
        return view('login.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $ip = $request->ip(); // наш ip адрес
//        $path = $request->path(); // путь после слеша
//        $url = $request->url(); // весь url запроса без query параметров
//        $fullUrl = $request->fullUrl(); // полный url с параметрами


//        $email = $request->input('email');
//        $password = $request->input('password');
//        $remember = $request->boolean('remember');
//
//        dd($email, $password, $remember);

//        return 'Запрос на вход';
        // аналогично строке выше
//        return response('Запрос на вход');

//        return response()->redirectTo('/foo'); //перенаправление на указанный путь
//        return response()->redirectToRoute('user'); // перенаправление на указанный маршрут

//        return redirect('foo');
        return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
