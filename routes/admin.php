<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
    Route::get('posts',               ['uses' => 'Admin\\PostController@index',  'as' => 'admin.posts']);
    Route::get('posts/create',        ['uses' => 'Admin\\PostController@create', 'as' => 'admin.posts.create']);
    Route::post('posts',              ['uses' => 'Admin\\PostController@store',  'as' => 'admin.posts.store']);
    Route::get('posts/{post}',        ['uses' => 'Admin\\PostController@show',   'as' => 'admin.posts.show'])->whereNumber('post');
    Route::get('posts/{post}/edit',   ['uses' => 'Admin\\PostController@edit',   'as' => 'admin.posts.edit']);
    Route::patch('posts/{post}',      ['uses' => 'Admin\\PostController@update', 'as' => 'admin.posts.update']);
    Route::delete('posts/{post}',     ['uses' => 'Admin\\PostController@delete', 'as' => 'admin.posts.delete']);
    Route::patch('posts/{post}/like', ['uses' => 'Admin\\PostController@like',   'as' => 'admin.posts.like']);
});
