<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/plans', 'Admin\PlanController@index')->name('plans.index');
Route::post('admin/plans', 'Admin\PlanController@store')->name('plans.store');
Route::get('admin/plans/create', 'Admin\PlanController@create')->name('plans.create');
Route::any('admin/plans/search', 'Admin\PlanController@search')->name('plans.search');
Route::get('admin/plans/{url}/edit', 'Admin\PlanController@edit')->name('plans.edit');
Route::put('admin/plans/{url}', 'Admin\PlanController@update')->name('plans.update');
Route::get('admin/plans/{url}', 'Admin\PlanController@show')->name('plans.show');
Route::delete('admin/plans/{url}', 'Admin\PlanController@destroy')->name('plans.destroy');

Route::get('admin', 'Admin\PlanController@index')->name('admin.index');

Route::get('/', function () {
    return view('welcome');
});