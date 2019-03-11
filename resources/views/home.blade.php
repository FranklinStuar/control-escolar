@extends('layouts.app')

@section('title')
    Administrador
@endsection

@section('content')
    <!-- Card -->
    <div class="row">
        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
            <div class="widget-card widget-bg1">					 
                <div class="wc-item">
                    <h4 class="wc-title">
                        Estudiantes
                    </h4>
                    <span class="wc-des">
                        Estudiantes totales registrados en el sistema
                    </span>
                    <span class="wc-stats">
                        <span class="counter">{{$estudiantes->count()}}</span>
                    </span>		
                    
                    <span class="wc-progress-bx">
                        <span class="wc-change">
                            
                        </span>
                        <span class="wc-number ml-auto">
                        </span>
                    </span>
                </div>				      
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
            <div class="widget-card widget-bg2">					 
                <div class="wc-item">
                    <h4 class="wc-title">
                        Cursos
                    </h4>
                    <span class="wc-des">
                        Cursos totales registrados en el sistema
                    </span>
                    <span class="wc-stats">
                        <span class="counter">{{$cursos->count()}}</span>
                    </span>		
                    
                    <span class="wc-progress-bx">
                        <span class="wc-change">
                            
                        </span>
                        <span class="wc-number ml-auto">
                        </span>
                    </span>
                </div>				      
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
            <div class="widget-card widget-bg3">					 
                <div class="wc-item">
                    <h4 class="wc-title">
                        Docentes
                    </h4>
                    <span class="wc-des">
                        Docentes totales registrados en el sistema
                    </span>
                    <span class="wc-stats">
                        <span class="counter">{{$docentes->count()}}</span>
                    </span>		
                    
                    <span class="wc-progress-bx">
                        <span class="wc-change">
                            
                        </span>
                        <span class="wc-number ml-auto">
                        </span>
                    </span>
                </div>				      
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
            <div class="widget-card widget-bg4">					 
                <div class="wc-item">
                    <h4 class="wc-title">
                        Horarios
                    </h4>
                    <span class="wc-des">
                        Horarios totales registrados en el sistema
                    </span>
                    <span class="wc-stats">
                        <span class="counter">{{$horarios->count()}}</span>
                    </span>		
                    
                    <span class="wc-progress-bx">
                        <span class="wc-change">
                            
                        </span>
                        <span class="wc-number ml-auto">
                        </span>
                    </span>
                </div>				      
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
            <div class="widget-card widget-bg4">					 
                <div class="wc-item">
                    <h4 class="wc-title">
                        Materias
                    </h4>
                    <span class="wc-des">
                        Materias totales registrados en el sistema
                    </span>
                    <span class="wc-stats">
                        <span class="counter">{{$materias->count()}}</span>
                    </span>		
                    
                    <span class="wc-progress-bx">
                        <span class="wc-change">
                            
                        </span>
                        <span class="wc-number ml-auto">
                        </span>
                    </span>
                </div>				      
            </div>
        </div>
        <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
            <div class="widget-card widget-bg3">					 
                <div class="wc-item">
                    <h4 class="wc-title">
                        Periodos Lectivos
                    </h4>
                    <span class="wc-des">
                        Periodos Lectivos totales registrados en el sistema
                    </span>
                    <span class="wc-stats">
                        <span class="counter">{{$periodos->count()}}</span>
                    </span>		
                    
                    <span class="wc-progress-bx">
                        <span class="wc-change">
                            
                        </span>
                        <span class="wc-number ml-auto">
                        </span>
                    </span>
                </div>				      
            </div>
        </div>
       
    </div>
   
    <div class="col-lg-12 m-b30">
        <div class="widget-box">
            <div class="wc-title">
                <h4>Sistema</h4>
            </div>
            <div class="widget-inner">
                Bienvenido.  A la izquierda del sitio puede encontrar la informaciòn importante con la que puede trabajar. 
                Si necesita algunos cambio o mejoras no dude encontactar con el administrador y él se comunicaré con Soporte técnico
            </div>
        </div>
    </div>
@endsection
