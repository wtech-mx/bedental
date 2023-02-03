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
              <h3 class="mb-3">Editar Odontograma</h3>
            </div>
        <form action="{{ route('odontograma.update', $odontograma->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="modal-body">

                <div class="row">

                    <div class="form-group col-4 mb-3">
                        <label for="">Selecionar Paciente</label>
                            <select class="form-control mibuscador_paciente" id="id_clients" name="id_clients" required>
                                    <option value="{{$odontograma->id_clients}}">{{$odontograma->Client->nombre}} {{$odontograma->Client->apellido}}</option>
                                        @foreach($client as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                        @endforeach
                            </select>
                    </div>

                    <div class="form-group col-4 mb-3">
                        <label for="">Selecionar Especialista</label>
                            <select class="form-control" id="id_doctor" name="id_doctor" required>
                                    <option value="{{$odontograma->id_doctor}}">{{$odontograma->Doctor->nombre}} {{$odontograma->Doctor->apellido}}</option>
                                        @foreach($especialist as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                        @endforeach
                            </select>
                    </div>

                    <div class="form-group col-4">
                        <label for="">Fecha</label>
                        <input class="form-control" type="date" name="fecha" id="fecha" value="{{$odontograma->fecha}}" required>
                    </div>

                    <div class="col-12 text-center">

                        <div class="d-flex justify-content-center mb-5">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Temprales</a>
                              </li>

                              <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Permanentes</a>
                              </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="col-12 mb-5">
                                <div class="row">
                                    @foreach($hunts_permanentes as $item)
                                        <div class="form-group mb-5 col-1 p-4">
                                            <div class="container_checkbox_odontogram position-relative">
                                                <i class="fa fa-tooth position-absolute" style="left: 0px;top: -20px;"></i>
                                                <input type="checkbox" value="{{$item->od}}" id="od" name="od">
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado11_{{$item->od}}[]" name="lado11_{{$item->od}}[]" style="left: 20px;top: -2px;">
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado22_{{$item->od}}[]" name="lado22_{{$item->od}}[]" style="left: 8px;top: 10px;">
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado33" name="lado33" style="left: 20px;top: 10px;">
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado44" name="lado44" style="left: 32px;top: 10px;">
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado55" name="lado55" style="left: 20px;top:22px;">
                                                <p style="font-size: 9px;position: absolute;top: 40px;left:-5px ">OD: {{$item->od}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                          </div>

                          <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="col-12 mb-5">
                                <div class="row">
                                    @foreach($hunts_child as $item)
                                        <div class="form-group mb-5 col-1 p-4">
                                            <div class="container_checkbox_odontogram position-relative">
                                                <i class="fa fa-tooth position-absolute" style="left: 0px;top: -20px;"></i>
                                                <label>{{ Form::checkbox('hunts_child[]', 1, in_array($dientes, $dientes) ? 1 : 0, array('class' => 'name')) }}
                                                    {{ $item->od }}</label>
                                                {{-- @if($odontograma->Diente->lado1 == 1)
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado1_{{$item->od}}[]" name="lado1_{{$item->od}}[]" style="left: 20px;top: -2px;">
                                              @else
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado1_{{$item->od}}[]" name="lado1_{{$item->od}}[]" style="left: 20px;top: -2px;">
                                                @endif

                                                @if($odontograma->Diente->lado2 == 1)
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado2_{{$item->od}}[]" name="lado2_{{$item->od}}[]" style="left: 8px;top: 10px;" checked>
                                                @else
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado2_{{$item->od}}[]" name="lado2_{{$item->od}}[]" style="left: 8px;top: 10px;">
                                                @endif

                                                @if($odontograma->Diente->lado3 == 1)
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado3_{{$item->od}}[]" name="lado3_{{$item->od}}[]" style="left: 20px;top: 10px;" checked>
                                                @else
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado3_{{$item->od}}[]" name="lado3_{{$item->od}}[]" style="left: 20px;top: 10px;">
                                                @endif

                                                @if($odontograma->Diente->lado4 == 1)
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado4_{{$item->od}}[]" name="lado4_{{$item->od}}[]" style="left: 32px;top: 10px;" checked>
                                                @else
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado4_{{$item->od}}[]" name="lado4_{{$item->od}}[]" style="left: 32px;top: 10px;">
                                                @endif

                                                @if($odontograma->Diente->lado5 == 1)
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado5_{{$item->od}}[]" name="lado5_{{$item->od}}[]" style="left: 20px;top:22px;" checked>
                                                @else
                                                <input class="form-check-input position-absolute"  type="checkbox" value="1" id="lado5_{{$item->od}}[]" name="lado5_{{$item->od}}[]" style="left: 20px;top:22px;">
                                                @endif
                                                <p style="font-size: 9px;position: absolute;top: 40px;left:-5px ">OD: {{$item->od}}</p> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                          </div>

                        </div>

                    </div>



                    <div class="form-group col-2 ">
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

                </div>

                <div class="row">
                    @foreach($plan_tratamiento as $item)
                        <div class="form-group col-2"><input type="number" class="form-control" id="od" name="od" value="{{$item->od}}"></div>
                        <div class="form-group col-2"><input type="text" class="form-control" id="diagnostico" name="diagnostico" value="{{$item->diagnostico}}"></div>
                        <div class="form-group col-2"><input type="text" class="form-control" id="tratamiento" name="tratamiento" value="{{$item->tratamiento}}"></div>
                        <div class="form-group col-2"><input type="number" class="form-control" id="costo" name="costo" value="{{$item->costo}}"></div>
                        <div class="form-group col-2">
                            <select class="form-control" id="estatus" name="estatus" required>
                                <option value="{{$item->estatus}}">{{$item->estatus}}</option>
                                <option value="Pendiente">Pendiente</option>
                                <option value="Proceso">Proceso</option>
                                <option value="Realizado">Realizado</option>
                            </select>
                        </div>
                        <div class="form-group col-2">
                        </div>
                    @endforeach
                </div>

                <div id="tabla">

                </div>

                <a href="javascript:;" id="agregar" class="btn btn-success">Agregar tratamiento</a>

                <div class="rwo">
                    <div class="form-group col-12">
                        <label for="">Observaciones</label>
                        <input class="form-control" type="text" name="observaciones" id="observaciones" value="{{$odontograma->observaciones}}">
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
