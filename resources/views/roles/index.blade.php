@extends('layouts.app')

@section('content')

{{-- @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif --}}

<div class="container-fluid mt-3">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-3">Role Management</h3>

                @can('role-create')
                     <a class="btn btn-success" href="{{ route('roles.create') }}">Create New Role</a>
                @endcan
            </div>
            @if (Session::has('success'))
                <script>
                    Swal.fire({
                        title: 'Exito!!',
                        html: 'Se ha agragado el <b>Usuario</b>, ' +
                            'Exitosamente',
                        // text: 'Se ha agragado la "MARCA" Exitosamente',
                        imageUrl: '{{ asset('img/icon/color/coche (6).png') }}',
                        background: '#fff',
                        imageWidth: 150,
                        imageHeight: 150,
                        imageAlt: 'USUARIO IMG',
                    })

                </script>
            @endif
            @if (Session::has('edit'))
                <script>
                    Swal.fire({
                        title: 'Exito!!',
                        html: 'Se ha editado el <b>Usuario</b>, ' +
                            'Exitosamente',
                        // text: 'Se ha agragado la "MARCA" Exitosamente',
                        imageUrl: '{{ asset('img/icon/color/coche (6).png') }}',
                        background: '#fff',
                        imageWidth: 150,
                        imageHeight: 150,
                        imageAlt: 'USUARIO IMG',
                    })

                </script>
            @endif
            @if (Session::has('delete'))
                <script>
                    Swal.fire({
                        title: 'Exito!!',
                        html: 'Se ha eliminado el <b>Usuario</b>, ' +
                            'Exitosamente',
                        // text: 'Se ha agragado la "MARCA" Exitosamente',
                        imageUrl: '{{ asset('img/icon/color/coche (6).png') }}',
                        background: '#fff',
                        imageWidth: 150,
                        imageHeight: 150,
                        imageAlt: 'USUARIO IMG',
                    })

                </script>
            @endif

            <div class="table-responsive py-4" style="">
              <table class="table table-flush" id="datatable-basic" >
                  <thead class="thead-light">
                      <tr>
                       <th>No</th>
                       <th>Name</th>
                       <th width="280px">Action</th>
                     </tr>
                  </thead>

                 @foreach ($roles as $key => $role)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>

                        <td class="text-right">
                          <div class="dropdown ">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="{{ route('roles.show',$role->id) }}">
                                  Show
                              </a>
                              <a class="dropdown-item" href="{{ route('roles.edit',$role->id) }}">
                                Edit
                              </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'dropdown-item']) !!}
                            {!! Form::close() !!}

                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'dropdown-item']) !!}
                            {!! Form::close() !!}
                            </div>
                          </div>
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
