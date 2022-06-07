@section('title', __('Antecedentes'))
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
@endsection
@section('js_dropzone')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
@endsection

<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Listado Historial Clinico </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						    <i class="fa fa-plus"></i>  Agregar Historial Clinico
						</div>

					</div>
				</div>

				<div class="card-body">
				    <div class="table-responsive py-4" style="">
                        <table class="table table-flush" id="datatable-basic" >
                            <thead class="thead">
                                <tr>
                                    <td>#</td>
                                    <th>Paciente</th>
                                    <th>Sanguineo</th>
                                    <th>Telefono</th>
                                    <td>Acciones</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($antecedentes as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->client->nombre }} {{ $row->client->apellido }}</td>
                                    <td>{{ $row->client->sanguineo }}</td>
                                    <td>{{ $row->client->telefono }}</td>
                                    <td width="90">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Acciones
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a data-toggle="modal" data-target="#updateModalAntecedentes" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>
                                                <a class="dropdown-item" onclick="confirm('Confirm Delete Antecedente id {{$row->id}}? \nDeleted Antecedentes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>
                                                <a type="button" class="dropdown-item" data-toggle="modal" data-target="#Historial_radiografíco{{$row->id}}"><i class="fa fa-object-group"></i>Historial radiografíco</a>
                                            </div>
                                        </div>
                                    </td>
                                    @include('livewire.antecedentes.create')
                                    @include('livewire.antecedentes.update')
                                    @include('livewire.antecedentes.modal_radiografico')
                                @endforeach
                            </tbody>
                        </table>
                    </div>
					{{ $antecedentes->links() }}
				</div>

			</div>
		</div>
	</div>
</div>

@section('funcion_dropzone')
    <script src="">
    Dropzone.options.imageUpload ={
        maxFilesize:1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
    };
    </script>
@endsection
