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
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/delete/{id}', 'AdminController@delete');


Route::get('/formations', 'AdminController@formations')->name('formations');
Route::get('/competences', 'AdminController@competences')->name('competences');
Route::get('/realisations', 'AdminController@realisations')->name('realisations');


Route::get('/supprformation/{id}', 'AdminController@supprFormation')->name('suppr_formation');
Route::post('/formations', 'AdminController@addFormation');
Route::get('/modifformation/{id}', 'AdminController@modifFormation')->name('modif_formation');
Route::post('/modifformation', 'AdminController@updateFormation');


Route::get('/supprcompetence/{id}', 'AdminController@supprCompetence')->name('suppr_competence');
Route::post('/competences', 'AdminController@addCompetence');
Route::get('/modifcompetence/{id}', 'AdminController@modifCompetence')->name('modif_competence');
Route::post('/modifcompetence', 'AdminController@updateCompetence');


Route::get('/supprrealisation/{id}', 'AdminController@supprRealisation')->name('suppr_realisation');
Route::post('/realisations', 'AdminController@addRealisation');
Route::get('/modifrealisation/{id}', 'AdminController@modifRealisation')->name('modif_realisation');
Route::post('/modifrealisation', 'AdminController@updateRealisation');