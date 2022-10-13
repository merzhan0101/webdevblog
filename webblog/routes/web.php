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


    Route::get('/', 'App\Http\Controllers\PostsController@index');
    Route::get('/posts/{post}', 'App\Http\Controllers\PostsController@show');
    Route::get('/send', 'App\Http\Controllers\mailController@send');

    // Route::get('/reg', 'App\Http\Controllers\Auth\RegisterController@???');



//контроллеры
// Route::get('/tasks', 'App\Http\Controllers\TasksController@index');
// Route::get('/tasks/{task}', 'App\Http\Controllers\TasksController@show');


// Route::get('/tasks', function () {
//     // $tasks = DB::table('tasks')->get();
//     // $tasks = App\Models\task::all();
//     $tasks = App\Models\Task::incomplete();
//     return view('tasks.index', compact('tasks'));
// });

// Route::get('/tasks/{task}', function($id){
//     // $task = DB::table('tasks')->find($id);
//     $task = App\Models\Task::find($id);
//     return view('tasks .show', compact('task'));
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
