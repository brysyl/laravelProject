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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog/archive', function () {
    return view('archive');
});

Route::get('/blog/index', function () {
    return view('index');

});

Route::get('/blog/index', function () {
    $users = DB::table('posts')->select('name','detail')->get();
    return view('index', compact('users'));
});

Route::get('/blog/contact', function () {
    return view('contact');

});

Route::get('/blog/blog', function () {
    return view('blog');

});

Route::get('/blog/course', function () {
    return view('course');
   

});

Route::get('/blog/form', function () {
    return view('form');

});

Route::get('/blog/single-blog', function () {
    return view('single-blog');

});

Route::get('/blog/about', function () {
    return view('about');

});

Route::get('newblog', function () {

    $cars = ['benz', 'rover', 'jeep', 'honda'] ;
    
    return view('newblog', compact('cars'));

});

Route::get('/blog/newblog', function () {

    $listofcars = array("benz" => 2000, "rover" => 1000, "jeep" => 500, "honda" => 300) ;
    
    return view('newblog', compact('listofcars'));

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get ('Test', 'BrytController@get');

Route::get ('index', 'PageController@index');

Route::post('form', 'BrytController@store');


Route::resource('posts','PostController');

