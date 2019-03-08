<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materia;
use App\Models\Curso;
use App\Models\Horario;
use App\Models\Docente;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('materias.index')
        ->with('materias',Materia::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.create')
        ->with('cursos',Curso::all())
        ->with('materia',new Materia)
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = Materia::create($request->all());
        return redirect()->route('materias.edit',$materia->id)
        ->with('success','Materia creada correctamente. Ahora puede agregar horarios y docentes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materia = Materia::find($id);
        return view('materias.show')
        ->with('materia',$materia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia = Materia::find($id);
        return view('materias.edit')
        ->with('cursos',Curso::all())
        ->with('horarios',Horario::all())
        ->with('docentes',Docente::all())
        ->with('materia',$materia)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function addHorario(Request $request,$materia_id){
        $materia = Materia::find($materia_id);
        if(!$materia)
            return redirect()->back()->with('error','Problemas al encontrar la materia, contacte con el administrador para solucionarlo');
        $horario = Horario::find($request->horario_id);
        if(!$horario)
            return redirect()->back()->with('error','Problemas al agregar horario. Si el problema continúa contacte con el admnisitrador');
        $materia->horarios()->attach($horario);
        return redirect()->back()->with('success','Horario agregado.');
        
        
    }
        
    public function quitHorario($materia_id,$horario_id){
        $materia = Materia::find($materia_id);
        if(!$materia)
            return redirect()->back()->with('error','Problemas al encontrar la materia, contacte con el administrador para solucionarlo');
        $materia->horarios()->detach($horario_id);
        return redirect()->back()->with('success','Horario eliminado de la lista.');
    }
    
    public function addDocente(Request $request,$materia_id){
        $materia = Materia::find($materia_id);
        if($materia){
            $docente = Docente::find($request->docente_id);
            if(!$docente)
                return redirect()->back()->with('error','Problemas al agregar docente. Si el problema continúa contacte con el admnisitrador');
            $materia->docentes()->attach($docente);
            return redirect()->back()->with('success','docente agregado.');
        }
        else 
            return redirect()->back()->with('error','Problemas al encontrar la materia, contacte con el administrador para solucionarlo');
    }

    public function quitDocente($materia_id,$docente_id){
        $materia = Materia::find($materia_id);
        if(!$materia)
            return redirect()->back()->with('error','Problemas al encontrar la materia, contacte con el administrador para solucionarlo');
        $materia->docentes()->detach($docente_id);
        return redirect()->back()->with('success','Docente eliminado de la lista.');
    }

}
