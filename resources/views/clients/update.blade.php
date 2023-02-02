@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="modal-title" id="createDataModalLabel">Actualizar Paciente</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('client.update', $clients->id) }}" enctype="multipart/form-data" role="form">
                                    @csrf
                                    <input type="hidden" name="_method" value="PATCH">
                                    <div class="modal-body">


                                        <div class="col-12">
                                            <div class="d-flex justify-content-center">
                                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="cliente{{$clients->id}}-tab" data-toggle="tab" href="#cliente{{$clients->id}}"
                                                            role="tab" aria-controls="cliente{{$clients->id}}" aria-selected="true">Paciente</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="facturacion{{$clients->id}}-tab" data-toggle="tab" href="#facturacion{{$clients->id}}"
                                                            role="tab" aria-controls="facturacion{{$clients->id}}" aria-selected="false">Facturación</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="seguro{{$clients->id}}-tab" data-toggle="tab" href="#seguro{{$clients->id}}" role="tab"
                                                            aria-controls="seguro{{$clients->id}}" aria-selected="false">Seguro</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" id="fiscals{{$clients->id}}-tab" data-toggle="tab" href="#fiscals{{$clients->id}}" role="tab"
                                                            aria-controls="fiscals{{$clients->id}}" aria-selected="false">Pdf Fiscal</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            {{-- tab datos de cliente2 --}}
                                            <div class="tab-content" id="myTabContent">
                                                <div class="tab-pane fade show active" id="cliente{{$clients->id}}" role="tabpanel"
                                                    aria-labelledby="cliente{{$clients->id}}-tab">
                                                    <div class="row mt-3">
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                            <label for="nombre">Nombre</label>
                                                            <input name="nombre" type="text" class="form-control" id="nombre"
                                                                placeholder="Nombre" value="{{$clients->nombre}}">@error('nombre') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                            <label for="apellido">Apellido</label>
                                                            <input name="apellido" type="text" class="form-control" id="apellido"
                                                                placeholder="Apellido" value="{{$clients->apellido}}">@error('apellido') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                            <label for="email">Email</label>
                                                            <input name="email" type="email" class="form-control" id="email"
                                                                placeholder="Email" value="{{$clients->email}}">@error('email') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror

                                                            <label for="telefono">Email 2</label>
                                                            <input name="email2" type="email" class="form-control" id="email2"
                                                                value="{{$clients->email2}}">@error('email2') <span class="error text-danger">{{
                                                                $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                            <label for="telefono">Telefono</label>
                                                            <input name="telefono" type="number" class="form-control" id="telefono"
                                                                placeholder="Telefono" value="{{$clients->telefono}}">@error('telefono') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror

                                                            <label for="telefono">Telefono2</label>
                                                            <input name="telefono2" type="number" class="form-control" id="telefono2"
                                                                value="{{$clients->telefono2}}">@error('telefono2') <span class="error text-danger">{{
                                                                $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                            <label for="sanguineo">Sanguineo</label>
                                                            <input name="sanguineo" type="text" class="form-control" id="sanguineo"
                                                                placeholder="sanguineo" value="{{$clients->sanguineo}}">@error('sanguineo')
                                                            <span class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                            <label for="ocupacion">Ocupación</label>
                                                            <input name="ocupacion" type="text" class="form-control" id="ocupacion"
                                                                placeholder="ocupación" value="{{$clients->ocupacion}}">@error('ocupacion')
                                                            <span class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                            <label for="edad">Edad</label>
                                                            <input name="edad" type="number" class="form-control" id="edad"
                                                                placeholder="edad" value="{{$clients->edad}}">@error('edad') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                                            <input name="fecha_nacimiento" type="date" class="form-control"
                                                                id="fecha_nacimiento" placeholder="Fecha Nacimiento"
                                                                value="{{$clients->fecha_nacimiento}}">@error('fecha_nacimiento') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                                            <label for="motivo_consulta">Motivo de consulta</label>
                                                            <textarea name="motivo_consulta" id="motivo_consulta"
                                                                class="form-control">{{$clients->motivo_consulta}}</textarea>
                                                        </div>

                                                    </div>

                                                </div>
                                                {{-- tab datos de cliente --}}

                                                {{-- tab datos de facturacion2 --}}
                                                <div class="tab-pane fade" id="facturacion{{$clients->id}}" role="tabpanel"
                                                    aria-labelledby="facturacion{{$clients->id}}-tab">
                                                    <div class="row mt-3">

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                            <label for="rfc">RFC</label>
                                                            <input name="rfc" type="text" class="form-control" id="rfc" placeholder="RFC"
                                                                value="{{$clients->rfc}}">@error('rfc') <span class="error text-danger">{{
                                                                $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                            <label for="fiscal">Situación fiscal</label>
                                                            <select name="fiscal" class="form-control" id="fiscal">
                                                                <option value="{{$clients->fiscal}}">{{$clients->fiscal}}</option>
                                                                <option value="Fisica">Fisica</option>
                                                                <option value="Moral">Moral</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                                            <label for="razon_social">Razon social</label>
                                                            <input name="razon_social" type="text" class="form-control" id="razon_social"
                                                                placeholder="razon_social"
                                                                value="{{$clients->razon_social}}">@error('razon_social') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                                            <label for="domicilio_fiscal">Direccion fiscal</label>
                                                            <input name="domicilio_fiscal" type="text" class="form-control"
                                                                id="domicilio_fiscal" placeholder="Domicilio fiscal"
                                                                value="{{$clients->domicilio_fiscal}}">@error('domicilio_fiscal') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                                            <label for="regimen_fiscal">Regimen fiscal</label>
                                                            <select name="regimen_fiscal" class="form-control" id="regimen_fiscal">
                                                                <option value="{{$clients->regimen_fiscal}}">{{$clients->regimen_fiscal}}</option>
                                                                <option value="Simplificado de confianza">Simplificado de confianza</option>
                                                                <option value="Sueldos y salarios e ingresos asimilados a saladrios">Sueldos
                                                                    y salarios e ingresos asimilados a saladrios</option>
                                                                <option value="Actividades empresariales y profesionales">Actividades
                                                                    empresariales y profesionales</option>
                                                                <option value="Incorporacion fiscal">Incorporacion fiscal</option>
                                                                <option value="Enajenacion de bienes">Enajenacion de bienes</option>
                                                                <option
                                                                    value="Actividades empresariales con ingresos a traves de plataformas tecnologicas">
                                                                    Actividades empresariales con ingresos a traves de plataformas
                                                                    tecnologicas</option>
                                                                <option value="Arrendamiento">Arrendamiento</option>
                                                                <option value="Intereses">Intereses</option>
                                                                <option value="Obtencion de premios">Obtencion de premios</option>
                                                                <option value="Dividendos">Dividendos</option>
                                                                <option value="Demas ingresos">Demas ingresos</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                                            <label for="cfdi">CFDI</label>
                                                            <select name="regimen_fiscal" class="form-control" id="regimen_fiscal">
                                                                <option value="{{$clients->regimen_fiscal}}">{{$clients->regimen_fiscal}}</option>
                                                                <option value="C01">C01 Adquisicion de mercancias (Fisica y Moral)</option>
                                                                <option value="C02">C02 Devoluciones descuentos o bonificaciones (Fisica y
                                                                    Moral)</option>
                                                                <option value="C03">C03 Gastoos en general (Fisica y Moral)</option>
                                                                <option value="101">101 construcciones (Fisica y Moral)</option>
                                                                <option value="102">102 Mobiliario quipo de oficinae e inversiones (Fisica y
                                                                    Moral)</option>
                                                                <option value="103">103 Equipo de transporte (Fisica y Moral)</option>
                                                                <option value="104">104 Euipo de cumputo y accesorios (Fisica y Moral)
                                                                </option>
                                                                <option value="105">105 Dados troqueles moldes matrices y herramental
                                                                    (Fisica y Moral)</option>
                                                                <option value="106">106 Comunicaciones telefonicas (Fisica y Moral)</option>
                                                                <option value="107">107 Comunicaciones satelitles (Fisica y Moral)</option>
                                                                <option value="108">108 Otro maquinaria y equipo (Fisica y Moral)</option>
                                                                <option value="D01">D01 Honorarios medicos, dentales y gastos hospitalarios
                                                                    (Moral)</option>
                                                                <option value="D02">D02 Gastos medicos por incapacidad o discapacidad
                                                                    (Moral)</option>
                                                                <option value="D03">D03 Gastos funerlaes (Moral)</option>
                                                                <option value="D04">D04 Donativos (Moral)</option>
                                                                <option value="D05">D05 Intereses por creditos hipotecarios (Moral)</option>
                                                                <option value="D06">D06 Aportaciones voluntaerias al SAR (Moral)</option>
                                                                <option value="D07">D07 Primas por seguros de gastos mdicos (Moral)</option>
                                                                <option value="D08">D08 Gastos de transpotacion escolar obligatoria (Moral)
                                                                </option>
                                                                <option value="D09">D09 Depositos en cuentas para ahorro , primas con base
                                                                    (Moral)</option>
                                                                <option value="D10">D10 Pagos por servicios educativos colegiaturas (Moral)
                                                                </option>
                                                                <option value="P01">P01 Por definir (Moral)</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                                            <label for="correo_fiscal">Correo fiscal</label>
                                                            <input name="correo_fiscal" type="text" class="form-control" id="correo_fiscal"
                                                                placeholder="correo_fiscal"
                                                                value="{{$clients->correo_fiscal}}">@error('correo_fiscal') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-12">

                                                            <p class="text-center">
                                                                <a href="#collapsExample" class="btn btn-primary" data-toggle="collapse"
                                                                    role="button" aria-expanded="false" aria-controls="collapsExample">
                                                                    Ver uso de CFDI
                                                                </a>
                                                            </p>

                                                            <div class="collapse" id="collapsExample">
                                                                <div class="card card-body">

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                {{-- tab datos de facturacion --}}

                                                {{-- tab datos de SEGURO --}}
                                                <div class="tab-pane fade" id="seguro{{$clients->id}}" role="tabpanel" aria-labelledby="seguro{{$clients->id}}-tab">
                                                    <div class="row mt-3">

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                            <label for="correo_fiscal">Seguro</label>
                                                            <input name="seguro" type="text" class="form-control" id="seguro"
                                                                placeholder="seguro" value="{{$clients->seguro}}">@error('seguro') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                            <label for="poliza">Poliza</label>
                                                            <input name="poliza" type="text" class="form-control" id="poliza"
                                                                placeholder="poliza" value="{{$clients->poliza}}">@error('poliza') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                            <label for="tipo_plan">Tipo de Plan</label>
                                                            <input name="tipo_plan" type="text" class="form-control" id="tipo_plan"
                                                                placeholder="tipo_plan" value="{{$clients->tipo_plan}}">@error('tipo_plan')
                                                            <span class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                            <label for="certificado">certificado</label>
                                                            <input name="certificado" type="text" class="form-control" id="certificado"
                                                                placeholder="certificado"
                                                                value="{{$clients->certificado}}">@error('certificado') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                            <label for="empresa">Empresa</label>
                                                            <input name="empresa" type="text" class="form-control" id="empresa"
                                                                placeholder="empresa" value="{{$clients->empresa}}">@error('empresa') <span
                                                                class="error text-danger">{{ $message }}</span> @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                                {{-- tab datos de SEGURO --}}

                                                {{-- tab datos de fiscal --}}
                                                <div class="tab-pane fade" id="fiscals{{$clients->id}}" role="tabpanel" aria-labelledby="fiscals{{$clients->id}}-tab">
                                                    <div class="row mt-3">
                                                        <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                            <label for="fiscal">PDF Situación Fiscal</label>
                                                            <input name="pdf_fiscal" type="file" class="form-control" id="pdf_fiscal"
                                                                placeholder="pdf_fiscal" value="{{$clients->pdf_fiscal}}">@error('pdf_fiscal')
                                                            <span class="error text-danger">{{ $message }}</span> @enderror
                                                            <embed  width="400" height="400"
                                                                src="{{asset('pdf_fiscal/' . $clients->pdf_fiscal)}}" frameborder="0"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- tab datos de fiscal --}}

                                            </div>

                                        </div>


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
