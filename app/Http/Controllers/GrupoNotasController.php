<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\GrupoNota;

class GrupoNotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($materia_id)
    {
        $grupos = GrupoNota::where('materia_id',$materia_id)->get();
        return view('grupo-notas.index')
        ->with('grupos',$grupos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($materia_id)
    {
        $date = \Carbon\Carbon::now();
        $grupo = new GrupoNota;
        $grupo->materia_id = $materia_id;
        return view('grupo-notas.create')
        ->with('date',$date->format('Y-m-d'))
        ->with('grupoNota',$grupo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$materia_id)
    {
        $grupo = GrupoNota::create($request->all());
        $materia = Materia::find($materia_id);
        foreach ($materia->curso->estudiantes as $estudiante) {
            Nota::create([
                'grupo_nota_id' => $grupo->id,
                'estudiante_id' => $estudiante->id,
                'nota'=>0,
                'fecha'=>$grupo->fecha,
            ]);
        }
        return redirect()->route('grupo-notas.show',[$materia_id,$grupo->id])
        ->with('success','Notas creadas correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$materia_id)
    {
        $grupo = GrupoNota::find($id);
        return view('grupo-notas.show')
        ->with('grupoNota',$grupo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$materia_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$materia_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$materia_id)
    {
        //
    }
}
