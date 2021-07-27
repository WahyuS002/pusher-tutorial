<?php

use App\Events\OrderStatusUpdated;
use App\Events\TaskCreated;
use App\Models\Task;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function(){
    return Task::pluck('body');
});

Route::post('/tasks', function(){
    $task = Task::forceCreate(request(['body']));

    event(
        (new TaskCreated($task))->dontBroadcastToCurrentUser()
    );
});
