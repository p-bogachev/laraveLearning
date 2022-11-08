<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyPlaceController;

//Route::get('/', function () {
//    return view('welcome');
//});
//замена 3 строк выше
Route::view('/', 'welcome')->name('home');

//Пример того, что можно использовать контроллер без вызова метода. Тогда вызовется магический метод __invoke
Route::get('test', TestController::class)->name('test');
Route::get('mypage', [MyPlaceController::class, 'index']);
Route::redirect('redirect', 'mypage')->name('home.redirect');
//CRUD (create, read, update, delete)
//Route::get('posts', [User\\PostController::class, 'index'])->name(0'posts');
//Route::get('posts', 'User\\PostController@index')->name('posts');


Route::get('register', ['uses' => 'RegisterController@index', 'as' => 'register']);
Route::post('register', ['uses' => 'RegisterController@store', 'as' => 'register.store']);

Route::get('login', ['uses' => 'LoginController@index', 'as' => 'login']);
Route::post('login', ['uses' => 'LoginController@store', 'as' => 'login.store']);
//Route::get('login/{user}/confirm', ['uses' => 'LoginController@confirm', 'as' => 'login.confirm']);
//Route::post('login/{user}/confirm', ['uses' => 'LoginController@confirm', 'as' => 'login.confirm']);


Route::get('blog', ['uses' => 'BlogController@index', 'as' => 'blog']);
Route::get('blog/{post}', ['uses' => 'BlogController@show', 'as' => 'blog.show']);
Route::post('blog/{post}/like', ['uses' => 'BlogController@like', 'as' => 'blog.like']);

Route::prefix('user')->as('user.')->group(function() {
//Указали в RouteServiceProvider namespace, где содержится User\\PostController, чтобы использовать конструкцию ['uses' => 'Controller@method', 'as' => 'route_name']
    Route::get('posts',               ['uses' => 'User\\PostController@index',  'as' => 'posts']);
    Route::get('posts/create',        ['uses' => 'User\\PostController@create', 'as' => 'posts.create']);
    Route::post('posts',              ['uses' => 'User\\PostController@store',  'as' => 'posts.store']);
    Route::get('posts/{post}',        ['uses' => 'User\\PostController@show',   'as' => 'posts.show'])->whereNumber('post');
    Route::get('posts/{post}/edit',   ['uses' => 'User\\PostController@edit',   'as' => 'posts.edit']);
    Route::patch('posts/{post}',      ['uses' => 'User\\PostController@update', 'as' => 'posts.update']);
    Route::delete('posts/{post}',     ['uses' => 'User\\PostController@delete', 'as' => 'posts.delete']);
    Route::patch('posts/{post}/like', ['uses' => 'User\\PostController@like',   'as' => 'posts.like']);
});

//Маршруты для admin находятся в отдельном файле routes/admin.php

//Route::resource('posts', User\\PostController::class)->only(['index', 'show']);

//Route::resource('posts/{post}/comments', CommentController::class);
Route::get('posts/{post}/comments/{comment}/edit', ['uses' => 'Posts\CommentController@edit', 'as' => 'comments.edit']);

Route::fallback(function () {
   return 'Fallback';
});
