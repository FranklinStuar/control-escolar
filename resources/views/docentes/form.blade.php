<div class="widget-box">
    <div class="widget-inner">
        <form action="{{$url}}" class="edit-profile" method="POST" enctype="multipart/form-data">
            @if ($method=='PUT')  
                @method('PUT')
            @endif
            @csrf
            <div class="row">
                <div class="col-12">
                    <table id="item-add" style="width:100%;">
                        <tr class="list-item">
                            <td>
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <label class="col-form-label">Código *</label>
                                        <div>
                                            <input name="codigo" class="form-control" type="text" value="{{$docente->codigo}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">DNI *</label>
                                        <div>
                                            <input name="dni" class="form-control" type="text" value="{{$docente->persona->dni}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Nombres *</label>
                                        <div>
                                            <input name="nombres" class="form-control" type="text" value="{{$docente->persona->nombres}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Apellidos *</label>
                                        <div>
                                            <input name="apellidos" class="form-control" type="text" value="{{$docente->persona->apellidos}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Correo Electrónico *</label>
                                        <div>
                                            <input name="email" class="form-control" type="email" value="{{$docente->persona->email}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Lugar de estudio Superior *</label>
                                        <div>
                                            <input name="lugar_studio" class="form-control" type="text" value="{{$docente->lugar_studio}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Fotografía</label>
                                        <div>
                                            <input name="foto" type="file" accept="image/x-png,image/gif,image/jpeg" >
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Hoja de vida (
                                            @if ($method=='PUT')  
                                                <a href="{{url(Storage::url($docente->curriculum_vitae))}}">Ver archivo</a>
                                            @else
                                                *
                                            @endif
                                        )</label>
                                        <div>
                                            <input name="curriculum_vitae" type="file" @if($method!='PUT') required @endif accept=".pdf, .doc, .docx">
                                        </div>
                                        
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Antecedentes penales (
                                            @if ($method=='PUT')  
                                                <a href="{{url(Storage::url($docente->antecedentes_penales))}}">Ver archivo</a>
                                            @else
                                                *
                                            @endif
                                        )</label>
                                        <div>
                                            <input name="antecedentes_penales" type="file" @if($method!='PUT') required @endif accept=".pdf, .doc, .docx">
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-12">
                    <a class="delete" href="{{route('docentes.index')}}"><i class="fa fa-close"></i> Cancelar</a>
                    <button type="submit" class="btn">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

