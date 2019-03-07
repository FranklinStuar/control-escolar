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
                                        <div class="col-md-4">
                                            <label class="col-form-label">Día</label>
                                            <div>
                                                <select name="dia" id="dia" value="{{$horario->dia}}" class="form-control" required > 
                                                    @foreach ($semana as $dia)
                                                        <option value="{{$dia[0]}}"
                                                            @if ($dia[0]==$horario->dia)
                                                                selected
                                                            @endif
                                                        >{{$dia[1]}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-form-label">Hora de inicio</label>
                                            <div>
                                                <input name="inicio" class="form-control" placeholder="00:00" maxlength="5" type="text" value="{{$horario->inicio}}" required autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-form-label">Hora que finaliza</label>
                                            <div>
                                                <input name="fin" class="form-control" placeholder="00:00" maxlength="5" type="text" value="{{$horario->fin}}" required>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <hr>
                    </div>
                    <div class="col-12">
                        <a class="delete" href="{{route('horarios.index')}}"><i class="fa fa-close"></i> Cancelar</a>
                        <button type="submit" class="btn">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>