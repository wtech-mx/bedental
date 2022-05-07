@extends('layouts.app')

@section('content')

@if (Session::has('success'))
<script>
    Swal.fire({
        title: 'Exito!!',
        html: 'Se ha agragado el <b>permiso</b>, ' +
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

<div class="container-fluid mt-3">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-3">Create New Role</h3>
              <div class="d-flex justify-content-between">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Launch demo modal
                  </button>
              </div>

                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                      </div>
                    @endif
            </div>

            <div class="card-body mb-5">

                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Name:</label>
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Permission:</label>
                            <br/>
                            @foreach($permission as $value)
                                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                    {{ $value->name }}
                                </label>
                                <div class="dropdown ">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                      <a class="dropdown-item" href="{{ route('permisos.update',$value->id) }}">
                                        Edit
                                      </a>

                                    <form action="{{ route('permisos.destroy',$value->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" class="dropdown-item">Delete</button>
                                    </form>

                                    </div>
                                  </div>
                            <br/>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
                {!! Form::close() !!}

            </div>

          </div>
        </div>
      </div>
</div>

@include('roles.modal')

@endsection
