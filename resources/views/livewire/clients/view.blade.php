@section('title', __('Clients'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Pacientes listado </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Clients">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar Paciente
						</div>
					</div>
				</div>

				<div class="card-body">
						@include('livewire.clients.create')
						@include('livewire.clients.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr>
								<td>#</td>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Edad</th>
								<th>Sanguineo</th>
								<th>Ocupacion</th>
								<th>Telefono</th>
								<th>Fecha Nacimiento</th>
								<th>Email</th>

								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($clients as $row)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $row->nombre }}</td>
								<td>{{ $row->apellido }}</td>
								<td>{{ $row->edad }}</td>
								<td>{{ $row->sanguineo }}</td>
								<td>{{ $row->ocupacion }}</td>
								<td>{{ $row->telefono }}</td>
								<td>{{ $row->fecha_nacimiento }}</td>
								<td>{{ $row->email }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('antecedentes.index') }}" class="dropdown-item" wire:click="edit({{$row->id}})">
                                            <i class="fa fa-solid fa-user"></i> Antecedentes
                                        </a>
                                        <a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <a class="dropdown-item" onclick="confirm('Confirm Delete Client id {{$row->id}}? \nDeleted Clients cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>
					{{ $clients->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
