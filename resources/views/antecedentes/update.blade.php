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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols2Input">Si/No</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols3Input">Observaciones</label>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones1" type="text" class="form-control" id="Observaciones1"
                                            placeholder="Observaciones1" value="{{$row->Observaciones1}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones2" type="text" class="form-control" id="Observaciones2"
                                            placeholder="Observaciones2" value="{{$row->Observaciones2}}">
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
                                                value="1" checked> <br>
                                            @else
                                            <input type="radio" class="form-check-input" id="varicela" name="varicela"
                                                value="1"> <br>
                                            @endif
                                            <label class="form-check-label" for="">Sara.</label>
                                            @if ($row->sarampion == '1')
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1" checked> <br>
                                            @else
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1"> <br>
                                            @endif
                                            <label class="form-check-label" for="">Rub.</label>
                                            @if ($row->sarampion == '1')
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1" checked> <br>
                                            @else
                                            <input type="radio" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1"> <br>
                                            @endif
                                            <label class="form-check-label" for="">Esc.</label>
                                            @if ($row->escarlatina == '1')
                                            <input type="radio" class="form-check-input" id="escarlatina"
                                                name="escarlatina" value="1" checked> <br>
                                            @else
                                            <input type="radio" class="form-check-input" id="escarlatina"
                                                name="escarlatina" value="1"> <br>
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones3" type="text" class="form-control" id="Observaciones3"
                                            placeholder="Observaciones3" value="{{$row->Observaciones3}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones4" type="text" class="form-control" id="Observaciones4"
                                            placeholder="Observaciones4" value="{{$row->Observaciones4}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones5" type="text" class="form-control" id="Observaciones5"
                                            placeholder="Observaciones5" value="{{$row->Observaciones5}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones6" type="text" class="form-control" id="Observaciones6"
                                            placeholder="Observaciones6" value="{{$row->Observaciones6}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones7" type="text" class="form-control" id="Observaciones7"
                                            placeholder="Observaciones7" value="{{$row->Observaciones7}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones8" type="text" class="form-control" id="Observaciones8"
                                            placeholder="Observaciones8" value="{{$row->Observaciones8}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones9" type="text" class="form-control" id="Observaciones9"
                                            placeholder="Observaciones9" value="{{$row->Observaciones9}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones10" type="text" class="form-control" id="Observaciones10"
                                            placeholder="Observaciones10" value="{{$row->Observaciones10}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones11" type="text" class="form-control" id="Observaciones11"
                                            placeholder="Observaciones11" value="{{$row->Observaciones11}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones12" type="text" class="form-control" id="Observaciones12"
                                            placeholder="Observaciones12" value="{{$row->Observaciones12}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones13" type="text" class="form-control" id="Observaciones13"
                                            placeholder="Observaciones13" value="{{$row->Observaciones13}}">
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
                                            <input type="checkbox" class="form-check-input" id="covid" name="covid"
                                                value="1" checked><br>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="covid" name="covid"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">Influ.</label>
                                            @if ($row->influenza == '1')
                                            <input type="checkbox" class="form-check-input" id="influenza" name="influenza"
                                                value="1" checked><br>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="influenza" name="influenza"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">EPOC</label>
                                            @if ($row->epoc == '1')
                                            <input type="checkbox" class="form-check-input" id="epoc" name="epoc" value="1"
                                                checked><br>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="sarampion" name="sarampion"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">Asma</label>
                                            @if ($row->asma == '1')
                                            <input type="checkbox" class="form-check-input" id="asma" name="asma" value="1"
                                                checked><br>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="asma" name="asma"
                                                value="1"><br>
                                            @endif
                                            <label class="form-check-label" for="">Asma</label>
                                            @if ($row->otras_res == '1')
                                            <input type="checkbox" class="form-check-input" id="otras_res" name="otras_res"
                                                value="1" checked><br>
                                            @else
                                            <input type="checkbox" class="form-check-input" id="otras_res" name="otras_res"
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones14" type="text" class="form-control" id="Observaciones14"
                                            placeholder="Observaciones14" value="{{$row->Observaciones14}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones15" type="text" class="form-control" id="Observaciones15"
                                            placeholder="Observaciones15" value="{{$row->Observaciones15}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones16" type="text" class="form-control" id="Observaciones16"
                                            placeholder="Observaciones16" value="{{$row->Observaciones16}}">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="Observaciones17" type="text" class="form-control" id="Observaciones17"
                                            placeholder="Observaciones17" value="{{$row->Observaciones17}}">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="antecedente18" type="text" class="form-control" id="antecedente18"
                                            placeholder="Antecedente18"value="{{$row->antecedente18}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="Observaciones18" type="text" class="form-control" id="Observaciones18"
                                            placeholder="Observaciones18" value="{{$row->Observaciones18}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="Talla">Talla</label>
                                        <input name="talla" type="text" class="form-control" id="talla" value="{{$row->talla}}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="Peso">Peso</label>
                                        <input name="peso" type="text" class="form-control" id="peso" value="{{$row->peso}}">
                                    </div>
                                </div>

                            </div>

                        </div>
                        {{-- tab datos de Evaluación --}}

                        {{-- tab datos de Medicamentos{{$row->id}} --}}
                        <div class="tab-pane fade" id="medicamentos{{$row->id}}" role="tabpanel"
                            aria-labelledby="medicamentos-tab{{$row->id}}">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Le han aplicado
                                            anestesia en boca?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="descripcion1" type="text" class="form-control" id="descripcion1"
                                            placeholder="descripcion" value="{{$row->descripcion1}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input"><br> ¿Presentó alguna
                                            reacción: mareo, taquicardia o alguna otra?</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Cuándo fue la última
                                            revisón dental? y ¿para qué fue?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="descripcion3" type="text" class="form-control" id="descripcion3"
                                            placeholder="descripcion3" value="{{$row->descripcion3}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Presenta
                                            sensibilidad dental al frío o calor?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="descripcion4" type="text" class="form-control" id="descripcion4"
                                            placeholder="descripcion4" value="{{$row->descripcion4}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Siente mal aliento,
                                            aún cepillándose?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="descripcion6" type="text" class="form-control" id="descripcion6"
                                            placeholder="descripcion6" value="{{$row->descripcion6}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Presenta sagrado al
                                            realizar el cepillo?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="descripcion7" type="text" class="form-control" id="descripcion7"
                                            placeholder="descripcion7" value="{{$row->descripcion7}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Usa pasta, enjuague,
                                            hilo dental?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check form-check-inline form-check-inline">
                                        <label class="form-check-label" for="">P.</label>
                                        @if ($row->pregunta8 == '1')
                                        <input type="checkbox" class="form-check-input" id="pregunta8" name="pregunta8"
                                            value="1" checked><br>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="pregunta8" name="pregunta8"
                                            value="1"><br>
                                        @endif
                                        <label class="form-check-label" for="">E.</label>
                                        @if ($row->pregunta9 == '1')
                                        <input type="checkbox" class="form-check-input" id="pregunta9" name="pregunta9"
                                            value="1" checked><br>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="pregunta9" name="pregunta9"
                                            value="1"><br>
                                        @endif
                                        <label class="form-check-label" for="">H</label>
                                        @if ($row->pregunta10 == '1')
                                        <input type="checkbox" class="form-check-input" id="pregunta10" name="pregunta10"
                                            value="1" checked><br>
                                        @else
                                        <input type="checkbox" class="form-check-input" id="pregunta10" name="pregunta10"
                                            value="1"><br>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="descripcion8" type="text" class="form-control" id="descripcion8"
                                            placeholder="descripcion8" value="{{$row->descripcion8}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Siente movilidad en
                                            algún diente?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="descripcion9" type="text" class="form-control" id="descripcion9"
                                            placeholder="descripcion9" value="{{$row->descripcion9}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">¿Al dormir rechina o
                                            aprieta los dientes: bruxismo?</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="descripcion10" type="text" class="form-control" id="descripcion10"
                                            placeholder="descripcion10" value="{{$row->descripcion10}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Antecedentes
                                            dentales</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input name="pregunta13" type="text" class="form-control" id="pregunta13"
                                            placeholder="pregunta13" value="{{$row->pregunta13}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="example3cols1Input">Medicamentos que
                                            consume</label>
                                    </div>
                                </div>
                                <div class="col-md-8">
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
