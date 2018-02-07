<?php

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
Route::get('/', function()
{
		return redirect('az/human-rights');
});

Route::get('az/contact', 'Controller@contact');
Route::get('az/faq', 'Controller@questions');
Route::get('az/faq/{parameter}', 'Controller@questionInner');
Route::get('{parameter}/videos/{subparameter?}', 'Controller@videos');
Route::get('az/{parameter}', 'Controller@posts');
Route::get('az/{parameter}/{subparameter}', 'Controller@postInner');








