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

// Route::get('/index', 'HomeController@index');
//
// Route::get('/post', function () {
//     return view('post');
// });
//
//
// Route::post('/check', 'HomeController@check');
//
// Route::post('/data', 'HomeController@data');
//
// Route::post('/add', 'HomeController@add');


Route::get('/', 'HomeController@index');

Route::get('/post', 'HomeController@post');

Route::get('/check', function(){
  return view('check');
});

Route::post('/check', 'HomeController@add');
// Route::get('/{image}', 'HomeController@carimage');
Route::get('/image/{image}', 'HomeController@carimage');


Route::post('/data', 'HomeController@data');

Route::post('/add', 'HomeController@add');


// ランキング$bodytype_rankings
Route::get('placeranking', 'RankingController@placeranking');

// 都道府県
Route::get('/prefectures/pre1', 'PrefecturesController@pre1');
Route::get('/prefectures/pre2', 'PrefecturesController@pre2');
Route::get('/prefectures/pre3', 'PrefecturesController@pre3');
Route::get('/prefectures/pre4', 'PrefecturesController@pre4');
Route::get('/prefectures/pre5', 'PrefecturesController@pre5');
Route::get('/prefectures/pre6', 'PrefecturesController@pre6');
Route::get('/prefectures/pre7', 'PrefecturesController@pre7');
Route::get('/prefectures/pre8', 'PrefecturesController@pre8');
Route::get('/prefectures/pre9', 'PrefecturesController@pre9');
Route::get('/prefectures/pre10', 'PrefecturesController@pre10');
Route::get('/prefectures/pre11', 'PrefecturesController@pre11');
Route::get('/prefectures/pre12', 'PrefecturesController@pre12');
Route::get('/prefectures/pre13', 'PrefecturesController@pre13');
Route::get('/prefectures/pre14', 'PrefecturesController@pre14');
Route::get('/prefectures/pre15', 'PrefecturesController@pre15');
Route::get('/prefectures/pre16', 'PrefecturesController@pre16');
Route::get('/prefectures/pre17', 'PrefecturesController@pre17');
Route::get('/prefectures/pre18', 'PrefecturesController@pre18');
Route::get('/prefectures/pre19', 'PrefecturesController@pre19');
Route::get('/prefectures/pre20', 'PrefecturesController@pre20');
Route::get('/prefectures/pre21', 'PrefecturesController@pre21');
Route::get('/prefectures/pre22', 'PrefecturesController@pre22');
Route::get('/prefectures/pre23', 'PrefecturesController@pre23');
Route::get('/prefectures/pre24', 'PrefecturesController@pre24');
Route::get('/prefectures/pre25', 'PrefecturesController@pre25');
Route::get('/prefectures/pre26', 'PrefecturesController@pre26');
Route::get('/prefectures/pre27', 'PrefecturesController@pre27');
Route::get('/prefectures/pre28', 'PrefecturesController@pre28');
Route::get('/prefectures/pre29', 'PrefecturesController@pre29');
Route::get('/prefectures/pre30', 'PrefecturesController@pre30');
Route::get('/prefectures/pre31', 'PrefecturesController@pre31');
Route::get('/prefectures/pre32', 'PrefecturesController@pre32');
Route::get('/prefectures/pre33', 'PrefecturesController@pre33');
Route::get('/prefectures/pre34', 'PrefecturesController@pre34');
Route::get('/prefectures/pre35', 'PrefecturesController@pre35');
Route::get('/prefectures/pre36', 'PrefecturesController@pre36');
Route::get('/prefectures/pre37', 'PrefecturesController@pre37');
Route::get('/prefectures/pre38', 'PrefecturesController@pre38');
Route::get('/prefectures/pre39', 'PrefecturesController@pre39');
Route::get('/prefectures/pre40', 'PrefecturesController@pre40');
Route::get('/prefectures/pre41', 'PrefecturesController@pre41');
Route::get('/prefectures/pre42', 'PrefecturesController@pre42');
Route::get('/prefectures/pre43', 'PrefecturesController@pre43');
Route::get('/prefectures/pre44', 'PrefecturesController@pre44');
Route::get('/prefectures/pre45', 'PrefecturesController@pre45');
Route::get('/prefectures/pre46', 'PrefecturesController@pre46');
Route::get('/prefectures/pre47', 'PrefecturesController@pre47');



Route::post('/serchcardata', 'PrefecturesController@serchcardata');
Route::post('/serchcardata2', 'PrefecturesController@serchcardata2');
Route::post('/serchcardata3', 'PrefecturesController@serchcardata3');
Route::post('/serchcardata4', 'PrefecturesController@serchcardata4');

Route::get('/allsearch', 'PrefecturesController@serchcardataall');
Route::post('/all', 'PrefecturesController@allsearchs');
