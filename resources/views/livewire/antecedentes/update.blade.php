<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModalAntecedentes" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Antecedente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item">
                        <a class="nav-link active" id="evaluacion-tab" data-toggle="tab" href="#evaluacion" role="tab" aria-controls="evaluacion" aria-selected="true">Evaluación oral</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" id="medicamentos-tab" data-toggle="tab" href="#medicamentos" role="tab" aria-controls="medicamentos" aria-selected="false">Medicamentos que consume</a>
                        </li>
                    </ul>
                </div>
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="evaluacion" role="tabpanel" aria-labelledby="evaluacion-tab">
                            <table class="table table-bordered table-sm">
                                <thead class="thead">
                                    <tr>
                                        <th>Antecedente</th>
                                        <th>Si</th>
                                        <th>Tratamiento</th>
                                        <th>Tiempo de evo.</th>
                                        <th>Parentesco</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Alergias</td>
                                        <td><input wire:model="antecedente1" type="checkbox" class="form-check-input" id="antecedente1" placeholder="Antecedente1"></td>
                                        <td><input wire:model="tratamiento1" type="text" class="form-control" id="tratamiento1" placeholder="Tratamiento1"></td>
                                        <td><input wire:model="tiempo1" type="text" class="form-control" id="tiempo1" placeholder="Tiempo1"></td>
                                        <td><input wire:model="parentesco1" type="text" class="form-control" id="parentesco1" placeholder="Parentesco1"></td>
                                    </tr>
                                    <tr>
                                        <td>Diabetes Melijtus</td>
                                        <td><input wire:model="antecedente2" type="checkbox" class="form-check-input" id="antecedente2" placeholder="Antecedente2"></td>
                                        <td><input wire:model="tratamiento2" type="text" class="form-control" id="tratamiento2" placeholder="Tratamiento2"></td>
                                        <td><input wire:model="tiempo2" type="text" class="form-control" id="tiempo2" placeholder="Tiempo2"></td>
                                        <td><input wire:model="parentesco2" type="text" class="form-control" id="parentesco2" placeholder="Parentesco2"></td>
                                    </tr>
                                    <tr>
                                        <td>Enfermedades virales</td>
                                        <td><input wire:model="antecedente3" type="checkbox" class="form-check-input" id="antecedente3" placeholder="Antecedente3"></td>
                                        <td><input wire:model="tratamiento3" type="text" class="form-control" id="tratamiento3" placeholder="Tratamiento3"></td>
                                        <td><input wire:model="tiempo3" type="text" class="form-control" id="tiempo3" placeholder="Tiempo3"></td>
                                        <td><input wire:model="parentesco3" type="text" class="form-control" id="parentesco3" placeholder="Parentesco3"></td>
                                    </tr>
                                    <tr>
                                        <td>Problemas cardiacos</td>
                                        <td><input wire:model="antecedente4" type="checkbox" class="form-check-input" id="antecedente4" placeholder="Antecedente4"></td>
                                        <td><input wire:model="tratamiento4" type="text" class="form-control" id="tratamiento4" placeholder="Tratamiento4"></td>
                                        <td><input wire:model="tiempo4" type="text" class="form-control" id="tiempo4" placeholder="Tiempo4"></td>
                                        <td><input wire:model="parentesco4" type="text" class="form-control" id="parentesco4" placeholder="Parentesco4"></td>
                                    </tr>
                                    <tr>
                                        <td>Artritis reumatoide</td>
                                        <td><input wire:model="antecedente5" type="checkbox" class="form-check-input" id="antecedente5" placeholder="Antecedente5"></td>
                                        <td><input wire:model="tratamiento5" type="text" class="form-control" id="tratamiento5" placeholder="Tratamiento5"></td>
                                        <td><input wire:model="tiempo5" type="text" class="form-control" id="tiempo5" placeholder="Tiempo5"></td>
                                        <td><input wire:model="parentesco5" type="text" class="form-control" id="parentesco5" placeholder="Parentesco5"></td>
                                    </tr>
                                    <tr>
                                        <td>Fiebre reumática</td>
                                        <td><input wire:model="antecedente6" type="checkbox" class="form-check-input" id="antecedente6" placeholder="Antecedente6"></td>
                                        <td><input wire:model="tratamiento6" type="text" class="form-control" id="tratamiento6" placeholder="Tratamiento6"></td>
                                        <td><input wire:model="tiempo6" type="text" class="form-control" id="tiempo6" placeholder="Tiempo6"></td>
                                        <td><input wire:model="parentesco6" type="text" class="form-control" id="parentesco6" placeholder="Parentesco6"></td>
                                    </tr>
                                    <tr>
                                        <td>Hemorragias</td>
                                        <td><input wire:model="antecedente7" type="checkbox" class="form-check-input" id="antecedente7" placeholder="Antecedente7"></td>
                                        <td><input wire:model="tratamiento7" type="text" class="form-control" id="tratamiento7" placeholder="Tratamiento7"></td>
                                        <td><input wire:model="tiempo7" type="text" class="form-control" id="tiempo7" placeholder="Tiempo7"></td>
                                        <td><input wire:model="parentesco7" type="text" class="form-control" id="parentesco7" placeholder="Parentesco7"></td>
                                    </tr>
                                    <tr>
                                        <td>Problemas tiroideos</td>
                                        <td><input wire:model="antecedente8" type="checkbox" class="form-check-input" id="antecedente8" placeholder="Antecedente8"></td>
                                        <td><input wire:model="tratamiento8" type="text" class="form-control" id="tratamiento8" placeholder="Tratamiento8"></td>
                                        <td><input wire:model="tiempo8" type="text" class="form-control" id="tiempo8" placeholder="Tiempo8"></td>
                                        <td><input wire:model="parentesco8" type="text" class="form-control" id="parentesco8" placeholder="Parentesco8"></td>
                                    </tr>
                                    <tr>
                                        <td>Presión alta o baja</td>
                                        <td><input wire:model="antecedente9" type="checkbox" class="form-check-input" id="antecedente9" placeholder="Antecedente9"></td>
                                        <td><input wire:model="tratamiento9" type="text" class="form-control" id="tratamiento9" placeholder="Tratamiento9"></td>
                                        <td><input wire:model="tiempo9" type="text" class="form-control" id="tiempo9" placeholder="Tiempo9"></td>
                                        <td><input wire:model="parentesco9" type="text" class="form-control" id="parentesco9" placeholder="Parentesco9"></td>
                                    </tr>
                                    <tr>
                                        <td>Desmayos frecuentes</td>
                                        <td><input wire:model="antecedente10" type="checkbox" class="form-check-input" id="antecedente10" placeholder="Antecedente10"></td>
                                        <td><input wire:model="tratamiento10" type="text" class="form-control" id="tratamiento10" placeholder="Tratamiento10"></td>
                                        <td><input wire:model="tiempo10" type="text" class="form-control" id="tiempo10" placeholder="Tiempo10"></td>
                                        <td><input wire:model="parentesco10" type="text" class="form-control" id="parentesco10" placeholder="Parentesco10"></td>
                                    </tr>
                                    <tr>
                                        <td>Convulsiones</td>
                                        <td><input wire:model="antecedente11" type="checkbox" class="form-check-input" id="antecedente11" placeholder="Antecedente11"></td>
                                        <td><input wire:model="tratamiento11" type="text" class="form-control" id="tratamiento11" placeholder="Tratamiento11"></td>
                                        <td><input wire:model="tiempo11" type="text" class="form-control" id="tiempo11" placeholder="Tiempo11"></td>
                                        <td><input wire:model="parentesco11" type="text" class="form-control" id="parentesco11" placeholder="Parentesco11"></td>
                                    </tr>
                                    <tr>
                                        <td>Enf. transmisión sexual</td>
                                        <td><input wire:model="antecedente12" type="checkbox" class="form-check-input" id="antecedente12" placeholder="Antecedente12"></td>
                                        <td><input wire:model="tratamiento12" type="text" class="form-control" id="tratamiento12" placeholder="Tratamiento12"></td>
                                        <td><input wire:model="tiempo12" type="text" class="form-control" id="tiempo12" placeholder="Tiempo12"></td>
                                        <td><input wire:model="parentesco12" type="text" class="form-control" id="parentesco12" placeholder="Parentesco12"></td>
                                    </tr>
                                    <tr>
                                        <td>Operaciones en el cuerpo</td>
                                        <td><input wire:model="antecedente13" type="checkbox" class="form-check-input" id="antecedente13" placeholder="Antecedente13"></td>
                                        <td><input wire:model="tratamiento13" type="text" class="form-control" id="tratamiento13" placeholder="Tratamiento13"></td>
                                        <td><input wire:model="tiempo13" type="text" class="form-control" id="tiempo13" placeholder="Tiempo13"></td>
                                        <td><input wire:model="parentesco13" type="text" class="form-control" id="parentesco13" placeholder="Parentesco13"></td>
                                    </tr>
                                    <tr>
                                        <td>Problemas respiratorios</td>
                                        <td><input wire:model="antecedente14" type="checkbox" class="form-check-input" id="antecedente14" placeholder="Antecedente14"></td>
                                        <td><input wire:model="tratamiento14" type="text" class="form-control" id="tratamiento14" placeholder="Tratamiento14"></td>
                                        <td><input wire:model="tiempo14" type="text" class="form-control" id="tiempo14" placeholder="Tiempo14"></td>
                                        <td><input wire:model="parentesco14" type="text" class="form-control" id="parentesco14" placeholder="Parentesco14"></td>
                                    </tr>
                                    <tr>
                                        <td>Cáncer</td>
                                        <td><input wire:model="antecedente15" type="checkbox" class="form-check-input" id="antecedente15" placeholder="Antecedente15"></td>
                                        <td><input wire:model="tratamiento15" type="text" class="form-control" id="tratamiento15" placeholder="Tratamiento15"></td>
                                        <td><input wire:model="tiempo15" type="text" class="form-control" id="tiempo15" placeholder="Tiempo15"></td>
                                        <td><input wire:model="parentesco15" type="text" class="form-control" id="parentesco15" placeholder="Parentesco15"></td>
                                    </tr>
                                    <tr>
                                        <td>Tatuajes o perforaciones</td>
                                        <td><input wire:model="antecedente16" type="checkbox" class="form-check-input" id="antecedente16" placeholder="Antecedente16"></td>
                                        <td><input wire:model="tratamiento16" type="text" class="form-control" id="tratamiento16" placeholder="Tratamiento16"></td>
                                        <td><input wire:model="tiempo16" type="text" class="form-control" id="tiempo16" placeholder="Tiempo16"></td>
                                        <td><input wire:model="parentesco16" type="text" class="form-control" id="parentesco16" placeholder="Parentesco16"></td>
                                    </tr>
                                    <tr>
                                        <td>Cartilla de evaluación</td>
                                        <td><input wire:model="antecedente17" type="checkbox" class="form-check-input" id="antecedente17" placeholder="Antecedente17"></td>
                                        <td><input wire:model="tratamiento17" type="text" class="form-control" id="tratamiento17" placeholder="Tratamiento17"></td>
                                        <td><input wire:model="tiempo17" type="text" class="form-control" id="tiempo17" placeholder="Tiempo17"></td>
                                        <td><input wire:model="parentesco17" type="text" class="form-control" id="parentesco17" placeholder="Parentesco17"></td>
                                    </tr>
                                    <tr>
                                        <td>Otra enfermedad</td>
                                        <td><input wire:model="antecedente18" type="text" class="form-control" id="antecedente18" placeholder="Antecedente18"></td>
                                        <td><input wire:model="tratamiento18" type="text" class="form-control" id="tratamiento18" placeholder="Tratamiento18"></td>
                                        <td><input wire:model="tiempo18" type="text" class="form-control" id="tiempo18" placeholder="Tiempo18"></td>
                                        <td><input wire:model="parentesco18" type="text" class="form-control" id="parentesco18" placeholder="Parentesco18"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        {{-- tab datos de Evaluación --}}

                        {{-- tab datos de Medicamentos --}}
                        <div class="tab-pane fade" id="medicamentos" role="tabpanel" aria-labelledby="medicamentos-tab">
                            <h1>Hola</h1>
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
