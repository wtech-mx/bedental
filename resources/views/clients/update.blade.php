<!-- Modal -->
<div class="modal fade" id="updateModal{{$row->id}}" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Actualizar Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <form method="POST" action="{{ route('client.update', $row->id) }}" enctype="multipart/form-data" role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">


                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="cliente{{$row->id}}-tab" data-toggle="tab" href="#cliente{{$row->id}}"
                                        role="tab" aria-controls="cliente{{$row->id}}" aria-selected="true">Paciente</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="facturacion{{$row->id}}-tab" data-toggle="tab" href="#facturacion{{$row->id}}"
                                        role="tab" aria-controls="facturacion{{$row->id}}" aria-selected="false">Facturación</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="seguro{{$row->id}}-tab" data-toggle="tab" href="#seguro{{$row->id}}" role="tab"
                                        aria-controls="seguro{{$row->id}}" aria-selected="false">Seguro</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="fiscals{{$row->id}}-tab" data-toggle="tab" href="#fiscals{{$row->id}}" role="tab"
                                        aria-controls="fiscals{{$row->id}}" aria-selected="false">Pdf Fiscal</a>
                                </li>
                            </ul>
                        </div>
                        {{-- tab datos de cliente2 --}}
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="cliente{{$row->id}}" role="tabpanel"
                                aria-labelledby="cliente{{$row->id}}-tab">
                                <div class="row mt-3">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="nombre">Nombre</label>
                                        <input name="nombre" type="text" class="form-control" id="nombre"
                                            placeholder="Nombre" value="{{$row->nombre}}">@error('nombre') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="apellido">Apellido</label>
                                        <input name="apellido" type="text" class="form-control" id="apellido"
                                            placeholder="Apellido" value="{{$row->apellido}}">@error('apellido') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="email"
                                            placeholder="Email" value="{{$row->email}}">@error('email') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="telefono">Telefono</label>
                                        <input name="telefono" type="number" class="form-control" id="telefono"
                                            placeholder="Telefono" value="{{$row->telefono}}">@error('telefono') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="sanguineo">Sanguineo</label>
                                        <input name="sanguineo" type="text" class="form-control" id="sanguineo"
                                            placeholder="sanguineo" value="{{$row->sanguineo}}">@error('sanguineo')
                                        <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="ocupacion">Ocupación</label>
                                        <input name="ocupacion" type="text" class="form-control" id="ocupacion"
                                            placeholder="ocupación" value="{{$row->ocupacion}}">@error('ocupacion')
                                        <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="edad">Edad</label>
                                        <input name="edad" type="number" class="form-control" id="edad"
                                            placeholder="edad" value="{{$row->edad}}">@error('edad') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        <input name="fecha_nacimiento" type="date" class="form-control"
                                            id="fecha_nacimiento" placeholder="Fecha Nacimiento"
                                            value="{{$row->fecha_nacimiento}}">@error('fecha_nacimiento') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="motivo_consulta">Motivo de consulta</label>
                                        <textarea name="motivo_consulta" id="motivo_consulta"
                                            class="form-control">{{$row->motivo_consulta}}</textarea>
                                    </div>

                                </div>

                            </div>
                            {{-- tab datos de cliente --}}

                            {{-- tab datos de facturacion2 --}}
                            <div class="tab-pane fade" id="facturacion{{$row->id}}" role="tabpanel"
                                aria-labelledby="facturacion{{$row->id}}-tab">
                                <div class="row mt-3">

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="rfc">RFC</label>
                                        <input name="rfc" type="text" class="form-control" id="rfc" placeholder="RFC"
                                            value="{{$row->rfc}}">@error('rfc') <span class="error text-danger">{{
                                            $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fiscal">Situación fiscal</label>
                                        <select name="fiscal" class="form-control" id="fiscal">
                                            <option value="{{$row->fiscal}}">{{$row->fiscal}}</option>
                                            <option value="Fisica">Fisica</option>
                                            <option value="Moral">Moral</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="razon_social">Razon social</label>
                                        <input name="razon_social" type="text" class="form-control" id="razon_social"
                                            placeholder="razon_social"
                                            value="{{$row->razon_social}}">@error('razon_social') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="domicilio_fiscal">Direccion fiscal</label>
                                        <input name="domicilio_fiscal" type="text" class="form-control"
                                            id="domicilio_fiscal" placeholder="Domicilio fiscal"
                                            value="{{$row->domicilio_fiscal}}">@error('domicilio_fiscal') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="regimen_fiscal">Regimen fiscal</label>
                                        <select name="regimen_fiscal" class="form-control" id="regimen_fiscal">
                                            <option value="{{$row->regimen_fiscal}}">{{$row->regimen_fiscal}}</option>
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
                                            <option value="{{$row->regimen_fiscal}}">{{$row->regimen_fiscal}}</option>
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
                                            value="{{$row->correo_fiscal}}">@error('correo_fiscal') <span
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
                            <div class="tab-pane fade" id="seguro{{$row->id}}" role="tabpanel" aria-labelledby="seguro{{$row->id}}-tab">
                                <div class="row mt-3">

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="correo_fiscal">Seguro</label>
                                        <input name="seguro" type="text" class="form-control" id="seguro"
                                            placeholder="seguro" value="{{$row->seguro}}">@error('seguro') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="poliza">Poliza</label>
                                        <input name="poliza" type="text" class="form-control" id="poliza"
                                            placeholder="poliza" value="{{$row->poliza}}">@error('poliza') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="tipo_plan">Tipo de Plan</label>
                                        <input name="tipo_plan" type="text" class="form-control" id="tipo_plan"
                                            placeholder="tipo_plan" value="{{$row->tipo_plan}}">@error('tipo_plan')
                                        <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="certificado">certificado</label>
                                        <input name="certificado" type="text" class="form-control" id="certificado"
                                            placeholder="certificado"
                                            value="{{$row->certificado}}">@error('certificado') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="empresa">Empresa</label>
                                        <input name="empresa" type="text" class="form-control" id="empresa"
                                            placeholder="empresa" value="{{$row->empresa}}">@error('empresa') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                </div>
                            </div>
                            {{-- tab datos de SEGURO --}}

                            {{-- tab datos de fiscal --}}
                            <div class="tab-pane fade" id="fiscals{{$row->id}}" role="tabpanel" aria-labelledby="fiscals{{$row->id}}-tab">
                                <div class="row mt-3">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="fiscal">PDF Situación Fiscal</label>
                                        <input name="pdf_fiscal" type="file" class="form-control" id="pdf_fiscal"
                                            placeholder="pdf_fiscal" value="{{$row->pdf_fiscal}}">@error('pdf_fiscal')
                                        <span class="error text-danger">{{ $message }}</span> @enderror

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
