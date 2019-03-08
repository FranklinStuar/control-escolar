<div class="widget-box">
    <div class="widget-inner">
        <form action="{{$url}}" class="edit-profile" method="POST">
            @if ($method=='PUT')  
                @method('PUT')
            @endif
            <input type="hidden" name="materia_id" value="{{$grupoNota->materia_id}}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <table id="item-add" style="width:100%;">
                        <tr class="list-item">
                            <td>
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <label class="col-form-label">Nombre</label>
                                        <div>
                                            <input name="nombre" class="form-control" type="text" value="{{$grupoNota->nombre}}" required autofocus placeholder="Objetivo de la nota">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Fecha</label>
                                        <div>
                                            <input name="fecha" class="form-control" type="date" value="@if($grupoNota->fecha){{$grupoNota->fecha}}@else{{$date}}@endif"
                                            required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Nota de calificación</label>
                                        <div>
                                            <input name="nota_limite" class="form-control" type="number" step="0.00" min="0" value="{{$grupoNota->nota_limite}}" required>
                                        </div>
                                        <small><b>Pdt:</b> Nota sobre la cual se va a calificar al alumno</small>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-form-label">Nota Real</label>
                                        <div>
                                            <input name="nota_equivalente" class="form-control" type="number" step="0.00" min="0" value="{{$grupoNota->nota_equivalente}}" required>
                                        </div>
                                        <small><b>Pdt:</b> Sirve para sumar en las calificaciones en total</small>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Objetido de la nota</label>
                                        <div>
                                            <textarea name="observacion" id="observacion" rows="3" class="form-control" required>{{$grupoNota->observacion}}</textarea>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
                <div class="col-12">
                    <a class="delete" href="{{route('cursos.index')}}"><i class="fa fa-close"></i> Cancelar</a>
                    <button type="submit" class="btn">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>