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

Route::multilingual('/', 'PagesController@home')->name('home');
Route::multilingual('contact', 'PagesController@contact')->name('contact');
Route::multilingual('profiled-sheets', 'PagesController@profiledSheets')->name('profiled_sheets');
Route::multilingual('prestige', 'PagesController@prestige')->name('prestige');
Route::multilingual('elegant', 'PagesController@elegant')->name('elegant');
Route::multilingual('attractive', 'PagesController@attractive')->name('attractive');
Route::multilingual('trend', 'PagesController@trend')->name('trend');
Route::multilingual('dampa', 'PagesController@dampa')->name('dampa');
Route::multilingual('montage', 'PagesController@montage')->name('montage');
Route::multilingual('siege-sheets', 'PagesController@siegeSheets')->name('siege_sheets');
Route::multilingual('rainwater-system', 'PagesController@rainwaterSystem')->name('rainwater_system');
Route::multilingual('horizontal-gutter', 'PagesController@horizontalGutter')->name('horizontal_gutter');
Route::multilingual('gutter-hooks', 'PagesController@gutterHooks')->name('gutter_hooks');
Route::multilingual('gutter-kettle', 'PagesController@gutterKettle')->name('gutter_kettle');
Route::multilingual('drain-pipes', 'PagesController@drainPipes')->name('drain_pipes');
Route::multilingual('pipe-holders', 'PagesController@pipeHolders')->name('pipe_holders');
Route::multilingual('pipe-elbows', 'PagesController@pipeElbows')->name('pipe_elbows');
Route::multilingual('gutter-closure', 'PagesController@gutterClosure')->name('gutter_closure');
Route::multilingual('gutter-corner', 'PagesController@gutterCorner')->name('gutter_corner');
Route::multilingual('other-metal-products', 'PagesController@otherMetalProducts')->name('other_metal_products');
Route::multilingual('termopor', 'PagesController@termopor')->name('termopor');
Route::multilingual('dry-build', 'PagesController@dryBuild')->name('dry_build');
Route::multilingual('references', 'PagesController@references')->name('references');
Route::multilingual('perforated-mesh', 'PagesController@perforatedMesh')->name('perforated_mesh');
Route::multilingual('snow-stops', 'PagesController@snowStops')->name('snow_stops');
Route::multilingual('paneling', 'PagesController@paneling')->name('paneling');
Route::multilingual('about-us', 'PagesController@aboutUs')->name('about_us');
Route::multilingual('article1', 'ArticlesController@article1')->name('article1');

Route::get('download/metalna-galanterija', 'DownloadsController@getPdf')->name('download_pdf');