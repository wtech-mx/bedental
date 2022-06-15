@section('title', __('Especialists'))
@extends('layouts.app')
@section('content')

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Listado Doctor </h4>
						</div>
						@if (session()->has('message'))
						<div class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#create">
						<i class="fa fa-plus"></i>  Agregar Doctor
						</div>
					</div>
				</div>

				<div class="card-body">
                <div class="table-responsive py-4" style="">
                    <table class="table table-flush" id="datatable-basic" >
						<thead class="thead">
							<tr>
								<td>#</td>
								<th>Nombre</th>
								<th>Cedula</th>
								<th>Especialidad</th>
								<th>Telefono</th>
								<th>Email</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($especialists as $row)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $row->nombre }} {{ $row->apellido }}</td>
								<td>{{ $row->cedula }}</td>
								<td>{{ $row->especialidad }}</td>
								<td>{{ $row->telefono }}</td>
								<td>{{ $row->email }}</td>

                                <td class="text-right">
                                  <div class="dropdown ">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a data-toggle="modal" class="dropdown-item" data-target="#updateModal{{$row->id}}">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>

                                    </div>
                                  </div>
                                </td>

                                @include('especialists.create')
                                @include('especialists.update')

							@endforeach
						</tbody>
					</table>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
