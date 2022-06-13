@extends('layouts.app')

@section('title')
    Facturas
@endsection

@section('content')

<div class="container-fluid mt-3">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-3">Gestionar Facturas</h3>
                <a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#facturas">
                   Crear nueva Facturas
                </a>
            </div>

            <div class="table-responsive py-4" style="margin-left: 1rem;">
              <table class="table table-flush table_id" id="datatable-basic" >
                  <thead class="thead-light">
                      <tr>
                       <th>Pacietnes</th>
                       <th>Correo</th>
                       <th>Fecha</th>
                       <th>Titulo</th>
                       <th>Estatus</th>
                       <th >Acciones</th>
                     </tr>
                  </thead>

                   @foreach ($facturas as  $row)
                      <tr>
                       <td>{{$row->Client->nombre}} / <br> {{$row->Client->apellido}}</td>
                          <td>{{$row->Client->email}}</td>
                       <td>{{$row->date}}</td>
                       <td>{{$row->name}}</td>
                       <td>
                           @if($row->estatus == 0)
                               <span class="badge badge-dot mr-4">
                                   <i class="bg-danger"></i>
                                   <span class="status">No enviado</span>
                               </span>
                           @endif
                            @if($row->estatus == 3)
                               <span class="badge badge-dot mr-4">
                                   <i class="bg-warning"></i>
                                   <span class="status">Error</span>
                               </span>
                           @endif
                            @if($row->estatus == 2)
                               <span class="badge badge-dot mr-4">
                                   <i class="bg-blue"></i>
                                   <span class="status">Cancelada</span>
                               </span>
                               @endif
                            @if($row->estatus == 1)
                               <span class="badge badge-dot mr-4">
                                   <i class="bg-success"></i>
                                   <span class="status">Enviado</span>
                               </span>
                            @endif
                       </td>

                        <td class="text-right">
                          <div class="dropdown ">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                              <a class="dropdown-item" type="button" data-toggle="modal" data-target="#staticBackdrop{{$row->id}}">
                                 <i class="fa fa-edit"></i> Editar Factura
                              </a>

                               @include('facturas.send_mail')

                            </div>
                          </div>
                        </td>
                    @include('facturas.edit')
                   @endforeach

              </table>
            </div>

          </div>
        </div>
      </div>
</div>
 @include('facturas.create')

@endsection
