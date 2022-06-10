<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Agregar Paciente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form class="row">

                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                <a class="nav-link active" id="cliente-tab" data-toggle="tab" href="#cliente" role="tab" aria-controls="cliente" aria-selected="true">Paciente</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" id="facturacion-tab" data-toggle="tab" href="#facturacion" role="tab" aria-controls="facturacion" aria-selected="false">Facturación</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" id="seguro-tab" data-toggle="tab" href="#seguro" role="tab" aria-controls="seguro" aria-selected="false">Seguro</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="fiscals-tab" data-toggle="tab" href="#fiscals" role="tab" aria-controls="fiscals" aria-selected="false">Pdf Fiscal</a>
                                </li>
                            </ul>
                        </div>
                          {{-- tab datos de cliente --}}
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">
                                <div class="row mt-3">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="nombre">Nombre</label>
                                        <input wire:model.defer="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="apellido">Apellido</label>
                                        <input wire:model.defer="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido">@error('apellido') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="email">Email</label>
                                        <input wire:model.defer="email" type="email" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="telefono">Telefono</label>
                                        <input wire:model.defer="telefono" type="number" class="form-control" id="telefono" placeholder="Telefono">@error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="sanguineo">Sanguineo</label>
                                        <input wire:model.defer="sanguineo" type="text" class="form-control" id="sanguineo" placeholder="sanguineo">@error('sanguineo') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="ocupacion">Ocupación</label>
                                        <input wire:model.defer="ocupacion" type="text" class="form-control" id="ocupacion" placeholder="ocupación">@error('ocupacion') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="edad">Edad</label>
                                        <input wire:model.defer="edad" type="number" class="form-control" id="edad" placeholder="edad">@error('edad') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        <input wire:model.defer="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" placeholder="Fecha Nacimiento">@error('fecha_nacimiento') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="motivo_consulta">Motivo de consulta</label>
                                        <textarea wire:model.defer="motivo_consulta" id="fecha_nacimiento" class="form-control"></textarea>
                                    </div>

                                </div>

                            </div>
                            {{-- tab datos de cliente --}}

                            {{-- tab datos de facturacion --}}
                            <div class="tab-pane fade" id="facturacion" role="tabpanel" aria-labelledby="facturacion-tab">
                                <div class="row mt-3">

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="rfc">RFC</label>
                                        <input wire:model.defer="rfc" type="text" class="form-control" id="rfc" placeholder="RFC">@error('rfc') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fiscal">Situación fiscal</label>
                                        <select wire:model.defer="fiscal" class="form-control" id="fiscal">
                                            <option >Seleciona Razon social</option>
                                            <option value="Fisica">Fisica</option>
                                            <option value="Moral">Moral</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="razon_social">Razon social</label>
                                        <input wire:model.defer="razon_social" type="text" class="form-control" id="razon_social" placeholder="razon_social">@error('razon_social') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="domicilio_fiscal">Direccion fiscal</label>
                                        <input wire:model.defer="domicilio_fiscal" type="text" class="form-control" id="domicilio_fiscal" placeholder="Domicilio fiscal">@error('domicilio_fiscal') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="regimen_fiscal">Regimen fiscal</label>
                                        <select wire:model.defer="regimen_fiscal" class="form-control" id="regimen_fiscal">
                                            <option >Seleciona regimen fiscal</option>
                                            <option value="Simplificado de confianza">Simplificado de confianza</option>
                                            <option value="Sueldos y salarios e ingresos asimilados a saladrios">Sueldos y salarios e ingresos asimilados a saladrios</option>
                                            <option value="Actividades empresariales y profesionales">Actividades empresariales y profesionales</option>
                                            <option value="Incorporacion fiscal">Incorporacion fiscal</option>
                                            <option value="Enajenacion de bienes">Enajenacion de bienes</option>
                                            <option value="Actividades empresariales con ingresos a traves de plataformas tecnologicas">Actividades empresariales con ingresos a traves de plataformas tecnologicas</option>
                                            <option value="Arrendamiento">Arrendamiento</option>
                                            <option value="Intereses">Intereses</option>
                                            <option value="Obtencion de premios">Obtencion de premios</option>
                                            <option value="Dividendos">Dividendos</option>
                                            <option value="Demas ingresos">Demas ingresos</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="cfdi">CFDI</label>
                                        <select wire:model.defer="regimen_fiscal" class="form-control" id="regimen_fiscal">
                                            <option >Seleciona el uso del CFDI (Fisica y Moral) (Fisica y Moral)</option>
                                            <option value="G01">G01 Adquisicion de mercancias (Fisica y Moral)</option>
                                            <option value="G02">G02 Devoluciones descuentos o bonificaciones (Fisica y Moral)</option>
                                            <option value="G03">G03 Gastoos en general (Fisica y Moral)</option>
                                            <option value="101">101 construcciones (Fisica y Moral)</option>
                                            <option value="102">102 Mobiliario quipo de oficinae e inversiones (Fisica y Moral)</option>
                                            <option value="103">103 Equipo de transporte (Fisica y Moral)</option>
                                            <option value="104">104 Euipo de cumputo y accesorios (Fisica y Moral)</option>
                                            <option value="105">105 Dados troqueles moldes matrices y herramental (Fisica y Moral)</option>
                                            <option value="106">106 Comunicaciones telefonicas (Fisica y Moral)</option>
                                            <option value="107">107 Comunicaciones satelitles (Fisica y Moral)</option>
                                            <option value="108">108 Otro maquinaria y equipo (Fisica y Moral)</option>
                                            <option value="D01">D01 Honorarios medicos, dentales y gastos hospitalarios (Moral)</option>
                                            <option value="D02">D02 Gastos medicos por incapacidad o discapacidad (Moral)</option>
                                            <option value="D03">D03 Gastos funerlaes (Moral)</option>
                                            <option value="D04">D04 Donativos (Moral)</option>
                                            <option value="D05">D05 Intereses por creditos hipotecarios (Moral)</option>
                                            <option value="D06">D06 Aportaciones voluntaerias al SAR (Moral)</option>
                                            <option value="D07">D07 Primas por seguros de gastos mdicos  (Moral)</option>
                                            <option value="D08">D08 Gastos de transpotacion escolar obligatoria (Moral)</option>
                                            <option value="D09">D09 Depositos en cuentas para ahorro , primas con base (Moral)</option>
                                            <option value="D10">D10 Pagos por servicios educativos colegiaturas (Moral)</option>
                                            <option value="P01">P01 Por definir (Moral)</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="correo_fiscal">Correo fiscal</label>
                                        <input wire:model.defer="correo_fiscal" type="text" class="form-control" id="correo_fiscal" placeholder="correo_fiscal">@error('correo_fiscal') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">

                                        <p class="text-center">
                                            <a href="#collapsExample" class="btn btn-primary" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapsExample">
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
                            <div class="tab-pane fade" id="seguro" role="tabpanel" aria-labelledby="seguro-tab">
                                <div class="row mt-3">

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="correo_fiscal">Seguro</label>
                                        <input wire:model.defer="seguro" type="text" class="form-control" id="seguro" placeholder="seguro">@error('seguro') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="poliza">Poliza</label>
                                        <input wire:model.defer="poliza" type="text" class="form-control" id="poliza" placeholder="poliza">@error('poliza') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="tipo_plan">Tipo de Plan</label>
                                        <input wire:model.defer="tipo_plan" type="text" class="form-control" id="tipo_plan" placeholder="tipo_plan">@error('tipo_plan') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="certificado">certificado</label>
                                        <input wire:model.defer="certificado" type="text" class="form-control" id="certificado" placeholder="certificado">@error('certificado') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="empresa">Empresa</label>
                                        <input wire:model.defer="empresa" type="text" class="form-control" id="empresa" placeholder="empresa">@error('empresa') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                </div>
                            </div>
                            {{-- tab datos de SEGURO --}}

                            {{-- tab datos de fiscal --}}
                            <div class="tab-pane fade" id="fiscals" role="tabpanel" aria-labelledby="fiscals-tab">
                                <div class="row mt-3">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-12 ">
                                        <label for="fiscal">PDF Situación Fiscal</label>
                                        <input wire:model.defer="pdf_fiscal" type="file" class="form-control" id="pdf_fiscal" >@error('pdf_fiscal') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- tab datos de fiscal --}}

                          </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Crear</button>
            </div>
        </div>
    </div>
</div>
