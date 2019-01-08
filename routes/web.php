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
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact ','PagesController@contact');


// Route::get('/', function () {

//      return view('welcome',[
//         'foo'=>'bar'
//     ]);

// });

    // $tasks=[
    //     'Go to Store',
    //     'Go to Market',
    //     'Go to Work'

    // ]; 

    // return view('welcome')->withTasks($tasks)->withFoo('foo');

    // return view('welcome',[
    //     'tasks'=>$tasks,
    //     'foo'=>request('title')
    // ]);


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

