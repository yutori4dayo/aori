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

Route::get('/prefectures/{id}', 'PrefecturesController@pre0');
Route::get('/', 'HomeController@index');

Route::get('/post', 'HomeController@post');
Route::post('/deletePost', 'HomeController@deletePost');
Route::get('/confirmDelete/{id}','HomeController@confirmDelete');

Route::get('/check', function(){
  return view('check');
});

Route::post('/check', 'HomeController@add');

Route::get('/image/{image}', 'HomeController@carimage');


Route::post('/data', 'HomeController@data');
Route::post('/add', 'HomeController@add');

Route::get('/regionlist', 'RegionListController@regionList');
Route::get('/regions/{id}', 'RegionListController@getRegion');


// ランキング$bodytype_rankings
Route::get('placeranking', 'RankingController@placeranking');




Route::post('/serchcardata', 'PrefecturesController@serchcardata');
Route::post('/serchcardata2', 'PrefecturesController@serchcardata2');
Route::post('/serchcardata3', 'PrefecturesController@serchcardata3');
Route::post('/serchcardata4', 'PrefecturesController@serchcardata4');

Route::get('/allsearch', 'PrefecturesController@serchcardataall');
Route::post('/all', 'PrefecturesController@allsearchs');
