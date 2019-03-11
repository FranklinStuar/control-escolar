<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')
        ->with('estudiantes',\App\Models\Estudiante::all())
        ->with('cursos',\App\Models\Curso::all())
        ->with('docentes',\App\Models\Docente::all())
        ->with('horarios',\App\Models\Horario::all())
        ->with('materias',\App\Models\Materia::all())
        ->with('periodos',\App\Models\Periodo::all())
        ;
    }
}
