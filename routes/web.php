<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('employers',[
    'as' => 'employers.show',
    'uses' => 'App\Http\Controllers\EmployerController@show'
]);
Route::put('employers',[
    'as' => 'employers.show',
    'uses' => 'App\Http\Controllers\EmployerController@show'
]);
Route::get('employers',[
    'as' => 'employers.show',
    'uses' => 'App\Http\Controllers\EmployerController@show'
]);
Route::get('employers',[
    'as' => 'employers.show',
    'uses' => 'App\Http\Controllers\EmployerController@show'
]);
Route::get('employers',[
    'as' => 'employers.show',
    'uses' => 'App\Http\Controllers\EmployerController@show'
]);
