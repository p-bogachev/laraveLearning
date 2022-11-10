<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin.')->middleware(['auth', 'active', 'admin'])->group(function() {
    Route::redirect('/', 'admin/posts')->name('admin');

    Route::get('posts',               ['uses' => 'Admin\\PostController@index',  'as' => 'posts']);
    Route::get('posts/create',        ['uses' => 'Admin\\PostController@create', 'as' => 'posts.create']);
    Route::post('posts',              ['uses' => 'Admin\\PostController@store',  'as' => 'posts.store']);
    Route::get('posts/{post}',        ['uses' => 'Admin\\PostController@show',   'as' => 'posts.show'])->whereNumber('post');
    Route::get('posts/{post}/edit',   ['uses' => 'Admin\\PostController@edit',   'as' => 'posts.edit']);
    Route::patch('posts/{post}',      ['uses' => 'Admin\\PostController@update', 'as' => 'posts.update']);
    Route::delete('posts/{post}',     ['uses' => 'Admin\\PostController@delete', 'as' => 'posts.delete']);
    Route::patch('posts/{post}/like', ['uses' => 'Admin\\PostController@like',   'as' => 'posts.like']);
});
