<?php

use Illuminate\Support\Facades\Route;

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
Route::get('delete', function ()
{
    $delete = DB::delete('delete from posts where id=?',[1]);
});

Route::get('/update', function ()
{
   DB::update('update posts set title = "Updated title" where id=?', [1]);
});

Route::get('/read', function ()
{
   $results = DB::select('select * from posts where id = ?', [1]);

   foreach ($results as $result)
   {
       return $result->title;
   }
});

Route::get('/insert', function () {
    DB::insert('insert into posts (title, content) values(?, ? )', ['PHP with laravel', 'Amr name qwe']);
});



























