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

Route::group(['prefix'=>'materias/{id}'], function () {
    Route::post('add-horario', 'MateriasController@addHorario')->name('materias.horarios.add');
    Route::get('quit-horario/{horario_id}', 'MateriasController@quitHorario')->name('materias.horarios.quit');

    Route::post('add-docente', 'MateriasController@addDocente')->name('materias.docentes.add');
    Route::get('quit-docente/{docente_id}', 'MateriasController@quitDocente')->name('materias.docentes.quit');
    
    Route::resource('grupo-notas', 'GrupoNotasController')->names([
        'create' => 'grupo-notas.create',
        'store' => 'grupo-notas.store',
        'show' => 'grupo-notas.show',
        'edit' => 'grupo-notas.edit',
        'update' => 'grupo-notas.update',
        'destroy' => 'grupo-notas.destroy',
    ])->except(['index']);
});
Route::resource('materias', 'MateriasController');

Route::group(['prefix'=>'docentes/{id}'], function () {
    Route::post('add-materia', 'DocentesController@addMateria')->name('docentes.materias.add');
    Route::get('quit-materia/{materia_id}', 'DocentesController@quitMateria')->name('docentes.materias.quit');
});
Route::resource('docentes', 'DocentesController');
