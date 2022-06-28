@extends('layouts.app')

@section('title')
    Control de pagos
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
                       <th>Cita</th>
                       <th>Tratamiento</th>
                       <th>Costo Total</th>
                       <th>Pagado</th>
                       <th>Saldo pendiente</th>
                       <th>Firma Doctor</th>
                       <th >Firma Paciete</th>
                       <th >Acciones</th>
                     </tr>
                  </thead>

                   @foreach ($controlpagos as $item)
                      <tr>
                       <td>{{$item->fecha}}</td>
                       <td>{{$item->Client->nombre}}</td>
                       <td>{{$item->id_alertas}}</td>
                       <td>{{$item->tratamiento}}</td>
                       <td>{{$item->costo_total}}</td>
                       <td>{{$item->pagado}}</td>
                       <td>{{$item->saldo_pendiente}}</td>
                       <td>{{$item->firma_doctor}}</td>
                       <td>{{$item->firma_paciente}}</td>
                       <td class="text-left"></td>
                      </tr>

                   @endforeach

              </table>
            </div>

          </div>
        </div>
      </div>
</div>
 @include('facturas.create')

@endsection
