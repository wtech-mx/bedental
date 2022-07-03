@extends('layouts.app')

@section('title')
    Odontograma
@endsection

@section('content')

<div class="container-fluid mt-3">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-3">Crear Odontograma</h3>
            </div>

        <form action="{{ route('odontograma.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">

                <div class="row">

                    <div class="form-group col-4 mb-3">
                        <label for="">Selecionar Paciente</label>
                            <select class="form-control mibuscador_paciente" id="id_clients" name="id_clients" required>
                                    <option value="">Seleccione Paciente</option>
                                        @foreach($client as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                        @endforeach
                            </select>
                    </div>

                    <div class="form-group col-4 mb-3">
                        <label for="">Selecionar Especialista</label>
                            <select class="form-control" id="id_doctor" name="id_doctor" required>
                                    <option value="">Seleccione Especialista</option>
                                        @foreach($especialist as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                        @endforeach
                            </select>
                    </div>

                    <div class="form-group col-4">
                        <label for="">Fecha</label>
                        <input class="form-control" type="date" name="fecha" id="fecha" required>
                    </div>

                    <div class="form-group col-2">
                        <i class="fa fa-tooth"></i>
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado1_1" name="lado1_1">
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado2_1" name="lado2_1">
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado3_1" name="lado3_1">
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado4_1" name="lado4_1">
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado5_1" name="lado5_1">
                    </div>

                    <div class="form-group col-2">
                        <i class="fa fa-tooth"></i>
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado1_2" name="lado1_2">
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado2_2" name="lado2_2">
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado3_2" name="lado3_2">
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado4_2" name="lado4_2">
                    </div>
                    <div class="form-group col-2">
                        <input class="form-check-input" type="checkbox" value="1" id="lado5_2" name="lado5_2">
                    </div>

                    <div class="form-group col-2">
                        <label for="">OD</label>
                    </div>
                    <div class="form-group col-2">
                        <label for="">Diagnostico</label>
                    </div>
                    <div class="form-group col-2">
                        <label for="">Tratamiento</label>
                    </div>
                    <div class="form-group col-2">
                        <label for="">Costo</label>
                    </div>
                    <div class="form-group col-2">
                        <label for="">estatus</label>
                    </div>
                    {{-- <div class="form-group col-2">
                        <label for="">fecha</label>
                    </div> --}}
                </div>

                <div id="tabla">

                </div>

                <a href="javascript:;" id="agregar" class="btn btn-success">Agregar tratamiento</a>

                <div class="rwo">
                    <div class="form-group col-12">
                        <label for="">Observaciones</label>
                        <input class="form-control" type="text" name="observaciones" id="observaciones">
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </form>

    </div>
</div>
</div>
</div>

@endsection

@section('odontograma')
<script type="text/javascript">
$('#agregar').click(function(){
agregar();
});

function agregar(){
var od=$('#od').val();
var diagnostico=$('#diagnostico').val();
var tratamiento=$('#tratamiento').val();
var costo=$('#costo').val();
var estatus=$('#estatus').val();
var fecha=$('#fecha').val();
var fila='<div class="row">'+
'<div class="form-group col-2"><input type="number" class="form-control" id="od[]" name="od[]"></div>'+
'<div class="form-group col-2"><input type="text" class="form-control" id="diagnostico[]" name="diagnostico[]"></div>'+
'<div class="form-group col-2"><input type="text" class="form-control" id="tratamiento[]" name="tratamiento[]"></div>'+
'<div class="form-group col-2"><input type="number" class="form-control" id="costo[]" name="costo[]"></div>'+
'<div class="form-group col-2">'+
    '<select class="form-control" id="estatus[]" name="estatus[]" required>'+
        '<option value="Pendiente">Pendiente</option>'+
        '<option value="Proceso">Proceso</option>'+
        '<option value="Realizado">Realizado</option>'+
    '</select>'+
'</div>'+
'</div>';

$('#tabla').append(fila);
}
</script>
@endsection
