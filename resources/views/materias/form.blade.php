<div class="widget-box">
    <div class="widget-inner">
        <form action="{{$url}}" class="edit-profile" method="POST">
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
                                        <label class="col-form-label">Código</label>
                                        <div>
                                            <input name="codigo" class="form-control" type="text" value="{{$materia->codigo}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Nombre</label>
                                        <div>
                                            <input name="nombre" class="form-control" type="text" value="{{$materia->nombre}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Créditos</label>
                                        <div>
                                            <input name="creditos" class="form-control" type="number" min="0" max="1000" value="{{$materia->creditos}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-form-label">Curso</label>
                                        <div>
                                            <select name="curso_id" id="curso_id" required>
                                                @foreach ($cursos as $curso)
                                                    <option value="{{$curso->id}}"  @if ($curso->id == $materia->curso_id) selected @endif>
                                                        {{$curso->nombre}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </td>
                        </tr>
                    </table>
                    <hr>
                </div>
                <div class="col-12">
                    <a class="delete" href="{{route('materias.index')}}"><i class="fa fa-close"></i> Cancelar</a>
                    <button type="submit" class="btn">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>