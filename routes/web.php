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

Route::get('/', 'HomeNotLoginController@index')->name('index');
Route::get('/recommend', 'HomeNotLoginController@recommend')->name('recommend');
Route::get('/vrrecommend', 'HomeNotLoginController@vrrecommend')->name('vrrecommend');
Route::get('/boxrecommend', 'HomeNotLoginController@boxrecommend')->name('boxrecommend');

Auth::routes();

// Route::get('/admin', 'LoginAdminController@index')->name('admin');
// Route::post('/adminlogin', 'LoginAdmin@MakeLogin')->name('adminlogin');
Route::get('/admin/home', 'AdminController@showHome')->name('showadminhome');
Route::get('/admin/settinggame', 'AdminController@settinggame')->name('settinggame');
Route::get('/admin/login', 'AdminController@showLogin')->name('showAdminLogin');
Route::post('/admin/login', 'AdminController@doLogin')->name('doAdminLogin');
Route::post('/admin/updatesettinggame1', 'AdminController@updatesettinggame1')->name('updatesettinggame1');
Route::post('/admin/updatesettinggame2', 'AdminController@updatesettinggame2')->name('updatesettinggame2');
Route::post('/admin/updatesettinggame3', 'AdminController@updatesettinggame3')->name('updatesettinggame3');
Route::post('/admin/updatesettinggame4', 'AdminController@updatesettinggame4')->name('updatesettinggame4');
Route::post('/admin/updatesettinggame5', 'AdminController@updatesettinggame5')->name('updatesettinggame5');
Route::post('/admin/updatesettinggame6', 'AdminController@updatesettinggame6')->name('updatesettinggame6');


Route::get('/doctor/register/{id}', 'DoctorController@showdoctorregister')->name('showdoctorregister');
Route::get('/doctor/home/{id}', 'DoctorController@showHome')->name('showdoctorhome');
Route::get('/doctor/profile/{id}', 'DoctorController@showprofile')->name('showprofile');
Route::get('/doctor/test/{id}', 'DoctorController@showtest')->name('showdoctortest');
Route::get('/doctor/report/{id}', 'DoctorController@showreport')->name('showdoctorreport');
Route::get('/doctor/recommend/{id}', 'DoctorController@showrecommend')->name('showdoctorrecommend');
Route::get('/doctor/vrrecommend/{id}', 'DoctorController@vrshowrecommend')->name('vrshowdoctorrecommend');
Route::get('/doctor/boxrecommend/{id}', 'DoctorController@boxshowrecommend')->name('boxshowdoctorrecommend');
Route::get('/doctor/register', 'DoctorController@showRegister')->name('showdoctorRegister');
Route::post('/doctor/doregister', 'DoctorController@doRegister')->name('dodoctorRegister');
Route::get('/doctor/login', 'DoctorController@showLogin')->name('showdoctorLogin');
Route::post('/doctor/login', 'DoctorController@doLogin')->name('dodoctorLogin');
Route::post('/doctor/search/{id}', 'DoctorController@doctorsearch')->name('doctorsearch');
Route::post('/doctor/searchreport/{id}', 'DoctorController@doctorsearchreport')->name('doctorsearchreport');
Route::post('/doctor/create/{id}', 'DoctorController@doctorcreate')->name('doctorcreate');

Route::post('/updategameboxmode1/{id}', 'HomeController@updategameboxmode1')->name('updategameboxmode1');
Route::post('/updategameboxmode2/{id}', 'HomeController@updategameboxmode2')->name('updategameboxmode2');
Route::post('/updategameboxmode3/{id}', 'HomeController@updategameboxmode3')->name('updategameboxmode3');
Route::post('/updategameboxmode4/{id}', 'HomeController@updategameboxmode4')->name('updategameboxmode4');
Route::post('/updategameboxmode5/{id}', 'HomeController@updategameboxmode5')->name('updategameboxmode5');
Route::post('/updategameboxmode6/{id}', 'HomeController@updategameboxmode6')->name('updategameboxmode6');

