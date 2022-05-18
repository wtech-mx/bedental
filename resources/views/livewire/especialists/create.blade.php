<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Agregar Doctor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form class="row">

                    <div class="col-12">

                          {{-- tab datos de cliente --}}
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">
                                <div class="row mt-3">
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6 ">
                                        <label for="nombre">Nombre</label>
                                        <input wire:model="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">@error('nombre') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="apellido">Apellido</label>
                                        <input wire:model="apellido" type="text" class="form-control" id="apellido" placeholder="Apellido">@error('apellido') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="email">Email</label>
                                        <input wire:model="email" type="email" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>


                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="telefono">Telefono</label>
                                        <input wire:model="telefono" type="number" class="form-control" id="telefono" placeholder="Telefono">@error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="especialidad">Especialidad</label>
                                        <select wire:model="especialidad" class="form-control" id="especialidad">
                                            <option >Seleciona especialidad</option>
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
                                        <input wire:model="cedula" type="text" class="form-control" id="cedula" placeholder="Cedula">@error('cedula') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        <input wire:model="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" placeholder="Fecha Nacimiento">@error('fecha_nacimiento') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="color">Color</label>
                                        <input wire:model="color" type="color" class="form-control" id="color" placeholder="Fecha Nacimiento">@error('color') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                            </div>
                            {{-- tab datos de cliente --}}
                          </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
