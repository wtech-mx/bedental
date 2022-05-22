<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModalAntecedentes" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Historial Clinico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <li class="nav-item">
                        <a class="nav-link active" id="evaluacion-tab" data-toggle="tab" href="#evaluacion" role="tab" aria-controls="evaluacion" aria-selected="true">Ant. Patologicos y no Patologicos</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" id="medicamentos-tab" data-toggle="tab" href="#medicamentos" role="tab" aria-controls="medicamentos" aria-selected="false">Evaluación Oral</a>
                        </li>
                    </ul>
                </div>
                <form>
					<input type="hidden" wire:model.defer="selected_id">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="evaluacion" role="tabpanel" aria-labelledby="evaluacion-tab">

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Antecedente</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols2Input">Si/No</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols3Input">Tratamiento</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label class="form-control-label" for="example3cols3Input">Tiempo de evo.</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                      <label class="form-control-label" for="example3cols3Input">Parentesco</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Alergias</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente1" type="radio" class="form-check-input" id="antecedente1" name="antecedente1" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente1" type="radio" class="form-check-input" id="antecedente1" name="antecedente1" value="0">

                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento1" type="text" class="form-control" id="tratamiento1" placeholder="Tratamiento1">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo1" type="text" class="form-control" id="tiempo1" placeholder="Tiempo1">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco1" type="text" class="form-control" id="parentesco1" placeholder="Parentesco1">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Diabetes Melijtus</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente2" type="radio" class="form-check-input" id="antecedente2" name="antecedente2" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente2" type="radio" class="form-check-input" id="antecedente2" name="antecedente2" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento2" type="text" class="form-control" id="tratamiento2" placeholder="Tratamiento2">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo2" type="text" class="form-control" id="tiempo2" placeholder="Tiempo2">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco2" type="text" class="form-control" id="parentesco2" placeholder="Parentesco2">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-check form-check-inline">
                                    <label class="form-control-label" for="example3cols1Input">Enfermedades virales
                                        <label class="form-check-label" for="">Var.</label>
                                        <input wire:model.defer="varicela" type="checkbox" class="form-check-input" id="varicela" placeholder="varicela">
                                        <label class="form-check-label" for="">Sara.</label>
                                        <input wire:model.defer="sarampion" type="checkbox" class="form-check-input" id="sarampion" placeholder="sarampion">
                                        <label class="form-check-label" for="">Rub.</label>
                                        <input wire:model.defer="rubeola" type="checkbox" class="form-check-input" id="rubeola" placeholder="rubeola">
                                        <label class="form-check-label" for="">Esc.</label>
                                        <input wire:model.defer="escarlatina" type="checkbox" class="form-check-input" id="escarlatina" placeholder="escarlatina">
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente3" type="radio" class="form-check-input" id="antecedente3" name="antecedente3" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente3" type="radio" class="form-check-input" id="antecedente3" name="antecedente3" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento3" type="text" class="form-control" id="tratamiento3" placeholder="Tratamiento3">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo3" type="text" class="form-control" id="tiempo3" placeholder="Tiempo3">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco3" type="text" class="form-control" id="parentesco3" placeholder="Parentesco3">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Problemas cardiacos</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente4" type="radio" class="form-check-input" id="antecedente4" name="antecedente4" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente4" type="radio" class="form-check-input" id="antecedente4" name="antecedente4" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento4" type="text" class="form-control" id="tratamiento4" placeholder="Tratamiento4">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo4" type="text" class="form-control" id="tiempo4" placeholder="Tiempo4">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco4" type="text" class="form-control" id="parentesco4" placeholder="Parentesco4">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Artritis reumatoide</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente5" type="radio" class="form-check-input" id="antecedente5" name="antecedente5" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente5" type="radio" class="form-check-input" id="antecedente5" name="antecedente5" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento5" type="text" class="form-control" id="tratamiento5" placeholder="Tratamiento5">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo5" type="text" class="form-control" id="tiempo5" placeholder="Tiempo5">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco5" type="text" class="form-control" id="parentesco5" placeholder="Parentesco5">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Fiebre reumática</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente6" type="radio" class="form-check-input" id="antecedente6" name="antecedente6" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente6" type="radio" class="form-check-input" id="antecedente6" name="antecedente6" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento6" type="text" class="form-control" id="tratamiento6" placeholder="Tratamiento6">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo6" type="text" class="form-control" id="tiempo6" placeholder="Tiempo6">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco6" type="text" class="form-control" id="parentesco6" placeholder="Parentesco6">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Hemorragias</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente7" type="radio" class="form-check-input" id="antecedente7" name="antecedente7" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente7" type="radio" class="form-check-input" id="antecedente7" name="antecedente7" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento7" type="text" class="form-control" id="tratamiento7" placeholder="Tratamiento7">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo7" type="text" class="form-control" id="tiempo7" placeholder="Tiempo7">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco7" type="text" class="form-control" id="parentesco7" placeholder="Parentesco7">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Problemas tiroideos</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente8" type="radio" class="form-check-input" id="antecedente8" name="antecedente8" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente8" type="radio" class="form-check-input" id="antecedente8" name="antecedente8" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento8" type="text" class="form-control" id="tratamiento8" placeholder="Tratamiento8">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo8" type="text" class="form-control" id="tiempo8" placeholder="Tiempo8">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco8" type="text" class="form-control" id="parentesco8" placeholder="Parentesco8">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Presión alta o baja</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente9" type="radio" class="form-check-input" id="antecedente9" name="antecedente9" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente9" type="radio" class="form-check-input" id="antecedente9" name="antecedente9" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento9" type="text" class="form-control" id="tratamiento9" placeholder="Tratamiento9">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo9" type="text" class="form-control" id="tiempo9" placeholder="Tiempo9">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco9" type="text" class="form-control" id="parentesco9" placeholder="Parentesco9">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Desmayos frecuentes</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente10" type="radio" class="form-check-input" id="antecedente10" name="antecedente10" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente10" type="radio" class="form-check-input" id="antecedente10" name="antecedente10" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento10" type="text" class="form-control" id="tratamiento10" placeholder="Tratamiento10">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo10" type="text" class="form-control" id="tiempo10" placeholder="Tiempo10">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco10" type="text" class="form-control" id="parentesco10" placeholder="Parentesco10">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Convulsiones</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente11" type="radio" class="form-check-input" id="antecedente11" name="antecedente11" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente11" type="radio" class="form-check-input" id="antecedente11" name="antecedente11" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento11" type="text" class="form-control" id="tratamiento11" placeholder="Tratamiento11">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo11" type="text" class="form-control" id="tiempo11" placeholder="Tiempo11">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco11" type="text" class="form-control" id="parentesco11" placeholder="Parentesco11">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group form-check-inline">
                                    <label class="form-control-label" for="example3cols1Input">Enf. transmisión sexual
                                        <label class="form-check-label" for="">VIH</label>
                                        <input wire:model.defer="vih" type="checkbox" class="form-check-input" id="vih" placeholder="vih">
                                        <label class="form-check-label" for="">Hepa</label>
                                        <input wire:model.defer="hepatitis" type="checkbox" class="form-check-input" id="hepatitis" placeholder="hepatitis">
                                        <label class="form-check-label" for="">VPH</label>
                                        <input wire:model.defer="vph" type="checkbox" class="form-check-input" id="vph" placeholder="vph">
                                        <label class="form-check-label" for="">Otras</label>
                                        <input wire:model.defer="otras_tran" type="checkbox" class="form-check-input" id="otras_tran" placeholder="otras_tran">
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente12" type="radio" class="form-check-input" id="antecedente12" name="antecedente12" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente12" type="radio" class="form-check-input" id="antecedente12" name="antecedente12" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento12" type="text" class="form-control" id="tratamiento12" placeholder="Tratamiento12">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo12" type="text" class="form-control" id="tiempo12" placeholder="Tiempo12">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco12" type="text" class="form-control" id="parentesco12" placeholder="Parentesco12">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Operaciones en el cuerpo</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente13" type="radio" class="form-check-input" id="antecedente13" name="antecedente13" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente13" type="radio" class="form-check-input" id="antecedente13" name="antecedente13" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento13" type="text" class="form-control" id="tratamiento13" placeholder="Tratamiento13">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo13" type="text" class="form-control" id="tiempo13" placeholder="Tiempo13">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco13" type="text" class="form-control" id="parentesco13" placeholder="Parentesco13">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group form-check-inline">
                                    <label class="form-control-label" for="example3cols1Input">Problemas respiratorios
                                        <label class="form-check-label" for="">Covid19</label>
                                        <input wire:model.defer="covid" type="checkbox" class="form-check-input" id="covid" placeholder="covid">
                                        <label class="form-check-label" for="">Influ</label>
                                        <input wire:model.defer="influenza" type="checkbox" class="form-check-input" id="influenza" placeholder="influenza">
                                        <label class="form-check-label" for="">EPOC</label>
                                        <input wire:model.defer="epoc" type="checkbox" class="form-check-input" id="epoc" placeholder="epoc">
                                        <label class="form-check-label" for="">Asma</label>
                                        <input wire:model.defer="asma" type="checkbox" class="form-check-input" id="asma" placeholder="asma">
                                        <label class="form-check-label" for="">Otra</label>
                                        <input wire:model.defer="otras_res" type="checkbox" class="form-check-input" id="otras_res" placeholder="otras_res">
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente14" type="radio" class="form-check-input" id="antecedente14" name="antecedente14" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente14" type="radio" class="form-check-input" id="antecedente14" name="antecedente14" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento14" type="text" class="form-control" id="tratamiento14" placeholder="Tratamiento14">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo14" type="text" class="form-control" id="tiempo14" placeholder="Tiempo14">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco14" type="text" class="form-control" id="parentesco14" placeholder="Parentesco14">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Cáncer</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente15" type="radio" class="form-check-input" id="antecedente15" name="antecedente15" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente15" type="radio" class="form-check-input" id="antecedente15" name="antecedente15" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento15" type="text" class="form-control" id="tratamiento15" placeholder="Tratamiento15">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo15" type="text" class="form-control" id="tiempo15" placeholder="Tiempo15">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco15" type="text" class="form-control" id="parentesco15" placeholder="Parentesco15">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Tatuajes o perforaciones</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente16" type="radio" class="form-check-input" id="antecedente16" name="antecedente16" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente16" type="radio" class="form-check-input" id="antecedente16" name="antecedente16" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento16" type="text" class="form-control" id="tratamiento16" placeholder="Tratamiento16">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo16" type="text" class="form-control" id="tiempo16" placeholder="Tiempo16">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco16" type="text" class="form-control" id="parentesco16" placeholder="Parentesco16">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Cartilla de evaluación</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="antecedente17" type="radio" class="form-check-input" id="antecedente17" name="antecedente17" value="1">
                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="antecedente17" type="radio" class="form-check-input" id="antecedente17" name="antecedente17" value="0">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento17" type="text" class="form-control" id="tratamiento17" placeholder="Tratamiento17">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo17" type="text" class="form-control" id="tiempo17" placeholder="Tiempo17">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco17" type="text" class="form-control" id="parentesco17" placeholder="Parentesco17">
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Otra enfermedad</label>
                                  </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                      <input wire:model.defer="antecedente18" type="text" class="form-control" id="antecedente18" placeholder="Antecedente18"></div>
                                </div>
                                <div class="col-md-2">
                                  <div class="form-group">
                                    <input wire:model.defer="tratamiento18" type="text" class="form-control" id="tratamiento18" placeholder="Tratamiento18">
                                  </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="tiempo18" type="text" class="form-control" id="tiempo18" placeholder="Tiempo18">
                                    </div>
                                  </div>
                                  <div class="col-md-2">
                                    <div class="form-group">
                                        <input wire:model.defer="parentesco18" type="text" class="form-control" id="parentesco18" placeholder="Parentesco18">
                                    </div>
                                  </div>
                            </div>
                        </div>
                        {{-- tab datos de Evaluación --}}

                        {{-- tab datos de Medicamentos --}}
                        <div class="tab-pane fade" id="medicamentos" role="tabpanel" aria-labelledby="medicamentos-tab">

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">¿Le han aplicado anestesia en boca? <br> ¿Presentó alguna reacción: mareo, taquicardia o alguna otra?</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="pregunta1" type="radio" class="form-check-input" id="pregunta1" name="pregunta1" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="pregunta1" type="radio" class="form-check-input" id="pregunta1" name="pregunta1" value="0"> <br><br>

                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="pregunta2" type="radio" class="form-check-input" id="pregunta2" name="pregunta2" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="pregunta2" type="radio" class="form-check-input" id="pregunta2" name="pregunta2" value="0">

                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <input wire:model.defer="descripcion1" type="text" class="form-control" id="descripcion1" placeholder="descripcion1">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">¿Cuándo fue la última revisón dental? y ¿para qué fue?</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="pregunta3" type="radio" class="form-check-input" id="pregunta3" name="pregunta3" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="pregunta3" type="radio" class="form-check-input" id="pregunta3" name="pregunta3" value="0">

                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <input wire:model.defer="descripcion3" type="text" class="form-control" id="descripcion3" placeholder="descripcion3">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">¿Presenta sensibilidad dental al frío o calor?</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="pregunta4" type="radio" class="form-check-input" id="pregunta4" name="pregunta4" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="pregunta4" type="radio" class="form-check-input" id="pregunta4" name="pregunta4" value="0">

                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <input wire:model.defer="descripcion4" type="text" class="form-control" id="descripcion4" placeholder="descripcion4">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">¿Siente mal aliento, aún cepillándose?</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="pregunta6" type="radio" class="form-check-input" id="pregunta6" name="pregunta6" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="pregunta6" type="radio" class="form-check-input" id="pregunta6" name="pregunta6" value="0">

                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <input wire:model.defer="descripcion6" type="text" class="form-control" id="descripcion6" placeholder="descripcion6">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">¿Presenta sagrado al realizar el cepillo?</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="pregunta7" type="radio" class="form-check-input" id="pregunta7" name="pregunta7" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="pregunta7" type="radio" class="form-check-input" id="pregunta7" name="pregunta7" value="0">

                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <input wire:model.defer="descripcion7" type="text" class="form-control" id="descripcion7" placeholder="descripcion7">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">¿Usa pasta, enjuague, hilo dental?</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">P</label>
                                    <input wire:model.defer="pregunta8" type="radio" class="form-check-input" id="pregunta8" name="pregunta8" value="1">
                                    <label class="form-check-label" for="">E</label>
                                    <input wire:model.defer="pregunta9" type="radio" class="form-check-input" id="pregunta9" name="pregunta9" value="1">
                                    <label class="form-check-label" for="">H</label>
                                    <input wire:model.defer="pregunta10" type="radio" class="form-check-input" id="pregunta10" name="pregunta10" value="1">

                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <input wire:model.defer="descripcion8" type="text" class="form-control" id="descripcion8" placeholder="descripcion8">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">¿Siente movilidad en algún diente?</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="pregunta11" type="radio" class="form-check-input" id="pregunta11" name="pregunta11" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="pregunta11" type="radio" class="form-check-input" id="pregunta11" name="pregunta11" value="0">

                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <input wire:model.defer="descripcion9" type="text" class="form-control" id="descripcion9" placeholder="descripcion9">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">¿Al dormir rechina o aprieta los dientes: bruxismo?</label>
                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-check form-check-inline form-check-inline">
                                    <label class="form-check-label" for="">Si</label>
                                    <input wire:model.defer="pregunta12" type="radio" class="form-check-input" id="pregunta12" name="pregunta12" value="1">

                                    <label class="form-check-label" for="">No</label>
                                    <input wire:model.defer="pregunta12" type="radio" class="form-check-input" id="pregunta12" name="pregunta12" value="0">

                                  </div>
                                </div>
                                <div class="col-md-3">
                                  <div class="form-group">
                                    <input wire:model.defer="descripcion10" type="text" class="form-control" id="descripcion10" placeholder="descripcion10">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Antecedentes dentales</label>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input wire:model.defer="pregunta13" type="text" class="form-control" id="pregunta13" placeholder="pregunta13">
                                  </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label class="form-control-label" for="example3cols1Input">Medicamentos que consume</label>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <input wire:model.defer="medicamentos" type="text" class="form-control" id="medicamentos" placeholder="medicamentos">
                                  </div>
                                </div>
                            </div>

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
