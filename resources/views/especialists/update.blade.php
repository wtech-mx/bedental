<!-- Modal -->
<div class="modal fade" id="updateModal{{$row->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModal{{$row->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModal{{$row->id}}">Agregar Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                {!! Form::open(array('route' => ['especialists.update', $row->id],'method'=>'PATCH','enctype'=>'multipart/form-data')) !!}
                    <div class="col-12">
                          {{-- tab datos de cliente --}}
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">
                                <div class="row mt-3">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="nombre">Nombre</label>
                                        <input value="{{$row->nombre}}" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="apellido">Apellido</label>
                                        <input value="{{$row->apellido}}" type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">@error('apellido') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="email">Email</label>
                                        <input value="{{$row->email}}" type="email" class="form-control" name="email" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="telefono">Telefono</label>
                                        <input value="{{$row->telefono}}" type="number" class="form-control" name="telefono" id="telefono" placeholder="Telefono">@error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="especialidad">Especialidad</label>
                                        <select  class="form-control" id="especialidad" name="especialidad">
                                            <option selected value="">{{$row->especialidad}}</option>
                                            <option value="Cirugía oral y maxilofacial">Cirugía oral y maxilofacial</option>
                                            <option value="Endodoncista">Endodoncista</option>
                                            <option value="Odontólogo general">Odontólogo general</option>
                                            <option value="Odontopediatra">Odontopediatra</option>
                                            <option value="Ortodoncista">Ortodoncista</option>
                                            <option value="Periodoncista">Periodoncista</option>
                                            <option value="Patología maxilofacial y oral">Patología maxilofacial y oral</option>
                                            <option value="Prostodoncista y odontología protésica">Prostodoncista y odontología protésica</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="cedula">Cedula</label>
                                        <input value="{{$row->cedula}}" type="text" class="form-control" name="cedula" id="cedula" placeholder="Cedula">@error('cedula') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        <input value="{{$row->fecha_nacimiento}}" type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha Nacimiento">@error('fecha_nacimiento') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    {{-- <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="color">Color</label>
                                        <input value="color" type="color" class="form-control" id="color" placeholder="Fecha Nacimiento">@error('color') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div> --}}
                                </div>

                            </div>
                            {{-- tab datos de cliente --}}
                          </div>

                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>

                {!! Form::close() !!}
            </div>

        </div>
    </div>
</div>
