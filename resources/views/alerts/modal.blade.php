<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="edit-event-label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-secondary" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span class="text-dark" aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body" style="padding: 0rem 1rem 0rem 1rem;">

                    <p class="text-center">
                      <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                          Agregar Nuevo paciente
                      </a>
                    </p>
                    <div class="row">
                      <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                          <div class="card card-body">

                            <form action="{{route('client.calendar_store')}}"  class="form-horizontal" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="d-flex justify-content-center">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="cliente-tab" data-toggle="tab" href="#cliente"
                                                role="tab" aria-controls="cliente" aria-selected="true">Paciente</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="facturacion-tab" data-toggle="tab" href="#facturacion"
                                                role="tab" aria-controls="facturacion" aria-selected="false">Facturación</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="seguro-tab" data-toggle="tab" href="#seguro" role="tab"
                                                aria-controls="seguro" aria-selected="false">Seguro</a>
                                        </li>

                                    </ul>
                                </div>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="cliente" role="tabpanel"
                                        aria-labelledby="cliente-tab">
                                        <div class="row mt-3">
                                            <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                                <label for="nombre">Nombre</label>
                                                <input name="nombre" type="text" class="form-control" id="nombre"
                                                    placeholder="Nombre">@error('nombre') <span class="error text-danger">{{
                                                    $message }}</span> @enderror
                                            </div>
                                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                <label for="apellido">Apellido</label>
                                                <input name="apellido" type="text" class="form-control" id="apellido"
                                                    placeholder="Apellido">@error('apellido') <span class="error text-danger">{{
                                                    $message }}</span> @enderror
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                <label for="email">Email</label>
                                                <input name="email" type="email" class="form-control" id="email"
                                                    placeholder="Email">@error('email') <span class="error text-danger">{{
                                                    $message }}</span> @enderror
                                                <p>
                                                  <a class="" data-toggle="collapse" href="#Correo" role="button" aria-expanded="false" aria-controls="Correo">
                                                    Agregar otro Correo
                                                  </a>
                                                </p>
                                                <div class="collapse" id="Correo">
                                                    <label for="telefono">Email 2</label>
                                                    <input name="email2" type="email" class="form-control" id="email2"
                                                        placeholder="Email">@error('email2') <span class="error text-danger">{{
                                                        $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                <label for="telefono">Telefono</label>
                                                <input name="telefono" type="number" class="form-control" id="telefono"
                                                    placeholder="Telefono">@error('telefono') <span class="error text-danger">{{
                                                    $message }}</span> @enderror
                                                <p>
                                                  <a class="" data-toggle="collapse" href="#Telefono2" role="button" aria-expanded="false" aria-controls="Telefono">
                                                    Agregar otro telefono
                                                  </a>
                                                </p>
                                                <div class="collapse" id="Telefono2">
                                                    <label for="telefono">Telefono2</label>
                                                    <input name="telefono2" type="number" class="form-control" id="telefono2"
                                                        placeholder="Telefono">@error('telefono2') <span class="error text-danger">{{
                                                        $message }}</span> @enderror
                                                </div>
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                <label for="edad">Edad</label>
                                                <input name="edad" type="number" class="form-control" id="edad"
                                                    placeholder="edad">@error('edad') <span class="error text-danger">{{
                                                    $message }}</span> @enderror
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                                <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                                <input name="fecha_nacimiento" type="date" class="form-control"
                                                    id="fecha_nacimiento"
                                                    placeholder="Fecha Nacimiento">@error('fecha_nacimiento') <span
                                                    class="error text-danger">{{ $message }}</span> @enderror
                                            </div>

                                            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                                <label for="motivo_consulta">Motivo de consulta</label>
                                                <textarea name="motivo_consulta" id="fecha_nacimiento"
                                                    class="form-control"></textarea>
                                            </div>

                                        </div>

                                    </div>

                            {{-- tab datos de cliente --}}

                            {{-- tab datos de facturacion --}}
                            <div class="tab-pane fade" id="facturacion" role="tabpanel"
                                aria-labelledby="facturacion-tab">
                                <div class="row mt-3">

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="rfc">RFC</label>
                                        <input name="rfc" type="text" class="form-control" id="rfc"
                                            placeholder="RFC">@error('rfc') <span class="error text-danger">{{ $message
                                            }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fiscal">Situación fiscal</label>
                                        <select name="fiscal" class="form-control" id="fiscal">
                                            <option>Seleciona Razon social</option>
                                            <option value="Fisica">Fisica</option>
                                            <option value="Moral">Moral</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="razon_social">Razon social</label>
                                        <input name="razon_social" type="text" class="form-control" id="razon_social"
                                            placeholder="razon_social">@error('razon_social') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="domicilio_fiscal">Direccion fiscal</label>
                                        <input name="domicilio_fiscal" type="text" class="form-control"
                                            id="domicilio_fiscal"
                                            placeholder="Domicilio fiscal">@error('domicilio_fiscal') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="regimen_fiscal">Regimen fiscal</label>
                                        <select name="regimen_fiscal" class="form-control" id="regimen_fiscal">
                                            <option>Seleciona regimen fiscal</option>
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
                                        <select name="cfdi" class="form-control" id="cfdi">
                                            <option>Seleciona el uso del CFDI (Fisica y Moral) (Fisica y Moral)</option>
                                            <option value="G01">G01 Adquisicion de mercancias (Fisica y Moral)</option>
                                            <option value="G02">G02 Devoluciones descuentos o bonificaciones (Fisica y
                                                Moral)</option>
                                            <option value="G03">G03 Gastoos en general (Fisica y Moral)</option>
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
                                            placeholder="correo_fiscal">@error('correo_fiscal') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                </div>
                            </div>
                            {{-- tab datos de facturacion --}}

                            {{-- tab datos de SEGURO --}}
                            <div class="tab-pane fade" id="seguro" role="tabpanel" aria-labelledby="seguro-tab">
                                <div class="row mt-3">

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="correo_fiscal">Seguro</label>
                                        <input name="seguro" type="text" class="form-control" id="seguro"
                                            placeholder="seguro">@error('seguro') <span class="error text-danger">{{
                                            $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="poliza">Poliza</label>
                                        <input name="poliza" type="text" class="form-control" id="poliza"
                                            placeholder="poliza">@error('poliza') <span class="error text-danger">{{
                                            $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="tipo_plan">Tipo de Plan</label>
                                        <input name="tipo_plan" type="text" class="form-control" id="tipo_plan"
                                            placeholder="tipo_plan">@error('tipo_plan') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="certificado">certificado</label>
                                        <input name="certificado" type="text" class="form-control" id="certificado"
                                            placeholder="certificado">@error('certificado') <span
                                            class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="empresa">Empresa</label>
                                        <input name="empresa" type="text" class="form-control" id="empresa"
                                            placeholder="empresa">@error('empresa') <span class="error text-danger">{{
                                            $message }}</span> @enderror
                                    </div>

                                </div>
                            </div>
                            {{-- tab datos de SEGURO --}}


                        </div>

                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary" id="btn-save">Guardar</button>
                                </div>

                            </form>

                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="form-row">

                       <div class="form-group col-12">
                        <input class="form-control" type="hidden" name="txtID" id="txtID">
                      </div>

                      <div class="form-group col-4">
                          <label for="">Fecha</label>
                        <input class="form-control" type="date" name="txtFecha" id="txtFecha" >
                      </div>

                      <div class="form-group col-4">
                          <label for="">Hora Inicio</label>
                        <input class="form-control" type="time" name="txtHora" id="txtHora" autocomplete="off" >
                      </div>

                      <div class="form-group col-4">
                          <label for="">Hora Fin</label>
                        <input class="form-control" type="time" name="txtHorafin" id="txtHorafin" autocomplete="off" >
                      </div>

                      {{-- <input type="hidden" class="form-control" name="image" id="image"> --}}
                      <input class="form-control" type="hidden" name="estatus" id="estatus" >

                      {{-- <div class="form-group col-12 mb-3">
                          <label for="">T&iacute;tulo</label>
                          <input class="form-control" type="text" name="title" id="title">
                      </div> --}}

                      <div class="form-group col-6 mb-3">
                         <label for="">Selecionar Paciente</label>
                              <select class="form-control" id="id_client" name="id_client" >
                                   <option value="">Seleccione Paciente</option>
                                       @foreach($client as $item)
                                          <option  value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                       @endforeach
                              </select>
                      </div>

                      <div class="form-group col-6 mb-3">
                         <label for="">Selecionar Unidad</label>
                              <select class="form-control" id="resourceId" name="resourceId" >
                                   <option value="">Seleccione Unidad</option>
                                   <option value="A">A</option>
                                   <option value="B">B</option>
                              </select>
                      </div>

                      <div class="form-group col-12 mb-3">
                         <label for="">Selecionar Doctor</label>
                              <select class="form-control" id="id_especialist" name="id_especialist" >
                                   <option value="">Seleccione Doctor</option>
                                       @foreach($especialist as $item)
                                          <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                       @endforeach
                              </select>
                      </div>

                      <label for="">Descripcion</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="2"></textarea>

                      <div class="form-group col-6 mt-3">
                          <label for="">Selecciona el servicio</label>
                          <select class="form-control" id="id_color" name="id_color" >
                              <option value="">Selecionar servicio</option>
                              @foreach($colores as $item)
                                    <option value="{{$item->id}}">{{$item->servicio}}</option>
                              @endforeach
                          </select>
                      </div>

                      <div class="form-group col-6 mt-3">
                          <label for="">¿Estatus de la cita?</label>
                          <select class="form-control" id="check" name="check">
                            <option value="">Selecionar estatus</option>
                            @foreach($estatus as $item)
                                <option value="{{$item->id}}">{{$item->estatus}}</option>
                            @endforeach
                          </select>
                      </div>

                  </div>

              </div>

              <div class="modal-footer">
                  <button class="btn  btn-sm text-white" id="btnWhats" style="background-color: #128C7E">
                      <input type="text" name="txtTelefono" id="txtTelefono" disabled style="background: transparent;color: #fff;border: 1px solid transparent;display: inherit;left: 40px;position: relative;font-size:0px;">
                      <input type="hidden" name="txtTelefono" id="txtTelefono">
                      <i class="fab fa-whatsapp" aria-hidden="true"></i> WhatsApp
                  </button>

                  <button class="btn btn-success btn-sm text-white" id="btnAgregar">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar
                  </button>

                  <button class="btn btn-warning btn-sm text-dark" id="btnModificar">
                      <i class="fa fa-retweet" aria-hidden="true"></i> Modificar
                  </button>

                  <button class="btn btn-danger btn-sm text-white" id="btnBorrar">
                      <i class="fa fa-trash" aria-hidden="true"></i> Borrar
                  </button>
              </div>

            </div>
          </div>
        </div>



