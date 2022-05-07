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
              <h3 class="mb-3">Users Management</h3>
              <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
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
                       <th>Email</th>
                       <th>Roles</th>
                       <th width="280px">Action</th>
                     </tr>
                  </thead>

                 @foreach ($data as $key => $user)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                          @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                               <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                          @endif
                        </td>

                        <td class="text-right">
                          <div class="dropdown ">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <a class="dropdown-item" href="{{ route('users.show',$user->id) }}">
                                  Show
                              </a>
                              <a class="dropdown-item" href="{{ route('users.edit',$user->id) }}">
                                Edit
                              </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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

{!! $data->render() !!}

@endsection
