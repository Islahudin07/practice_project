<?php

use Illuminate\Support\Facades\Route;
Route::get('/greeting', function () {
    return 'My Laravel Project';
});


Route::get('/about',function ()
{
        return view('about.about');
});
Route::get('/user/{id}',function ($id)
{
        return 'this is user '.$id;
});
Route::get('/','ExampleController@index');

{

};