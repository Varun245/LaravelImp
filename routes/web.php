<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Filesystem\Filesystem;
use phpDocumentor\Reflection\DocBlock\Tags\Example;

// use App\Services\Twitter;

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



//Route::resource('projects', 'ProjectsController')->middleware('can:update,project');//Can use this also prefer this


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

    // app()->singleton('example',function(){
    //     return new \App\Example;
    // });  
    

Route::get('/', function () {

    //dd(app(Filesystem::class));
       //dd(app('App\Example'));
    //dd($twitter);
    
     return view('welcome');
});

// app()->singleton('\App\Services\Twitter',function(){

//     return new \App\Services\Twitter('sdfsdgso');
// });

// Route::get('/about', function () {
//     return view('about');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
