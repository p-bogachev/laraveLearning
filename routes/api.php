<?php

use Illuminate\Support\Facades\Route;

Route::get('post', ['uses' => 'Api\\PostController@index', 'as' => 'post']);
Route::get('post/{post}', ['uses' => 'Api\\PostController@show', 'as' => 'post.show']);
Route::post('post/{post}/like', ['uses' => 'Api\\PostController@like', 'as' => 'post.like']);
