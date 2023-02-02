@extends('layouts.app')
@section('title', __('Clients'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                                    @if (session()->has('message'))
                                    <div class="btn btn-sm btn-success"
                                        style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
                                    @endif
                                    <div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
                                        <i class="fa fa-plus"></i> Agregar Paciente
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive py-4">
                                    <table class="table table-flush" id="datatable-basic">
                                        <thead class="thead">
                                            <tr>
                                                <td>#</td>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Edad</th>
                                                <th>Sanguineo</th>
                                                <th>Motivo de consulta</th>
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
                                                <td>{{ $row->motivo_consulta }}</td>
                                                <td>{{ $row->telefono }} <br> {{ $row->telefono2 }}</td>
                                                <td>{{ $row->fecha_nacimiento }}</td>
                                                <td>{{ $row->email }}</td>

                                                <td class="text-left">
                                                    <div class="dropdown ">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#"
                                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                            {{-- <a href="{{ route('antecedentes.index') }}"
                                                                class="dropdown-item" wire:click="edit({{$row->id}})"><i
                                                                    class="fa fa-solid fa-user"></i> Antecedentes
                                                            </a> --}}

                                                            <a type="button" class="dropdown-item" data-toggle="modal"
                                                                data-target="#facturasModal{{$row->id}}">
                                                                <i class="fa fa-solid fa-user"></i> Facturas
                                                            </a>

                                                            <a href="{{ route('client.edit', $row->id) }}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </a>
                                                            {{-- <a class="dropdown-item"
                                                                onclick="confirm('Confirm Delete Client id {{$row->id}}? \nDeleted Clients cannot be recovered!')||event.stopImmediatePropagation()"
                                                                wire:click="destroy({{$row->id}})">
                                                                <i class="fa fa-trash"></i> Delete
                                                            </a> --}}

                                                        </div>
                                                    </div>
                                                </td>


                                                @include('clients.create')
                                                @include('clients.modal_facturas')
                                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
