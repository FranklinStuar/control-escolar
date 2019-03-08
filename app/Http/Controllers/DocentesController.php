<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use App\Models\Persona;
use App\Models\Materia;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docentes.index')
        ->with('docentes',$docentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docente = new Docente;
        $docente->persona = new Persona;
        return view('docentes.create')
        ->with('docente',$docente);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personaExist = false;
        $persona = Persona::where('dni',$request->dni)->first();
        $docente = Docente::where('codigo',$request->codigo)->first();
        if($docente)
            return redirect()->back()->with('error',"Código del docente existe");
        if($persona){
            $personaExist = true;
            $docente = \DB::table('docentes')
            ->where('persona_id',$persona->id)
            ->count();
            if($docente)
                return redirect()->back()->with('error',"Docente ya existe");
            $alumno = \DB::table('estudiantes')
            ->where('persona_id',$persona->id)
            ->count();
            if($alumno)
                return redirect()->back()->with('error',"DNI pertenece a un alumno. Los alumnos no están permitidos como docentes");
        }

        $foto = null;
        $curriculum_vitae = null;
        $antecedentes_penales = null;
        $dni = $request->dni;
        /* Sube los archivos a la base de datos */
        if ($request->hasFile('foto'))
            $foto = \Storage::disk('public')->putFile('img',$request->file('foto'));
        if ($request->hasFile('curriculum_vitae'))
            $curriculum_vitae = \Storage::disk('public')->putFile('curriculum_vitae',$request->file('curriculum_vitae'));
        if ($request->hasFile('antecedentes_penales'))
            $antecedentes_penales = \Storage::disk('public')->putFile('antecedentes_penales',$request->file('antecedentes_penales'));


        //creo al docente con la persona existente actualizando la opción de foto
        if($personaExist){
            $docente = Docente::create([
                'codigo' => $request->codigo,
                'lugar_studio' => $request->lugar_studio,
                'curriculum_vitae' => $curriculum_vitae,
                'antecedentes_penales' => $antecedentes_penales,
                'persona_id' => $persona->id,
            ]);
            $persona->udate([
                'foto'=>$foto
            ]);
            return redirect()->route('docentes.edit',$docente->id)
            ->with('success','DNI encontrado, posiblemente como padre de familia. Docente creado con el dni y los datos encontrados');
        
        }

        //creo al docente creando también a la persona
        $docente = Docente::create([
            'codigo' => $request->codigo,
            'lugar_studio' => $request->lugar_studio,
            'curriculum_vitae' => $curriculum_vitae,
            'antecedentes_penales' => $antecedentes_penales,
            'persona_id' => Persona::create([
                'dni' => $request->dni,
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'foto' => $foto,
                'email' => $request->email,
            ])->id,
        ]);
        return redirect()->route('docentes.edit',$docente->id)
        ->with('success','Docente creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docente::find($id);
        return view('docentes.show')
        ->with('docente',$docente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        return view('docentes.edit')
        ->with('materias',Materia::all())
        ->with('docente',$docente);
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
        $personaExist = false;
        $docenteTemp = Docente::where('codigo',$request->codigo)->first();
        if($docenteTemp && $docenteTemp->id != $id)
            return redirect()->back()->with('error',"Otro docente tiene el mismo código");
        $persona = Persona::where('dni',$request->dni)->first();
        
        if($persona){
            $docente = \DB::table('docentes')
            ->where('persona_id',$persona->id)
            ->first();
            if($docente && $docente->id != $id)
                return redirect()->back()->with('error',"Otro docente tiene el mismo dni");
            
            $alumno = \DB::table('estudiantes')
            ->where('persona_id',$persona->id)
            ->count();
            if($alumno)
                return redirect()->back()->with('error',"DNI pertenece a un alumno. Los alumnos no están permitidos como docentes");
            $personaExist = true;
        }
        else{
            $persona = Persona::create([
                'dni' => $request->dni,
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'email' => $request->email,
            ]);
        }
        
        $docente = Docente::find($id);
        $foto = null;
        $curriculum_vitae = null;
        $antecedentes_penales = null;
        $dni = $request->dni;
        
        if ($request->hasFile('foto'))
            $foto = \Storage::disk('public')->putFile('img',$request->file('foto'));
        if ($request->hasFile('curriculum_vitae'))
            $curriculum_vitae = \Storage::disk('public')->putFile('curriculum_vitae',$request->file('curriculum_vitae'));
        if ($request->hasFile('antecedentes_penales'))
            $antecedentes_penales = \Storage::disk('public')->putFile('antecedentes_penales',$request->file('antecedentes_penales'));

        if($personaExist){
            $persona->update([
                'dni' => $request->dni,
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'email' => $request->email,
                'foto'=>$foto
            ]);
        }
        else{
            $persona->update([
                'foto'=>$foto
            ]);
        }
        //creo al docente con la persona existente actualizando la opción de foto
        $docente->update([
            'codigo' => $request->codigo,
            'lugar_studio' => $request->lugar_studio,
            'curriculum_vitae' => $curriculum_vitae,
            'antecedentes_penales' => $antecedentes_penales,
            'persona_id' => $persona->id,
        ]);
        return redirect()->route('docentes.edit',$docente->id)
        ->with('success','Docente editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return redirect()->route('docentes.index')
        ->with('success','Docente eliminado correctamente');
    }
    
    public function addMateria(Request $request,$docente_id){
        $docente = Docente::find($docente_id);
        if($docente){
            $materia = Materia::find($request->materia_id);
            if(!$materia)
                return redirect()->back()->with('error','Problemas al agregar materia. Si el problema continúa contacte con el admnisitrador');
            $docente->materias()->attach($materia);
            return redirect()->back()->with('success','materia agregado.');
        }
        else 
            return redirect()->back()->with('error','Problemas al encontrar la materia, contacte con el administrador para solucionarlo');
    }
    public function quitMateria($docente_id,$materia_id){
        $docente = Docente::find($docente_id);
        if(!$docente)
            return redirect()->back()->with('error','Problemas al encontrar la docente, contacte con el administrador para solucionarlo');
        $docente->materias()->detach($materia_id);
        return redirect()->back()->with('success','Materia eliminada de la lista.');
    }
}
