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

Route::get('/', 'WelcomeController@accueil')->name('accueil');


Route::get('/mytraining', 'TrainingController@formation')->name('mytraining');


Route::get('/myskills', 'SkillsController@competences')->name('myskills');


Route::get('/myachievements', 'AchievementsController@realisations')->name('myachievements');


Route::get('/contactform', 'ContactController@controle')->name('contactform');
Route::post('/contactform', 'ContactController@saveContact')->name('saveContact');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
