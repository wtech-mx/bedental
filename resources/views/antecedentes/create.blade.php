<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear Historial Clinico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form class="row">

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="id_client">Paciente</label>
                <select wire:model.defer="id_client" class="form-control" id="id_client">
                    <option>Seleciona el paciente</option>
                    @foreach ($client as $value)
                    <option value="{{ $value->id }}"> {{ $value->nombre }}</option>>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente1"></label>
                <input wire:model.defer="antecedente1" type="text" class="form-control" id="antecedente1" placeholder="Antecedente1">@error('antecedente1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento1"></label>
                <input wire:model.defer="tratamiento1" type="text" class="form-control" id="tratamiento1" placeholder="Tratamiento1">@error('tratamiento1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente2"></label>
                <input wire:model.defer="antecedente2" type="text" class="form-control" id="antecedente2" placeholder="Antecedente2">@error('antecedente2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento2"></label>
                <input wire:model.defer="tratamiento2" type="text" class="form-control" id="tratamiento2" placeholder="Tratamiento2">@error('tratamiento2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente3"></label>
                <input wire:model.defer="antecedente3" type="text" class="form-control" id="antecedente3" placeholder="Antecedente3">@error('antecedente3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento3"></label>
                <input wire:model.defer="tratamiento3" type="text" class="form-control" id="tratamiento3" placeholder="Tratamiento3">@error('tratamiento3') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente4"></label>
                <input wire:model.defer="antecedente4" type="text" class="form-control" id="antecedente4" placeholder="Antecedente4">@error('antecedente4') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento4"></label>
                <input wire:model.defer="tratamiento4" type="text" class="form-control" id="tratamiento4" placeholder="Tratamiento4">@error('tratamiento4') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente5"></label>
                <input wire:model.defer="antecedente5" type="text" class="form-control" id="antecedente5" placeholder="Antecedente5">@error('antecedente5') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento5"></label>
                <input wire:model.defer="tratamiento5" type="text" class="form-control" id="tratamiento5" placeholder="Tratamiento5">@error('tratamiento5') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente6"></label>
                <input wire:model.defer="antecedente6" type="text" class="form-control" id="antecedente6" placeholder="Antecedente6">@error('antecedente6') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento6"></label>
                <input wire:model.defer="tratamiento6" type="text" class="form-control" id="tratamiento6" placeholder="Tratamiento6">@error('tratamiento6') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente7"></label>
                <input wire:model.defer="antecedente7" type="text" class="form-control" id="antecedente7" placeholder="Antecedente7">@error('antecedente7') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento7"></label>
                <input wire:model.defer="tratamiento7" type="text" class="form-control" id="tratamiento7" placeholder="Tratamiento7">@error('tratamiento7') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente8"></label>
                <input wire:model.defer="antecedente8" type="text" class="form-control" id="antecedente8" placeholder="Antecedente8">@error('antecedente8') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento8"></label>
                <input wire:model.defer="tratamiento8" type="text" class="form-control" id="tratamiento8" placeholder="Tratamiento8">@error('tratamiento8') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente9"></label>
                <input wire:model.defer="antecedente9" type="text" class="form-control" id="antecedente9" placeholder="Antecedente9">@error('antecedente9') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento9"></label>
                <input wire:model.defer="tratamiento9" type="text" class="form-control" id="tratamiento9" placeholder="Tratamiento9">@error('tratamiento9') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente10"></label>
                <input wire:model.defer="antecedente10" type="text" class="form-control" id="antecedente10" placeholder="Antecedente10">@error('antecedente10') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento10"></label>
                <input wire:model.defer="tratamiento10" type="text" class="form-control" id="tratamiento10" placeholder="Tratamiento10">@error('tratamiento10') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente11"></label>
                <input wire:model.defer="antecedente11" type="text" class="form-control" id="antecedente11" placeholder="Antecedente11">@error('antecedente11') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento11"></label>
                <input wire:model.defer="tratamiento11" type="text" class="form-control" id="tratamiento11" placeholder="Tratamiento11">@error('tratamiento11') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente12"></label>
                <input wire:model.defer="antecedente12" type="text" class="form-control" id="antecedente12" placeholder="Antecedente12">@error('antecedente12') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento12"></label>
                <input wire:model.defer="tratamiento12" type="text" class="form-control" id="tratamiento12" placeholder="Tratamiento12">@error('tratamiento12') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente13"></label>
                <input wire:model.defer="antecedente13" type="text" class="form-control" id="antecedente13" placeholder="Antecedente13">@error('antecedente13') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento13"></label>
                <input wire:model.defer="tratamiento13" type="text" class="form-control" id="tratamiento13" placeholder="Tratamiento13">@error('tratamiento13') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente14"></label>
                <input wire:model.defer="antecedente14" type="text" class="form-control" id="antecedente14" placeholder="Antecedente14">@error('antecedente14') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento14"></label>
                <input wire:model.defer="tratamiento14" type="text" class="form-control" id="tratamiento14" placeholder="Tratamiento14">@error('tratamiento14') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente15"></label>
                <input wire:model.defer="antecedente15" type="text" class="form-control" id="antecedente15" placeholder="Antecedente15">@error('antecedente15') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento15"></label>
                <input wire:model.defer="tratamiento15" type="text" class="form-control" id="tratamiento15" placeholder="Tratamiento15">@error('tratamiento15') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente16"></label>
                <input wire:model.defer="antecedente16" type="text" class="form-control" id="antecedente16" placeholder="Antecedente16">@error('antecedente16') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento16"></label>
                <input wire:model.defer="tratamiento16" type="text" class="form-control" id="tratamiento16" placeholder="Tratamiento16">@error('tratamiento16') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente17"></label>
                <input wire:model.defer="antecedente17" type="text" class="form-control" id="antecedente17" placeholder="Antecedente17">@error('antecedente17') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento17"></label>
                <input wire:model.defer="tratamiento17" type="text" class="form-control" id="tratamiento17" placeholder="Tratamiento17">@error('tratamiento17') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente18"></label>
                <input wire:model.defer="antecedente18" type="text" class="form-control" id="antecedente18" placeholder="Antecedente18">@error('antecedente18') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento18"></label>
                <input wire:model.defer="tratamiento18" type="text" class="form-control" id="tratamiento18" placeholder="Tratamiento18">@error('tratamiento18') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="antecedente19"></label>
                <input wire:model.defer="antecedente19" type="text" class="form-control" id="antecedente19" placeholder="Antecedente19">@error('antecedente19') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="tratamiento19"></label>
                <input wire:model.defer="tratamiento19" type="text" class="form-control" id="tratamiento19" placeholder="Tratamiento19">@error('tratamiento19') <span class="error text-danger">{{ $message }}</span> @enderror
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
