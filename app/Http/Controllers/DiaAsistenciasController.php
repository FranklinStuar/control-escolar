<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiaAsistencia;
use App\Models\Asistencia;
use App\Models\Curso;

class DiaAsistenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($curso_id)
    {
        $diasAsistencia = DiaAsistencia::where('curso_id',$curso_id)
        ->orderBy('fecha', 'desc')
        ->get();
        
        $asistencias = [];

        $curso = Curso::find($curso_id);
        
        foreach ($curso->estudiantes as $estudiante) {
            $items = collect([]);
            foreach ($diasAsistencia as $diaAsistencia) {
                $items->push($estudiante->asistencias->where('dia_asistencia_id',$diaAsistencia->id)->first());
            }
            array_push($asistencias,[
                'estudiante'=>$estudiante->persona->nombres.' '.$estudiante->persona->apellidos,
                'dias'=>$items
            ]);
        }

        return view('curso-asistencias.index')
        ->with('dias',$diasAsistencia)
        ->with('asistencias',$asistencias)
        ->with('curso',$curso);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$curso_id)
    {
        $curso = Curso::find($curso_id);
        $diaAsistencia = DiaAsistencia::create([
            'fecha'=>$request->fecha,
            'curso_id' => $curso_id
        ]);  
        foreach ($curso->estudiantes as $estudiante) {
            Asistencia::create([
                'tipo' => 'A',
                'fecha' => $diaAsistencia->fecha,
                'estudiante_id'=>$estudiante->id,
                'dia_asistencia_id'=>$diaAsistencia->id,
            ]);
        }
        return redirect()->back()
        ->with('success',"Asistencia agregada correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($curso_id,$id)
    {
        $curso = Curso::find($curso_id);
        $diaAsistencia = DiaAsistencia::find($id);
        $tiposAsistencia = [
            ['T','Tardanza'],
            ['A','Asiste'],
            ['Fj','Falta Justificada'],
            ['Fi','Falta injustificada'],
        ];
        return view('curso-asistencias.show')
        ->with('diaAsistencia',$diaAsistencia)
        ->with('tiposAsistencia',$tiposAsistencia)
        ->with('curso',$curso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$curso_id,$id)
    {
        $asistencia = Asistencia::find($id);
        $alumno = $asistencia->estudiante->persona->apellidos . " " . $asistencia->estudiante->persona->nombres;
        $asistencia->update($request->all());
        return redirect()->back()
        ->with('success',"Asistencia del alumno \" $alumno \" ha sido actualizada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($curso_id,$id)
    {
        $diaAsistencia = DiaAsistencia::find($id);
        $diaAsistencia->delete();
        return redirect()->route('dia-asistencias.index',$curso_id)
        ->with('success',"Asistencia eliminada correctamente");
    }
}
