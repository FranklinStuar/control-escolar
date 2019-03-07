<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horario;

class HorariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = [
            'lunes' => Horario::where('dia','lunes')->get(),
            'martes' => Horario::where('dia','martes')->get(),
            'miercoles' => Horario::where('dia','miercoles')->get(),
            'jueves' => Horario::where('dia','jueves')->get(),
            'viernes' => Horario::where('dia','viernes')->get(),
            'sabado' => Horario::where('dia','sabado')->get(),
            'domingo' => Horario::where('dia','domingo')->get(),
        ];
        return view('horarios.index')
        ->with('horarios',$horarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $horario = new Horario;
        $semana = [
            ['lunes','Lunes'],
            ['martes','Martes'],
            ['miercoles','Miércoles'],
            ['jueves','Jueves'],
            ['viernes','Viernes'],
            ['sabado','Sábado'],
            ['domingo','Domingo'],
        ];
        $horario->dia = $request->day;
        return view('horarios.create')
        ->with('semana',$semana)
        ->with('horario',$horario);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horario = Horario::create($request->all());
        return redirect()->route('horarios.index')
        ->with('success','Horario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semana = [
            ['lunes','Lunes'],
            ['martes','Martes'],
            ['miercoles','Miércoles'],
            ['jueves','Jueves'],
            ['viernes','Viernes'],
            ['sabado','Sábado'],
            ['domingo','Domingo'],
        ];
        return view('horarios.show')
        ->with('semana',$semana)
        ->with('horario',Horario::find($id));
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
        $horario = Horario::find($id);
        $horario->update($request->all());
        return redirect()->route('horarios.show',$id)
            ->with('success','Horario editado correctamente');
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
        $horario = Horario::find($id);
        $horario->delete();
        return redirect()->route('horarios.index')
            ->with('success','Horario eliminado correctamente');
    }
}
