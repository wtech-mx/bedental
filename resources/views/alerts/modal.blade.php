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

                                <div class="form-row">
                                   <div class="form-group col-6">
                                        <label for="">Nombre</label>
                                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
                                   </div>

                                   <div class="form-group col-6">
                                        <label for="">Apellido</label>
                                        <input class="form-control" type="text" name="apellido" id="apellido" placeholder="Apellido">
                                   </div>

                                   <div class="form-group col-6">
                                        <label for="">Telefono</label>
                                        <input class="form-control" type="number" name="telefono" id="telefono" placeholder="Telefono">
                                   </div>

                                   <div class="form-group col-6">
                                        <label for="">Correo</label>
                                        <input class="form-control" type="email" name="email" id="" placeholder="Email">
                                   </div>

                                   <div class="form-group col-12">
                                      <label for="">Motivo de consulta</label>
                                      <textarea class="form-control" name="motivo_consulta" id="motivo_consulta" cols="30" rows="2"></textarea>
                                   </div>

                                     <div class="form-group col-12">
                                        <button type="submit" class="btn btn-primary" id="btn-save">Guardar</button>
                                    </div>
                                </div>

                            </form>

                          </div>
                        </div>
                      </div>
                    </div>

                  <div class="form-row">

                      <div class="form-group col-12">
                        {{--<label for="">id</label>--}}
                        <input class="form-control" type="hidden" name="txtID" id="txtID">
                      </div>

                      <div class="form-group col-4">
                          <label for="">Fecha</label>
                        <input class="form-control" type="date" name="txtFecha" id="txtFecha">
                      </div>

                      <div class="form-group col-4">
                          <label for="">Hora Inicio</label>
                        <input class="form-control" type="time" name="txtHora" id="txtHora" autocomplete="off">
                      </div>

                      <div class="form-group col-4">
                          <label for="">Hora Fin</label>
                        <input class="form-control" type="time" name="txtHorafin" id="txtHorafin" autocomplete="off">
                      </div>

                      <input type="hidden" class="form-control" name="image" id="image">
                      <input class="form-control" type="hidden" name="estatus" id="estatus" >

                      {{-- <div class="form-group col-12 mb-3">
                          <label for="">T&iacute;tulo</label>
                          <input class="form-control" type="text" name="title" id="title">
                      </div> --}}

                      <div class="form-group col-6 mb-3">
                         <label for="">Selecionar Paciente</label>
                              <select class="form-control mibuscador_paciente" id="id_client" name="id_client">
                                   <option value="">Seleccione Paciente</option>
                                       @foreach($client as $item)
                                          <option value="{{$item->id}}">{{$item->nombre}}</option>
                                       @endforeach
                              </select>
                      </div>

                      <div class="form-group col-6 mb-3">
                         <label for="">Selecionar Unidad</label>
                              <select class="form-control" id="resource_id" name="resource_id">
                                   <option value="">Seleccione Unidad</option>
                                   <option value="a">A</option>
                                   <option value="b">B</option>
                              </select>
                      </div>

                      <div class="form-group col-12 mb-3">
                         <label for="">Selecionar Doctor</label>
                              <select class="form-control mibuscador_doctors" id="id_especialist" name="id_especialist">
                                   <option value="">Seleccione Doctor</option>
                                       @foreach($especialist as $item)
                                          <option value="{{$item->id}}">{{$item->nombre}}</option>
                                       @endforeach
                              </select>
                      </div>

                      <label for="">Descripcion</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="2"></textarea>

                      <div class="form-group col-12 mt-3">
                          <label for="">Selecciona el estatus de la cita</label>
                          <select class="form-control" id="color" name="color">
                              <option value="">Selecionar estatus</option>
                              <option value="#8E44AD">No asistieron cancelado</option>
                              <option value="#3498DB">Sin confirmar/agendado</option>
                              <option value="#1ABC9C">Confirmado</option>
                              <option value="#27AE60">Recordatorio/tentativo</option>
                              <option value="{{$colores->limpieza}}">Limpieza</option>
                              <option value="{{$colores->operatoria}}">Operatoria</option>
                              <option value="{{$colores->ortodoncia}}">Ortodoncia</option>
                              <option value="{{$colores->cirugia_extraccion}}">Cirugua/extraccion</option>
                              <option value="#95A5A6">Atendido/reservado</option>
                              <option value="#F1C40F">Paciente nuevo</option>
                          </select>
                      </div>

                      <div class="form-group col-12 mt-3">
                          <label for="">¿Esta tarea ya esta realizada?</label>
                          <select class="form-control" id="check" name="check">
                              <option value="1">Laboratorio </option>
                              <option value="2">Atentido </option>
                              <option value="3">No asistio </option>
                          </select>
                      </div>


                  </div>

              </div>

              <div class="modal-footer">
                  <button class="btn btn-success text-white" id="btnAgregar">
                      <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar
                  </button>

                  <button class="btn btn-warning text-dark" id="btnModificar">
                      <i class="fa fa-retweet" aria-hidden="true"></i> Modificar
                  </button>

                  <button class="btn btn-danger text-white" id="btnBorrar">
                      <i class="fa fa-trash" aria-hidden="true"></i> Borrar
                  </button>
              </div>

            </div>
          </div>
        </div>



