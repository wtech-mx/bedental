<!-- Modal -->
<div class="modal fade" id="updateModalAntecedentes{{$row->id}}" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Historial Clinffico</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{ route('antecedentes.update', $row->id) }}" enctype="multipart/form-data"
                role="form">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="modal-body">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="evaluacion-tab{{$row->id}}" data-toggle="tab"
                                    href="#evaluacion{{$row->id}}" role="tab" aria-controls="evaluacion{{$row->id}}"
                                    aria-selected="true">Ant. Patologicos y no Patologicos</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="medicamentos-tab{{$row->id}}" data-toggle="tab"
                                    href="#medicamentos{{$row->id}}" role="tab" aria-controls="medicamentos{{$row->id}}"
                                    aria-selected="false">Evaluación Oral</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link" id="radiografico-tab{{$row->id}}" data-toggle="tab"
                                    href="#radiografico{{$row->id}}" role="tab" aria-controls="radiografico{{$row->id}}"
                                    aria-selected="false">Historial radiografíco</a>
                            </li> --}}
                        </ul>
                    </div>


                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="evaluacion{{$row->id}}" role="tabpanel"
                            aria-labelledby="evaluacion-tab{{$row->id}}">

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
                                        <label class="form-control-label" for="example3cols3Input">Tiempo de
                                            evo.</label>
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
                                        @if ($row->antecedente1 == '1')
                                        <input name="antecedente1" type="radio" class="form-check-input"
                                            id="antecedente1" name="antecedente1" value="1" checked>
                                        @else
                                        <input name="antecedente1" type="radio" class="form-check-input"
                                            id="antecedente1" name="antecedente1" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente1 == '0')
                                        <input name="antecedente1" type="radio" class="form-check-input"
                                            id="antecedente1" name="antecedente1" value="0" checked>
                                        @else
                                        <input name="antecedente1" type="radio" class="form-check-input"
                                            id="antecedente1" name="antecedente1" value="0">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento1" type="text" class="form-control" id="tratamiento1"
                                            placeholder="Tratamiento1" value="{{$row->tratamiento1}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo1" type="text" class="form-control" id="tiempo1"
                                            placeholder="Tiempo1" value="{{$row->tiempo1}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco1" type="text" class="form-control" id="parentesco1"
                                            placeholder="Parentesco1" value="{{$row->parentesco1}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Diabetes
                                            Melijtus</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente2 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente2"
                                            name="antecedente2" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente2"
                                            name="antecedente2" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente2 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente2"
                                            name="antecedente2" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente2"
                                            name="antecedente2" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento2" type="text" class="form-control" id="tratamiento2"
                                            placeholder="Tratamiento2" value="{{$row->tratamiento2}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo2" type="text" class="form-control" id="tiempo2"
                                            placeholder="Tiempo2" value="{{$row->tiempo2}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco2" type="text" class="form-control" id="parentesco2"
                                            placeholder="Parentesco2" value="{{$row->parentesco2}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check form-check-inline">
                                        <label class="form-control-label" for="example3cols1Input">Enfermedades virales
                                            <br>
                                            <label class="form-check-label" for="">Var.</label>
                                            @if ($row->varicela == '1')
                                            <input type="radio" class="form-check-input" id="varicela" name="varicela"
                                                value="1" checked>
                                            @else
                                            <input type="radio" class="form-check-input" id="varicela" name="varicela"
                                                value="1">
                                            @endif
                                            <label class="form-check-label" for="">Sara.</label>
                                            @if ($row->sarampion == '1')
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1" checked>
                                            @else
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1">
                                            @endif
                                            <label class="form-check-label" for="">Rub.</label>
                                            @if ($row->sarampion == '1')
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1" checked>
                                            @else
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1">
                                            @endif
                                            <label class="form-check-label" for="">Esc.</label>
                                            @if ($row->escarlatina == '1')
                                            <input type="radio" class="form-check-input" id="escarlatina"
                                                name="escarlatina" value="1" checked>
                                            @else
                                            <input type="radio" class="form-check-input" id="escarlatina"
                                                name="escarlatina" value="1">
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente3 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente3"
                                            name="antecedente3" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente3"
                                            name="antecedente3" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente3 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente3"
                                            name="antecedente3" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente3"
                                            name="antecedente3" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento3" type="text" class="form-control" id="tratamiento3"
                                            placeholder="Tratamiento3" value="{{$row->tratamiento3}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo3" type="text" class="form-control" id="tiempo3"
                                            placeholder="Tiempo3" value="{{$row->tiempo3}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco3" type="text" class="form-control" id="parentesco3"
                                            placeholder="Parentesco3" value="{{$row->parentesco3}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Problemas
                                            cardiacos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente4 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente4"
                                            name="antecedente4" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente4"
                                            name="antecedente4" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente4 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente4"
                                            name="antecedente4" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente4"
                                            name="antecedente4" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento4" type="text" class="form-control" id="tratamiento4"
                                            placeholder="Tratamiento4" value="{{$row->tratamiento4}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo4" type="text" class="form-control" id="tiempo4"
                                            placeholder="Tiempo4" value="{{$row->tiempo4}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco4" type="text" class="form-control" id="parentesco4"
                                            placeholder="Parentesco4" value="{{$row->parentesco4}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Artritis
                                            reumatoide</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente5 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente5"
                                            name="antecedente5" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente5"
                                            name="antecedente5" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente5 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente5"
                                            name="antecedente5" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente5"
                                            name="antecedente5" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento5" type="text" class="form-control" id="tratamiento5"
                                            placeholder="Tratamiento5" value="{{$row->tratamiento5}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo5" type="text" class="form-control" id="tiempo5"
                                            placeholder="Tiempo5" value="{{$row->tiempo5}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco5" type="text" class="form-control" id="parentesco5"
                                            placeholder="Parentesco5" value="{{$row->parentesco5}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Fiebre
                                            reumática</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente6 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente6"
                                            name="antecedente6" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente6"
                                            name="antecedente6" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente6 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente6"
                                            name="antecedente6" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente6"
                                            name="antecedente6" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento6" type="text" class="form-control" id="tratamiento6"
                                            placeholder="Tratamiento6" value="{{$row->tratamiento6}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo6" type="text" class="form-control" id="tiempo6"
                                            placeholder="Tiempo6" value="{{$row->tiempo6}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco6" type="text" class="form-control" id="parentesco6"
                                            placeholder="Parentesco6" value="{{$row->parentesco6}}">
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
                                        @if ($row->antecedente7 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente7"
                                            name="antecedente7" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente7"
                                            name="antecedente7" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente7 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente7"
                                            name="antecedente7" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente7"
                                            name="antecedente7" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento7" type="text" class="form-control" id="tratamiento7"
                                            placeholder="Tratamiento7" value="{{$row->tratamiento7}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo7" type="text" class="form-control" id="tiempo7"
                                            placeholder="Tiempo7" value="{{$row->tiempo7}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco7" type="text" class="form-control" id="parentesco7"
                                            placeholder="Parentesco7" value="{{$row->parentesco7}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Problemas
                                            tiroideos</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente8 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente8"
                                            name="antecedente8" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente8"
                                            name="antecedente8" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente8 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente8"
                                            name="antecedente8" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente8"
                                            name="antecedente8" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento8" type="text" class="form-control" id="tratamiento8"
                                            placeholder="Tratamiento8" value="{{$row->tratamiento8}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo8" type="text" class="form-control" id="tiempo8"
                                            placeholder="Tiempo8" value="{{$row->tiempo8}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco8" type="text" class="form-control" id="parentesco8"
                                            placeholder="Parentesco8" value="{{$row->parentesco8}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Presión alta o
                                            baja</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente9 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente9"
                                            name="antecedente9" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente9"
                                            name="antecedente9" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente9 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente9"
                                            name="antecedente9" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente9"
                                            name="antecedente9" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento9" type="text" class="form-control" id="tratamiento9"
                                            placeholder="Tratamiento9" value="{{$row->tratamiento9}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo9" type="text" class="form-control" id="tiempo9"
                                            placeholder="Tiempo9" value="{{$row->tiempo9}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco9" type="text" class="form-control" id="parentesco9"
                                            placeholder="Parentesco9" value="{{$row->parentesco9}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Desmayos
                                            frecuentes</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente10 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente10"
                                            name="antecedente10" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente10"
                                            name="antecedente10" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente10 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente10"
                                            name="antecedente10" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente10"
                                            name="antecedente10" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento10" type="text" class="form-control" id="tratamiento10"
                                            placeholder="Tratamiento10" value="{{$row->tratamiento10}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo10" type="text" class="form-control" id="tiempo10"
                                            placeholder="Tiempo10" value="{{$row->tiempo10}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco10" type="text" class="form-control" id="parentesco10"
                                            placeholder="Parentesco10" value="{{$row->parentesco10}}">
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
                                        @if ($row->antecedente11 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente11"
                                            name="antecedente11" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente11"
                                            name="antecedente11" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente11 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente11"
                                            name="antecedente11" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente11"
                                            name="antecedente11" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento11" type="text" class="form-control" id="tratamiento11"
                                            placeholder="Tratamiento11" value="{{$row->tratamiento11}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo11" type="text" class="form-control" id="tiempo11"
                                            placeholder="Tiempo11" value="{{$row->tiempo11}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco11" type="text" class="form-control" id="parentesco11"
                                            placeholder="Parentesco11" value="{{$row->parentesco11}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-check-inline">
                                        <label class="form-control-label" for="example3cols1Input">Enf. transmisión
                                            sexual <br>
                                            <label class="form-check-label" for="">VIH</label>
                                            @if ($row->vih == '1')
                                            <input type="radio" class="form-check-input" id="vih" name="vih" value="1"
                                                checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="vih" name="vih"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">Hepa.</label>
                                            @if ($row->hepatitis == '1')
                                            <input type="radio" class="form-check-input" id="hepatitis" name="hepatitis"
                                                value="1" checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="hepatitis" name="hepatitis"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">VPH</label>
                                            @if ($row->vph == '1')
                                            <input type="radio" class="form-check-input" id="vph" name="vph" value="1"
                                                checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">Otras</label>
                                            @if ($row->otras_tran == '1')
                                            <input type="radio" class="form-check-input" id="otras_tran"
                                                name="otras_tran" value="1" checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="otras_tran"
                                                name="otras_tran" value="1"><br>
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente12 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente12"
                                            name="antecedente12" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente12"
                                            name="antecedente12" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente12 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente12"
                                            name="antecedente12" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente12"
                                            name="antecedente12" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento12" type="text" class="form-control" id="tratamiento12"
                                            placeholder="Tratamiento12" value="{{$row->tratamiento12}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo12" type="text" class="form-control" id="tiempo12"
                                            placeholder="Tiempo12" value="{{$row->tiempo12}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco12" type="text" class="form-control" id="parentesco12"
                                            placeholder="Parentesco12" value="{{$row->parentesco12}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Operaciones en el
                                            cuerpo</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente13 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente13"
                                            name="antecedente13" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente13"
                                            name="antecedente13" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente13 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente13"
                                            name="antecedente13" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente13"
                                            name="antecedente13" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento13" type="text" class="form-control" id="tratamiento13"
                                            placeholder="Tratamiento13" value="{{$row->tratamiento13}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo13" type="text" class="form-control" id="tiempo13"
                                            placeholder="Tiempo13" value="{{$row->tiempo13}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco13" type="text" class="form-control" id="parentesco13"
                                            placeholder="Parentesco13" value="{{$row->parentesco13}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group form-check-inline">
                                        <label class="form-control-label" for="example3cols1Input">Problemas
                                            respiratorios <br>
                                            <label class="form-check-label" for="">Covid19</label>
                                            @if ($row->covid == '1')
                                            <input type="radio" class="form-check-input" id="covid" name="covid"
                                                value="1" checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="covid" name="covid"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">Influ.</label>
                                            @if ($row->influenza == '1')
                                            <input type="radio" class="form-check-input" id="influenza" name="influenza"
                                                value="1" checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="influenza" name="influenza"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">EPOC</label>
                                            @if ($row->epoc == '1')
                                            <input type="radio" class="form-check-input" id="epoc" name="epoc" value="1"
                                                checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">Asma</label>
                                            @if ($row->asma == '1')
                                            <input type="radio" class="form-check-input" id="asma" name="asma" value="1"
                                                checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="asma" name="asma"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">Asma</label>
                                            @if ($row->otras_res == '1')
                                            <input type="radio" class="form-check-input" id="otras_res" name="otras_res"
                                                value="1" checked><br>
                                            @else
                                            <input type="radio" class="form-check-input" id="otras_res" name="otras_res"
                                                value="1"><br>
                                            @endif
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente14 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente14"
                                            name="antecedente14" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente14"
                                            name="antecedente14" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente14 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente14"
                                            name="antecedente14" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente14"
                                            name="antecedente14" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento14" type="text" class="form-control" id="tratamiento14"
                                            placeholder="Tratamiento14" value="{{$row->tratamiento14}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo14" type="text" class="form-control" id="tiempo14"
                                            placeholder="Tiempo14" value="{{$row->tiempo14}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco14" type="text" class="form-control" id="parentesco14"
                                            placeholder="Parentesco14" value="{{$row->parentesco14}}">
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
                                        @if ($row->antecedente15 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente15"
                                            name="antecedente15" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente15"
                                            name="antecedente15" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente15 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente15"
                                            name="antecedente15" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente15"
                                            name="antecedente15" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento15" type="text" class="form-control" id="tratamiento15"
                                            placeholder="Tratamiento15" value="{{$row->tratamiento15}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo15" type="text" class="form-control" id="tiempo15"
                                            placeholder="Tiempo15" value="{{$row->tiempo15}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco15" type="text" class="form-control" id="parentesco15"
                                            placeholder="Parentesco15" value="{{$row->parentesco15}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Tatuajes o
                                            perforaciones</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente16 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente16"
                                            name="antecedente16" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente16"
                                            name="antecedente16" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente16 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente16"
                                            name="antecedente16" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente16"
                                            name="antecedente16" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento16" type="text" class="form-control" id="tratamiento16"
                                            placeholder="Tratamiento16" value="{{$row->tratamiento16}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo16" type="text" class="form-control" id="tiempo16"
                                            placeholder="Tiempo16" value="{{$row->tiempo16}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco16" type="text" class="form-control" id="parentesco16"
                                            placeholder="Parentesco16" value="{{$row->parentesco16}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Cartilla de
                                            evaluación</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->antecedente17 == '1')
                                        <input type="radio" class="form-check-input" id="antecedente17"
                                            name="antecedente17" value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente17"
                                            name="antecedente17" value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->antecedente17 == '0')
                                        <input type="radio" class="form-check-input" id="antecedente17"
                                            name="antecedente17" value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="antecedente17"
                                            name="antecedente17" value="0">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento17" type="text" class="form-control" id="tratamiento17"
                                            placeholder="Tratamiento17" value="{{$row->tratamiento17}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo17" type="text" class="form-control" id="tiempo17"
                                            placeholder="Tiempo17" value="{{$row->tiempo17}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco17" type="text" class="form-control" id="parentesco17"
                                            placeholder="Parentesco17" value="{{$row->parentesco17}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Otra
                                            enfermedad</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="antecedente18" type="text" class="form-control" id="antecedente18"
                                            placeholder="Antecedente18">
                                    </div value="{{$row->antecedente18}}">
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tratamiento18" type="text" class="form-control" id="tratamiento18"
                                            placeholder="Tratamiento18" value="{{$row->tratamiento18}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="tiempo18" type="text" class="form-control" id="tiempo18"
                                            placeholder="Tiempo18" value="{{$row->tiempo18}}">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <input name="parentesco18" type="text" class="form-control" id="parentesco18"
                                            placeholder="Parentesco18" value="{{$row->parentesco18}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- tab datos de Evaluación --}}

                        {{-- tab datos de Medicamentos{{$row->id}} --}}
                        <div class="tab-pane fade" id="medicamentos{{$row->id}}" role="tabpanel"
                            aria-labelledby="medicamentos-tab{{$row->id}}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Le han aplicado
                                            anestesia en boca?</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->pregunta1 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta1" name="pregunta1"
                                            value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta1" name="pregunta1"
                                            value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->pregunta1 == '0')
                                        <input type="radio" class="form-check-input" id="pregunta1" name="pregunta1"
                                            value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta1" name="pregunta1"
                                            value="0">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input name="descripcion1" type="text" class="form-control" id="descripcion1"
                                            placeholder="descripcion" value="{{$row->descripcion1}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input"><br> ¿Presentó alguna
                                            reacción: mareo, taquicardia o alguna otra?</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->pregunta2 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta2" name="pregunta2"
                                            value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta2" name="pregunta2"
                                            value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->pregunta2 == '0')
                                        <input type="radio" class="form-check-input" id="pregunta2" name="pregunta2"
                                            value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta2" name="pregunta2"
                                            value="0">
                                        @endif

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Cuándo fue la última
                                            revisón dental? y ¿para qué fue?</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->pregunta3 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta3" name="pregunta3"
                                            value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta3" name="pregunta3"
                                            value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->pregunta3 == '0')
                                        <input type="radio" class="form-check-input" id="pregunta3" name="pregunta3"
                                            value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta3" name="pregunta3"
                                            value="0">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input name="descripcion3" type="text" class="form-control" id="descripcion3"
                                            placeholder="descripcion3" value="{{$row->descripcion3}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Presenta
                                            sensibilidad dental al frío o calor?</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->pregunta4 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta4" name="pregunta4"
                                            value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta4" name="pregunta4"
                                            value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->pregunta4 == '0')
                                        <input type="radio" class="form-check-input" id="pregunta4" name="pregunta4"
                                            value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta4" name="pregunta4"
                                            value="0">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input name="descripcion4" type="text" class="form-control" id="descripcion4"
                                            placeholder="descripcion4" value="{{$row->descripcion4}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Siente mal aliento,
                                            aún cepillándose?</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->pregunta6 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta6" name="pregunta6"
                                            value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta6" name="pregunta6"
                                            value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->pregunta6 == '0')
                                        <input type="radio" class="form-check-input" id="pregunta6" name="pregunta6"
                                            value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta6" name="pregunta6"
                                            value="0">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input name="descripcion6" type="text" class="form-control" id="descripcion6"
                                            placeholder="descripcion6" value="{{$row->descripcion6}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Presenta sagrado al
                                            realizar el cepillo?</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->pregunta7 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta7" name="pregunta7"
                                            value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta7" name="pregunta7"
                                            value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->pregunta7 == '0')
                                        <input type="radio" class="form-check-input" id="pregunta7" name="pregunta7"
                                            value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta7" name="pregunta7"
                                            value="0">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input name="descripcion7" type="text" class="form-control" id="descripcion7"
                                            placeholder="descripcion7" value="{{$row->descripcion7}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Usa pasta, enjuague,
                                            hilo dental?</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">P.</label>
                                        @if ($row->pregunta8 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta8" name="pregunta8"
                                            value="1" checked><br>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta8" name="pregunta8"
                                            value="1"><br>
                                        @endif
                                        <label class="form-check-label" for="">E.</label>
                                        @if ($row->pregunta9 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta9" name="pregunta9"
                                            value="1" checked><br>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta9" name="pregunta9"
                                            value="1"><br>
                                        @endif
                                        <label class="form-check-label" for="">H</label>
                                        @if ($row->pregunta10 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta10" name="pregunta10"
                                            value="1" checked><br>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta10" name="pregunta10"
                                            value="1"><br>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input name="descripcion8" type="text" class="form-control" id="descripcion8"
                                            placeholder="descripcion8" value="{{$row->descripcion8}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Siente movilidad en
                                            algún diente?</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->pregunta11 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta11" name="pregunta11"
                                            value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta11" name="pregunta11"
                                            value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->pregunta11 == '0')
                                        <input type="radio" class="form-check-input" id="pregunta11" name="pregunta11"
                                            value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta11" name="pregunta11"
                                            value="0">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input name="descripcion9" type="text" class="form-control" id="descripcion9"
                                            placeholder="descripcion9" value="{{$row->descripcion9}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Al dormir rechina o
                                            aprieta los dientes: bruxismo?</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">Si</label>
                                        @if ($row->pregunta12 == '1')
                                        <input type="radio" class="form-check-input" id="pregunta12" name="pregunta12"
                                            value="1" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta12" name="pregunta12"
                                            value="1">
                                        @endif
                                        <label class="form-check-label" for="">No</label>
                                        @if ($row->pregunta12 == '0')
                                        <input type="radio" class="form-check-input" id="pregunta12" name="pregunta12"
                                            value="0" checked>
                                        @else
                                        <input type="radio" class="form-check-input" id="pregunta12" name="pregunta12"
                                            value="0">
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input name="descripcion10" type="text" class="form-control" id="descripcion10"
                                            placeholder="descripcion10" value="{{$row->descripcion10}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Antecedentes
                                            dentales</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="pregunta13" type="text" class="form-control" id="pregunta13"
                                            placeholder="pregunta13" value="{{$row->pregunta13}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Medicamentos que
                                            consume</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="medicamentos" type="text" class="form-control" id="medicamentos"
                                            placeholder="medicamentos" value="{{$row->medicamentos}}">
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Historial radiografíco --}}
                        {{-- <div class="tab-pane fade" id="radiografico{{$row->id}}" role="tabpanel"
                            aria-labelledby="radiografico-tab{{$row->id}}">

                        </div> --}}
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
