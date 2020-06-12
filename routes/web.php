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

// Route::get('/', function () {
//     return view('fronthand.index');
// });

Route::get('/','HomepageController@index');

 Route::get('/blog','BlogpostController@blogpost');
Route::get('/about','AboutmeController@aboutme');

Route::get('index','BlogController@index');
Route::get('blogpost','BlogController@blogpost');
Route::get('aboutme','BlogController@aboutme');

Route::get('/master','AdminController@master');

Route::get('addprofile','AdminController@addprofile');
Route::post('/saveprofile','AdminController@saveprofile');


Route::get('addbloghome','BloghomeController@addbloghome');
Route::post('/saveblog','BloghomeController@savebloghome');
Route::get('viewbloghome','BloghomeController@viewbloghome');
Route::get('/curd/editbloghome/{id}','BloghomeController@editbloghome');
Route::post('/curd/update/home','BloghomeController@updatebloghome');
Route::get('/curd/delete/{id}','BloghomeController@deletebloghome');



Route::get('addblogpost','BlogpostController@addblogpost');
Route::post('/saveblogpost','BlogpostController@saveblogpost');
Route::get('viewblogpost','BlogpostController@viewblogpost');
Route::get('/curd/editblogpost/{id}','BlogpostController@editblogpost');
Route::post('/curd/update/post','BlogpostController@updateblogpost');
Route::get('/curd/delete/{id}','BlogpostController@deleteblogpost');


Route::get('addaboutme','AboutmeController@addaboutme');
Route::post('/saveaboutme','AboutmeController@saveaboutme');
Route::get('viewaboutme','AboutmeController@viewaboutme');
Route::get('/curd/editaboutme/{id}','AboutmeController@editaboutme');
Route::post('/curd/update','AboutmeController@updateaboutme');
Route::get('/curd/delete/{id}','AboutmeController@deleteaboutme');