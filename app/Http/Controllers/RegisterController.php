<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $data = $request->all();
//        $data = $request->only(['name', 'email']);
//        $data = $request->except(['name', 'email']);

        //методы проверки наличия параметров в запросе
        $request->has('name'); //есть ли параметр в запросе
        $request->filled('name'); // заполнен ли параметр
        $request->missing('name'); // пропущен ли


        //методы получения параметров в запросе
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
//        $agree = !! $request->input('agree');
        $agreement =  $request->boolean('agreement');
        $avatar = $request->file('avatar');
//        dd($name, $email, $password, $agreement);

        if (true) {
            return redirect()->back()->withInput();
        }

        return redirect()->route('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }
}
