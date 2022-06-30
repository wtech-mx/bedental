@extends('layouts.app')

@section('title')
    Control de pagos
@endsection

@section('css')
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
@endsection

@section('content')

<div class="container-fluid mt-3">
      <div class="row">

        <div class="col-12">

        </div>

        <div class="col-12">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-3">Control de pagos</h3>
                <a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#facturas">
                   Crear nueva Pago
                </a>
            </div>

            <div class="table-responsive py-4" style="margin-left: 1rem;">
              <table class="table table-flush table_id" id="datatable-basic" >
                  <thead class="thead-light">
                      <tr>
                       <th>Fecha</th>
                       <th>Paciente</th>
                       <th>Doctor</th>
                       <th>Tratamiento</th>
                       <th>Costo Total</th>
                       <th>Saldo pendiente</th>
                       <th>Pagado</th>
                       <th>Firma Doctor</th>
                       <th >Firma Paciete</th>
                       <th >Acciones</th>
                     </tr>
                  </thead>

                   @foreach ($controlpagos as $item)
                      <tr>
                       <td>{{$item->fecha}}</td>
                       <td>{{$item->Client->nombre}}</td>
                       <td>{{$item->Especialists->nombre}}</td>
                       <td>{{$item->Colores->servicio}}</td>
                       <td>{{$item->costo_total}}</td>
                       <td>{{$item->saldo_pendiente}}</td>
                       <td>{{$item->pagado}}</td>
                       <td>{{$item->firma_doctor}}</td>
                       <td>{{$item->firma_paciente}}</td>
                        <td class="text-left">
                          <div class="dropdown ">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                              <a class="dropdown-item" type="button" data-toggle="modal" data-target="#controlpagos{{$item->id}}">
                                 <i class="fa fa-pen"></i> Editar
                              </a>

                            </div>
                          </div>
                        </td>
                      </tr>
                   @include('controlpagos.edit')

                   @endforeach
              </table>
            </div>

          </div>
        </div>
      </div>
</div>

    <script type="text/javascript">
        var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>

@endsection


