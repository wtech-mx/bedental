@extends('layouts.app')

@section('title')
    Recordatorios
@endsection

@section('content')

<div class="container-fluid mt-3">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-3">Recordatorios</h3>
              {{-- <a class="btn btn-success" href="{{ route('users.create') }}">Crear nuevo usuario</a> --}}
            </div>

            <div class="table-responsive py-4" style="margin-left: 1rem;">
              <table class="table table-flush table_id" id="datatable-basic" >
                  <thead class="thead-light">
                      <tr>
                       <th>Nombre</th>
                       <th>Teléfon</th>
                       <th>Fecha de ultimo servicio</th>
                       <th>Fecha proxima</th>
                       <th>Servicio</th>
                       <th width="280px">Acciones</th>
                     </tr>
                  </thead>

                 @foreach ($alert_retenedores as $item)
                 @php
                    $fecha_ultimo  = date("d-m-Y", strtotime($item->start));
                    $proxima_retenedores  = date("d-m-Y", strtotime($item->start."+ 4 month"));
                    $proxima_limpieza  = date("d-m-Y", strtotime($item->start."+ 6 month"));
                 @endphp
                      <tr>
                        <td>{{ $item->Client->nombre }} {{ $item->Client->apellido }}</td>
                        <td>{{ $item->Client->telefono }}</td>
                        <td>{{ $fecha_ultimo }}</td>
                        <td>{{ $proxima_retenedores }}
                        <td>
                             Retenedores
                        </td>
                        </td>

                        <td>
                              <a href="https://api.whatsapp.com/send?phone=+52{{$item->Client->telefono}}&text=Hola%20{{ $item->Client->nombre }} {{ $item->Client->apellido }}%20tu%20pr%C3%B3xima%20cita%20para%20Retenedores%20se%20acerca%20({{ $proxima_retenedores }}),%20agenda%20tu%20cita!%20%F0%9F%A6%B7%F0%9F%93%85%F0%9F%91%A9%E2%80%8D%E2%9A%95%EF%B8%8F%F0%9F%98%81" target="_blank">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                              </a>
                        </td>

                      </tr>
                 @endforeach

                 @foreach ($alert_limpieza as $item)
                 <tr>
                   <td>{{ $item->Client->name }} {{ $item->Client->apellido }}</td>
                   <td>{{ $item->Client->telefono }}</td>
                   <td>{{ $fecha_ultimo }}</td>
                   <td>{{ $proxima_limpieza }}
                   <td>
                        Limpieza
                   </td>
                   </td>

                   <td class="text-left">
                      <a href="https://api.whatsapp.com/send?phone=+52{{$item->Client->telefono}}&text=Hola%20{{ $item->Client->nombre }} {{ $item->Client->apellido }}%20tu%20pr%C3%B3xima%20cita%20para%20Limpieza%20se%20acerca%20({{ $proxima_retenedores }}),%20agenda%20tu%20cita!%20%F0%9F%A6%B7%F0%9F%93%85%F0%9F%91%A9%E2%80%8D%E2%9A%95%EF%B8%8F%F0%9F%98%81" target="_blank">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp
                      </a>
                   </td>

                 </tr>
            @endforeach

              </table>
            </div>

          </div>
        </div>
      </div>
</div>

@endsection
