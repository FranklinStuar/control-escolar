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
                                            <label class="col-form-label">Nombre</label>
                                            <div>
                                                <input name="nombre" class="form-control" type="text" value="{{$periodo->nombre}}" required>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <hr>
                    </div>
                    <div class="col-12">
                        <a class="delete" href="{{route('periodos.index')}}"><i class="fa fa-close"></i> Cancelar</a>
                        <button type="submit" class="btn">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>