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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/infosave', function () {
    return view('people.infosave');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/addpeople', 'PeopleController@addpeople')->name('addpeople');
Route::post('addpeopleyes', 'PeopleController@addpeopleyes')->name('addpeopleyes');
Route::post('addwifeyes', 'PeopleController@addwifeyes')->name('addwifeyes');
Route::get('people/{id}', 'PeopleController@show');
//Route::get('people/{id}/photo/{album}', 'PeopleController@photoshow');
Route::get('people/{id}/edit', 'PeopleController@edit');
Route::post('people/{id}/edit/imageslogo', 'PeopleController@imageslogo')->name('images.logo');
Route::post('people/{id}/edit/onesave', 'PeopleController@onesave')->name('onesave');
Route::post('people/{id}/edit/tosave', 'PeopleController@tosave')->name('tosave');
Route::post('people/{id}/edit/articlessave', 'PeopleController@articlessave')->name('articlessave');
Route::get('people/{id}/albumfoto/{id_album}', 'PeopleController@albumfoto');
Route::get('people/{id}/albumfoto/{id_album}/edit', 'PeopleController@albumfotoedit');
Route::get('people/{id}/albumvideo/{id_album}', 'PeopleController@albumvideo');
Route::get('people/{id}/albumvideo/{id_album}/edit', 'PeopleController@albumvideoedit');
Route::post('people/{id}/edit/addalbumfoto', 'PeopleController@addalbumfoto')->name('addalbumfoto');
Route::post('people/{id}/edit/editnamealbumfoto', 'PeopleController@editnamealbumfoto')->name('editnamealbumfoto');
Route::post('people/{id}/foto/edit/namesave', 'PeopleController@editnamefoto')->name('editnamefoto');
Route::post('people/{id}/video/edit/namesave', 'PeopleController@editnamevideo')->name('editnamevideo');
Route::get('people/{id}/edit/deletealbumphoto/{id_album}', 'PeopleController@deletealbumphoto')->name('deletealbumphoto');
Route::post('people/{id}/edit/addalbumvideo', 'PeopleController@addalbumvideo')->name('addalbumvideo');
Route::post('people/{id}/edit/editnamealbumvideo', 'PeopleController@editnamealbumvideo')->name('editnamealbumvideo');
Route::get('people/{id}/edit/deletealbumvideo/{id_album}', 'PeopleController@deletealbumvideo')->name('deletealbumvideo');
Route::get('people/{id}/edit/deletearticles/{id_articles}', 'PeopleController@deletearticles')->name('deletearticles');
Route::get('people/{id}/addchildone', 'PeopleController@addchildone');
Route::get('people/{id}/addchildto', 'PeopleController@addchildto');
Route::post('addchildoneyes', 'PeopleController@addchildoneyes')->name('addchildoneyes');
Route::post('addchildtoyes', 'PeopleController@addchildtoyes')->name('addchildtoyes');
Route::get('people/{id}/addwife', 'PeopleController@addwife');
Route::post('addwifeyes', 'PeopleController@addwifeyes')->name('addwifeyes');
Route::get('people/{id}/addparents', 'PeopleController@addparents')->name('addparents');
Route::post('addparentsyes', 'PeopleController@addparentsyes')->name('addparentsyes');
Route::post('people/{id}/edit/imagesalbum', 'PeopleController@imagesalbum')->name('images.album');
Route::post('people/{id}/edit/imagesalbumto', 'PeopleController@imagesalbumedit')->name('images.album.edit');
Route::post('people/{id}/edit/videoalbumto', 'PeopleController@videoalbumedit')->name('video.album.edit');
Route::get('people/{id}/{album_id}/foto/delete/{foto_id}', 'PeopleController@deletephoto')->name('deletephoto');
Route::get('people/{id}/{album_id}/video/delete/{foto_id}', 'PeopleController@deletevideo')->name('deletevideo');
