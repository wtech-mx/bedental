@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                                    <div class="btn btn-sm btn-success"
                                        style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
                                    @endif
                                    {{-- <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                                        <i class="fa fa-plus"></i> Agregar Historial Clinico
                                    </div> --}}

                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive py-4" style="">
                                    <table class="table table-flush" id="datatable-basic">
                                        <thead class="thead">
                                            <tr>
                                                <th>Paciente</th>
                                                <th>Sanguineo</th>
                                                <th>Telefono</th>
                                                <td>Acciones</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($antecedentes as $row)
                                            <tr>
                                                <td>{{ $row->client->nombre }} {{ $row->client->apellido }}</td>
                                                <td>{{ $row->client->sanguineo }}</td>
                                                <td>{{ $row->client->telefono }}</td>

                                                <td class="text-right">
                                                    <div class="dropdown ">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                            <a data-toggle="modal"
                                                                data-target="#updateModalAntecedentes{{$row->id}}"
                                                                class="dropdown-item"><i class="fa fa-edit"></i> Edit </a>

                                                            <a class="dropdown-item"
                                                                onclick="confirm('Confirm Delete Antecedente id {{$row->id}}? \nDeleted Antecedentes cannot be recovered!')||event.stopImmediatePropagation()"
                                                                wire:click="destroy({{$row->id}})"><i
                                                                    class="fa fa-trash"></i> Delete </a>

                                                            <a type="button" class="dropdown-item" data-toggle="modal"
                                                                data-target="#Historial_radiografíco{{$row->id}}"><i
                                                                    class="fa fa-object-group"></i>Historial
                                                                radiografíco</a>

                                                            <a type="button" class="dropdown-item" data-toggle="modal"
                                                                data-target="#exampleModal{{$row->id}}"><i
                                                                    class="fa fa-edit"></i> IMG Historial </a>
                                                        </div>
                                                    </div>
                                                </td>

                                                @include('antecedentes.update')
                                                @include('antecedentes.modal_radiografico')
                                                @include('antecedentes.modal_img_radiografico')
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <div class="float-left">
                                        <h4>Historial Radiografico</h4>
                                    </div>

                                    <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                                        <i class="fa fa-plus"></i> Agregar media
                                    </div>

                                </div>
                            </div>

                            <div class="card-body">

                                <form class="row">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="id_client">Paciente</label>
                                        <select wire:model="country" class="form-control mibuscador_paciente">
                                            <option>Seleciona el paciente</option>
                                            @foreach ($countries as $value)
                                            <option value="{{ $value->id }}"> {{ $value->Client->nombre }}</option>>
                                            @endforeach
                                        </select>
                                    </div>

                                    @if($cities->count() == 0)
                                    @foreach ($cities as $value)
                                    <div class="form-group col-xs-6 col-sm-6 col-md-6">
                                        <div class="card" style="width: auto;">
                                            <img class="card-img-top"
                                                src="{{asset('img/radiografias/'.$value->Radiografico->file_name)}}">
                                            <div class="card-body">
                                                <h5 class="card-title">
                                                    <P>{{$value->Radiografico->name}}</P>
                                                </h5>
                                                <p class="card-text">Fecha:
                                                <P>{{$value->Radiografico->date}}</P>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif


                                </form>

                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('funcion_dropzone')
<script src="">
    Dropzone.options.imageUpload ={
        maxFilesize:1,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
    };
</script>
@endsection
