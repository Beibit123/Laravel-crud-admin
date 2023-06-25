<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'Guest\ComputerController@index')->name('computer.index');
Route::get('/computers/{computer}', 'Guest\ComputerController@show')->name('computer.show');


Route::group(['namespace' => 'Admin', 'prefix' =>'admin', 'middleware' => 'admin'], function() {
    Route::get('/computer', 'ComputerController@index')->name('admin.computer.index');
    Route::get('/computers/create', 'ComputerController@create')->name('admin.computer.create');
    Route::post('/computers', 'ComputerController@store')->name('admin.computer.store');
    Route::get('/computers/{computer}', 'ComputerController@show')->name('admin.computer.show');
    Route::get('/computers/{computer}/edit', 'ComputerController@edit')->name('admin.computer.edit');
    Route::patch('/computers/{computer}/update', 'ComputerController@update')->name('admin.computer.update');
    Route::delete('computers/{computer}', 'ComputerController@destroy')->name('admin.computer.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
