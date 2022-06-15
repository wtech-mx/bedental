<!-- Modal -->
<div class="modal fade" id="create" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create">Agregar Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">

                <form class="row" action="{{ route('especialists.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="col-12">
                          {{-- tab datos de cliente --}}
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">
                                <div class="row mt-3">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="apellido">Apellido</label>
                                        <input  type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido">@error('apellido') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="email">Email</label>
                                        <input  type="email" class="form-control" name="email" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="telefono">Telefono</label>
                                        <input  type="number" class="form-control" name="telefono" id="telefono" placeholder="Telefono">@error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="especialidad">Especialidad</label>
                                        <select  class="form-control" id="especialidad" name="especialidad">
                                            <option value="">Seleciona la especialidad</option>
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
                                        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula">@error('cedula') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha Nacimiento">@error('fecha_nacimiento') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                </div>

                            </div>

                          </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
