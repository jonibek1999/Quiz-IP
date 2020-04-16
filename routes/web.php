<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Validation\Factory;

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

Route::get('/', [
        'uses' => 'TasksController@getFirstPage',
        'as' => 'getFirstPage'
]);

Route::post('/edit', [
        'uses' => 'TasksController@taskEdit',
        'as' => 'taskEdit',
        'middleware' => ['auth']
]);

Route::post('/create', [
        'uses' => 'TasksController@taskCreate',
        'as' => 'taskCreate',
        'middleware' => ['auth']
]);

Route::get('/delete/{id}', [
        'uses' => 'TasksController@taskDelete',
        'as' => 'taskDelete',
        'middleware' => ['auth']
]);

Route::get('/getEdit/{id}', [
        'uses' => 'TasksController@getTaskEdit',
        'as' => 'getTaskEdit',
        'middleware' => ['auth']
]);

Auth::routes();
