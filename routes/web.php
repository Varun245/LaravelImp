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
// Route::get('/','PagesController@home');
// Route::get('/about','PagesController@about');
// Route::get('/contact ','PagesController@contact');

Route::resource('projects','ProjectsController');

Route::post('/projects/{project}/tasks','ProjectTasksController@store');

Route::patch('/tasks/{task}','ProjectTasksController@update');

// Route::get('/projects','ProjectsController@index');
// Route::get('/projects/create','ProjectsController@create');
// Route::get('/projects/{project}','ProjectsController@show');
// Route::post('/projects','ProjectsController@store');
// Route::get('/projects/{project}/edit','ProjectsController@edit');
// Route::patch('/projects/{project}','ProjectsController@update');
// Route::delete('/projects/{project}','ProjectsController@delete');

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


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });

