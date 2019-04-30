<?php
//PHP/Laravel 09  課題提出
Route::get('XXX', 'AAAController@bbb');

Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});