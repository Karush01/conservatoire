<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/main', 'App\Http\Controllers\MainController@homePageWithData');
Route::get('/contact', 'App\Http\Controllers\ContactController@index');
Route::get('/history', 'App\Http\Controllers\HistorieController@index');
Route::get('/agenda-culture', 'App\Http\Controllers\AgendaCultureController@index');
Route::get('/concerts', 'App\Http\Controllers\ConcertController@allConcerts');
Route::get('/instruments', 'App\Http\Controllers\InstrumentController@index');
Route::post('/getPostsByInstrument', 'App\Http\Controllers\InstrumentController@getPostsByInstrument');
Route::get('/news', 'App\Http\Controllers\MainController@getAllNews');
Route::get('/news/{id}', 'App\Http\Controllers\MainController@getNewsByCategory')->name('news-by-cat');

Route::get('/agenda-single/{id}', 'App\Http\Controllers\MainController@agendaSingle')->name('agenda-single');
Route::get('/topical-single/{id}', 'App\Http\Controllers\MainController@topicalSingle')->name('topical-single');
Route::get('/page/{slug}', 'App\Http\Controllers\MainController@textPage')->name('page');
Route::get('/programmes-et-diplome', 'App\Http\Controllers\MainController@programsAndDiplomas');
Route::get('/programs-and-diplomas-single/{id}', 'App\Http\Controllers\MainController@programsAndDiplomasSingle')->name('programs-and-diplomas-single');
Route::get('/instrument-single/{slug}', 'App\Http\Controllers\InstrumentController@instrumentSingle')->name('instrument-single');
Route::get('/news-single/{id}', 'App\Http\Controllers\MainController@newsSingle')->name('news-single');
Route::get('/artist/{id}', 'App\Http\Controllers\InstrumentController@instrumentSingleByID');
