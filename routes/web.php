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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('periodos', 'PeriodosController');
Route::group(['prefix'=>'cursos/{id}'], function () {
    Route::get('docentes', 'CursosController@addDocenteView')->name('cursos.docentes.list-add');
    Route::post('docentes', 'CursosController@addDocente')->name('cursos.docentes.add');

    Route::get('materias', 'CursosController@addMateriaView')->name('cursos.materias.list-add');
    Route::post('materias', 'CursosController@addMateria')->name('cursos.materias.add');
    
    Route::get('estudiantes', 'CursosController@estudianteList')->name('cursos.estudiantes.index');
    Route::resource('asistencias', 'DiaAsistenciasController');
});
Route::resource('cursos', 'CursosController');

Route::resource('horarios', 'HorariosController')->except(['edit']);
