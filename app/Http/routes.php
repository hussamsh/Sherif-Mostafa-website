<?php

/*
 *
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/' , 'PagesController@about');
Route::get('contact' , 'PagesController@contact');
Route::get('study/{id}' , 'PagesController@studyOverview');
Route::get('all_studies' , 'PagesController@allStudies');

