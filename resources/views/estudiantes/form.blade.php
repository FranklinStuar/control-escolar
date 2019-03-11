<form action="{{$url}}" class="edit-profile" method="POST" enctype="multipart/form-data">
    @if ($method=='PUT')  
        @method('PUT')
    @endif
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="widget-box">
                <div class="widget-inner">
               
                    <div class="row">
                        <div class="col-12">
                            <table id="item-add" style="width:100%;">
                                <tr class="list-item">
                                    <td>
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-form-label">DNI *</label>
                                                <div>
                                                    <input name="dni" class="form-control" type="text" value="{{$estudiante->persona->dni}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label">Nombres *</label>
                                                <div>
                                                    <input name="nombres" class="form-control" type="text" value="{{$estudiante->persona->nombres}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label">Apellidos *</label>
                                                <div>
                                                    <input name="apellidos" class="form-control" type="text" value="{{$estudiante->persona->apellidos}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label">Fecha de nacimiento *</label>
                                                <div>
                                                    <input name="nacimiento" class="form-control" type="date" value="{{$estudiante->nacimiento}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label">Correo Electrónico </label>
                                                <div>
                                                    <input name="email" class="form-control" type="email" value="{{$estudiante->persona->email}}">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label">Curso</label>
                                                <div>
                                                    <select name="curso_id" id="curso_id" required>
                                                        @foreach ($cursos as $curso)
                                                            <option value="{{$curso->id}}"  @if ($curso->id == $estudiante->curso_id) selected @endif>
                                                                {{$curso->nombre}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <hr>
                                                <label class="col-form-label">Fotografía</label>
                                                <div>
                                                    <input name="foto" type="file" accept="image/x-png,image/gif,image/jpeg" >
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
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-12">
                            <table id="item-add" style="width:100%;">
                                <tr class="list-item">
                                    <td>
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <label class="col-form-label">DNI *</label>
                                                <div>
                                                    <input name="representante_dni" class="form-control" type="text" value="{{$estudiante->representante->persona->dni}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label">Nombres *</label>
                                                <div>
                                                    <input name="representante_nombres" class="form-control" type="text" value="{{$estudiante->representante->persona->nombres}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label">Apellidos *</label>
                                                <div>
                                                    <input name="representante_apellidos" class="form-control" type="text" value="{{$estudiante->representante->persona->apellidos}}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="col-form-label">Correo Electrónico *</label>
                                                <div>
                                                    <input name="representante_email" class="form-control" type="email" value="{{$estudiante->representante->persona->email}}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</form>
    
    