<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\User;

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

//Route::get('/', function () {
//    return view('welcome');
//
//});
//Route::get('/contact','PostController@contact');
//Route::get('post/{id}/{name}/{pass}', 'PostController@show_post');

//Route::get('/about', function () {
//    return "About Us";
//});
//
//Route::get('/post/{id}/{name}', function ($id, $name) {
//    return "This is POST number " . $id . " " . $name;
//
//});
//
//Route::get('admin/posts/example', array('as' => 'admin.home', function () {
//    $url = \route('admin.home');
//    return "This URL is " . $url;
//}));

//Route::resource('posts', 'PostController');

/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------

*/
Route::get('delete', function () {
    $delete = DB::delete('delete from posts where id=?', [1]);
});

Route::get('/update', function () {
    DB::update('update posts set title = "Updated title" where id=?', [1]);
});

Route::get('/read', function () {
    $results = DB::select('select * from posts where id = ?', [1]);

    foreach ($results as $result) {
        return $result->title;
    }
});

Route::get('/insert', function () {
    DB::insert('insert into posts (title, content) values(?, ? )', ['PHP with laravel', 'New Record']);
});

/*
|--------------------------------------------------------------------------
| ELOQUENT(Object relation Model) ORM
|--------------------------------------------------------------------------

*/

Route::get('/find', function () {
    $posts = \App\Post::all();

    foreach ($posts as $post) {
        return $post->title;
    }
});

Route::get('/findd', function () {
    $post = \App\Post::find(3);
    return $post->title;

//    foreach ($posts as $post)
//    {
//        return $post->title;
//    }
});

Route::get('/findwhere', function () {
    $posts = \App\Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();
    return $posts;
});

Route::get('/findmore', function () {
    $posts = \App\Post::findorFail(2);
    return $posts;
});

//insert using raw eloquent method
Route::get('/basic_insert', function () {
    $post = new \App\Post;

    $post->title = 'New title';
    $post->content = 'New Content';

    $post->save();
});

//update using raw eloquent method
Route::get('/basic_update', function () {
    $post = \App\Post::find(2);

    $post->title = 'New Title for ID number 2';
    $post->content = 'New Content 2';

    $post->save();
});
//insert using eloquent method with Model help

Route::get('/create', function () {
    \App\Post::create(['title' => 'Create Method', 'content' => 'Content with create method']);

});

//update using eloquent method with Model help

Route::get('/update', function ()
{
    \App\Post::where('id',1)->where('is_admin',0)->update(['title' => 'Fundamental of Network Communications', 'content' => 'By Faul Dean with rubbish method']);
});

//delete using eloquent method with Model help

Route::get('/delete', function ()
{
    $post = \App\Post::find(2);

    $post->delete();
});

//delete using eloquent method with Model help 2

Route::get('/deletee', function ()
{
    \App\Post::destroy([3,4]);

//    \App\Post::where('id',3)->delete();
});

//Soft Delete with time
Route::get('/soft_delete', function ()
{
    \App\Post::find(8)->delete();


});

//Soft Delete Retrive
Route::get('/return_soft_delete', function ()
{
//    $post = \App\Post::find(8);
//    return $post;

    $post = \App\Post::withTrashed()->where('id',1)->get();
    return $post;

});

/*
|--------------------------------------------------------------------------
| ELOQUENT Database Relationships
|--------------------------------------------------------------------------

*/

//hasOne or One to One Relationship

Route::get('/user/{id}/post', function ($id)
{
    return User::find($id)->post;
});


