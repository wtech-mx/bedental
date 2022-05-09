<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Especialist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
				<form class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                <a class="nav-link active" id="cliente2-tab" data-toggle="tab" href="#cliente2" role="tab" aria-controls="cliente2" aria-selected="true">Cliente</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" id="facturacion2-tab" data-toggle="tab" href="#facturacion2" role="tab" aria-controls="facturacion2" aria-selected="false">Facturacion</a>
                                </li>

                                <li class="nav-item">
                                <a class="nav-link" id="seguro2-tab" data-toggle="tab" href="#seguro2" role="tab" aria-controls="seguro2" aria-selected="false">Seguro</a>
                                </li>
                            </ul>
                        </div>

                          {{-- tab datos de cliente2 --}}
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="cliente2" role="tabpanel" aria-labelledby="cliente2-tab">
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
                                        <label for="cedula">Cedula</label>
                                        <input wire:model="cedula" type="text" class="form-control" id="cedula" placeholder="Cedula">@error('cedula') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
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
                                        <label for="telefono">Telefono</label>
                                        <input wire:model="telefono" type="number" class="form-control" id="telefono" placeholder="Telefono">@error('telefono') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                        <input wire:model="fecha_nacimiento" type="date" class="form-control" id="fecha_nacimiento" placeholder="Fecha Nacimiento">@error('fecha_nacimiento') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                            </div>
                            {{-- tab datos de cliente --}}

                            {{-- tab datos de facturacion2 --}}
                            <div class="tab-pane fade" id="facturacion2" role="tabpanel" aria-labelledby="facturacion2-tab">
                                <div class="row mt-3">

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="domicilio_fiscal">Domicilio fiscal</label>
                                        <input wire:model.defer="domicilio_fiscal" type="text" class="form-control" id="domicilio_fiscal" placeholder="Domicilio fiscal">@error('domicilio_fiscal') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="regimen_fiscal">regimen fiscal</label>
                                        <input wire:model.defer="regimen_fiscal" type="text" class="form-control" id="regimen_fiscal" placeholder="regimen fiscal">@error('regimen_fiscal') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="rfc">RFC</label>
                                        <input wire:model.defer="rfc" type="text" class="form-control" id="rfc" placeholder="RFC">@error('rfc') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-6">
                                        <label for="razon_social">Razon social</label>
                                        <input wire:model.defer="razon_social" type="text" class="form-control" id="razon_social" placeholder="razon_social">@error('razon_social') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="correo_fiscal">Correo fiscal</label>
                                        <input wire:model.defer="correo_fiscal" type="text" class="form-control" id="correo_fiscal" placeholder="correo_fiscal">@error('correo_fiscal') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                </div>
                            </div>
                            {{-- tab datos de facturacion --}}

                            {{-- tab datos de cliente --}}
                            <div class="tab-pane fade" id="seguro2" role="tabpanel" aria-labelledby="seguro2-tab">
                                <div class="row">

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="correo_fiscal">Seguro</label>
                                        <input wire:model.defer="seguro" type="text" class="form-control" id="seguro" placeholder="seguro">@error('seguro') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="poliza">Poliza</label>
                                        <input wire:model.defer="poliza" type="text" class="form-control" id="poliza" placeholder="poliza">@error('poliza') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="form-group col-xs-12 col-sm-12 col-md-12">
                                        <label for="empresa">Empresa</label>
                                        <input wire:model.defer="empresa" type="text" class="form-control" id="empresa" placeholder="empresa">@error('empresa') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>

                                </div>
                            </div>
                            {{-- tab datos de cliente --}}

                          </div>

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