Route::post('/updateboxmode1', 'HomeController@updateboxmode1')->name('updateboxmode1');
Route::post('/updateboxmode2', 'HomeController@updateboxmode2')->name('updateboxmode2');
Route::post('/updateboxmode3', 'HomeController@updateboxmode3')->name('updateboxmode3');
Route::post('/updateboxmode4', 'HomeController@updateboxmode4')->name('updateboxmode4');
Route::post('/updateboxmode5', 'HomeController@updateboxmode5')->name('updateboxmode5');
Route::post('/updateboxmode6', 'HomeController@updateboxmode6')->name('updateboxmode6');

Route::post('/updatevrmode1', 'HomeController@updatevrmode1')->name('updatevrmode1');
Route::post('/updatevrmode2', 'HomeController@updatevrmode2')->name('updatevrmode2');
Route::post('/updatevrmode3', 'HomeController@updatevrmode3')->name('updatevrmode3');
Route::post('/updatevrmode4', 'HomeController@updatevrmode4')->name('updatevrmode4');
Route::post('/updatevrmode5', 'HomeController@updatevrmode5')->name('updatevrmode5');
Route::post('/updatevrmode6', 'HomeController@updatevrmode6')->name('updatevrmode6');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/testmode', 'HomeController@testmode')->name('testmode');
Route::get('/gamemode', 'HomeController@gamemode')->name('gamemode');

Route::get('/playmethod', 'HomeController@playmethod')->name('playmethod');
Route::get('/gameboxmode', 'HomeController@gameboxmode')->name('gameboxmode');
Route::get('/gamevrmode', 'HomeController@gamevrmode')->name('gamevrmode');
Route::get('/showtestbox1/{id}', 'HomeController@showtestbox1')->name('showtestbox1');
Route::get('/showtestbox2/{id}', 'HomeController@showtestbox2')->name('showtestbox2');
Route::get('/showtestbox3/{id}', 'HomeController@showtestbox3')->name('showtestbox3');
Route::get('/showtestbox4/{id}', 'HomeController@showtestbox4')->name('showtestbox4');
Route::get('/showtestbox5/{id}', 'HomeController@showtestbox5')->name('showtestbox5');
Route::get('/showtestbox6/{id}', 'HomeController@showtestbox6')->name('showtestbox6');
Route::get('/showvrbox1/{id}', 'HomeController@showtestvr1')->name('showtestvr1');
Route::get('/showvrbox2/{id}', 'HomeController@showtestvr2')->name('showtestvr2');
Route::get('/showvrbox3/{id}', 'HomeController@showtestvr3')->name('showtestvr3');
Route::get('/showvrbox4/{id}', 'HomeController@showtestvr4')->name('showtestvr4');
Route::get('/showvrbox5/{id}', 'HomeController@showtestvr5')->name('showtestvr5');
Route::get('/showvrbox6/{id}', 'HomeController@showtestvr6')->name('showtestvr6');
Route::get('/showgamebox/{gamesetting_id}/{id}', 'HomeController@showgamebox')->name('showgamebox');
Route::get('/showgamevr/{gamesetting_id}/{id}', 'HomeController@showgamevr')->name('showgamevr');
Route::post('/creategamebox', 'HomeController@creategamebox')->name('creategamebox');
Route::post('/creategamevr', 'HomeController@creategamevr')->name('creategamevr');
Route::resource('/project', 'ProjectController');

Route::view('/upload', 'upload');
Route::post('/uploadfile', 'ProjectController@uploadfile');

Route::get('/project/{id}/list', 'TaskController@index')->name('task.index');
Route::get('/project/{project_id}/task/create', 'TaskController@create')->name('task.create');
Route::post('/project/{project_id}/task/store', 'TaskController@store')->name('task.store');
Route::get('/task/{id}/edit', 'TaskController@edit')->name('task.edit');
Route::put('/task/{id}/update', 'TaskController@update')->name('task.update');
Route::delete('/task/{id}/destroy', 'TaskController@destroy')->name('task.destroy');


