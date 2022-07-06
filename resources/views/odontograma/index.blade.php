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
              <h3 class="mb-3">Gestionar Odontograma</h3>
                <a type="button" class="btn btn-primary text-white" href="{{ route('odontograma.create') }}">
                   Crear nuevo odontograma
                </a>
            </div>

            <div class="table-responsive py-4" style="margin-left: 1rem;">
              <table class="table table-flush table_id" id="datatable-basic" >
                  <thead class="thead-light">
                      <tr>
                       <th>Pacietnes</th>
                       <th>Especialista</th>
                       <th>Fecha</th>
                       <th>Total</th>
                       <th>Estatus</th>
                       <th >Acciones</th>
                     </tr>
                  </thead>

                   @foreach ($odontograma as  $row)
                      <tr>
                       <td>{{$row->Client->nombre}} / <br> {{$row->Client->apellido}}</td>
                       <td>{{$row->Doctor->nombre}} / <br> {{$row->Doctor->apellido}}</td>
                       <td>{{$row->fecha}}</td>
                       @php

                       @endphp
                       <td>{{$row->total}}</td>
                       <td>
                           @if($row->estatus == 0)
                               <span class="badge badge-dot mr-4">
                                   <i class="bg-danger"></i>
                                   <span class="status">No terminado</span>
                               </span>
                           @endif
                            @if($row->estatus == 1)
                               <span class="badge badge-dot mr-4">
                                   <i class="bg-success"></i>
                                   <span class="status">Terminado</span>
                               </span>
                           @endif
                       </td>

                        <td class="text-left">
                          <div class="dropdown ">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" type="button" href="{{ route('odontograma.edit', $row->id) }}">
                                 <i class="fa fa-edit"></i> Editar Odontograma
                              </a>
                            </div>
                          </div>
                        </td>
                   @endforeach

              </table>
            </div>

          </div>
        </div>
      </div>
</div>

@endsection

