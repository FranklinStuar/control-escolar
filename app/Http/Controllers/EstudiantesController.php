<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Persona;
use App\Models\Representante;
use App\Models\Curso;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index')
        ->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estudiante = new Estudiante;
        $estudiante->persona = new Persona;
        $estudiante->representante = new Representante;
        $estudiante->representante->persona = new Persona;
        return view('estudiantes.create')
        ->with('cursos',Curso::all())
        ->with('estudiante',$estudiante);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = Persona::where('dni',$request->dni)->first();
        
        if($persona)
            return redirect()->back()->with('error',"DNI pertenece otra persona, Asegúrese que el DNI sea correcto");

        $representante_dni = Persona::where('dni',$request->representante_dni)->first();
        if($representante_dni){
            $representante = Representante::where('persona_id',$representante_dni->id)->first();
            $docente = null;
            if(!$representante){
                $docente = \App\Models\Docente::where('persona_id',$representante_dni->id)->first();
                if($docente){
                    $representante = Representante::create([
                        'persona_id' => $docente->persona_id,
                    ]);
                }
                else{
                    $representante = Representante::create([
                        'persona_id' => Persona::create([
                            'dni' => $request->representante_dni,
                            'nombres' => $request->representante_nombres,
                            'apellidos' => $request->representante_apellidos,
                            'email' => $request->representante_email,
                        ])->id,
                    ]);
                }
            }
        }
       
        $foto = null;
        /* Sube los archivos a la base de datos */
        if ($request->hasFile('foto'))
            $foto = \Storage::disk('public')->putFile('estudiantes',$request->file('foto'));

        //creo al estudiante creando también a la persona
        $estudiante = Estudiante::create([
            'nacimiento'=>$request->nacimiento,
            'representante_id'=>$representante->id,
            'curso_id'=>$request->curso_id,
            'persona_id'=>Persona::create([
                'dni' => $request->dni,
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'email' => $request->email,
                'foto'=>$foto
            ])->id
        ]);


        foreach ($estudiante->curso->materias as $materia) {
            foreach ($materia->grupoNotas as $grupoNota) {
                $nota = \App\Models\Nota::create([
                    'grupo_nota_id' => $grupoNota->id,
                    'estudiante_id' => $estudiante->id,
                    'nota'=>0,
                    'fecha'=>$grupoNota->fecha,
                ]);
            }
        }
        foreach ($estudiante->curso->diaAsistencias as $diaAsistencia) {
            $nota = \App\Models\Asistencia::create([
                'tipo' => 'Fj',
                'fecha' => $diaAsistencia->fecha,
                'observacion'=>'Estudiante no matriculado',
                'estudiante_id'=>$estudiante->id,
                'dia_asistencia_id'=>$diaAsistencia->id,
            ]);
        }
    
        return redirect()->route('estudiantes.show',$estudiante->id)
        ->with('success','Estudiante creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiantes.show')
        ->with('estudiante',$estudiante);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiantes.edit')
        ->with('cursos',Curso::all())
        ->with('estudiante',$estudiante);
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
        $persona = Persona::where('dni',$request->dni)->first();
        $estudiante = Estudiante::find($id);
        if($persona && $persona->id != $estudiante->persona_id)
            return redirect()->back()->with('error',"DNI pertenece otra persona, Asegúrese que el DNI sea correcto");
        if(!$persona){
            $persona = Persona::create([
                'dni' => $request->dni,
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'email' => $request->email,
            ]);
            
            // Elimino la persona anterior
            $estudiante->persona->delete();
            $estudainte->update([
                'persona_id'=>$persona->id,
            ]);
        }
        else{
            $persona->update([
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'email' => $request->email,
            ]);
        }

        $representante_dni = Persona::where('dni',$request->representante_dni)->first();
        if($representante_dni){
            $representante = Representante::where('persona_id',$representante_dni->id)->first();
            if($representante){
                $representante->persona->update([
                    'nombres' => $request->representante_nombres,
                    'apellidos' => $request->representante_apellidos,
                    'email' => $request->representante_email,
                ]);
            }
            else{
                $docente = \App\Models\Docente::where('persona_id',$representante_dni->id)->first();
                if($docente){
                    $representante = Representante::create([
                        'persona_id' => $docente->persona_id,
                    ]);
                }
                else{
                    $representante = Representante::create([
                        'persona_id' => Persona::create([
                            'dni' => $request->representante_dni,
                            'nombres' => $request->representante_nombres,
                            'apellidos' => $request->representante_apellidos,
                            'email' => $request->representante_email,
                        ])->id,
                    ]);
                }
            }
        }
       

        $foto = null;
        /* Sube los archivos a la base de datos */
        if ($request->hasFile('foto'))
            $foto = \Storage::disk('public')->putFile('estudiantes',$request->file('foto'));


        //actualizo al estudiante creando también a la persona
        $estudiante->update([
            'nacimiento'=>$request->nacimiento,
            'curso_id'=>$request->curso_id,
        ]);
        $persona->update([
            'foto'=>$foto
        ]);
        return redirect()->route('estudiantes.show',$estudiante->id)
        ->with('success','Estudiante actualizado correctamente correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        foreach ($estudiante->notas as $nota) {
            $nota->delete();
        }
        foreach ($estudiante->asistencias as $asistencia) {
            $asistencia->delete();
        }
        $estudiante->delete();
        
        return redirect()->route('estudiantes.index')
        ->with('success','Estudiante eliminado correctamente correctamente');
    }
}
