@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">
                                <h5 class="modal-title" id="updateModalLabel">Actualizar Historial Clinffico</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('antecedentes.update', $antecedentes->id) }}" enctype="multipart/form-data"
                                    role="form">
                                    @csrf
                                    <input type="hidden" name="_method" value="PATCH">
                                    <div class="modal-body">
                                        <div class="d-flex justify-content-center">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                                <li class="nav-item">
                                                    <a class="nav-link active" id="evaluacion-tab{{$antecedentes->id}}" data-toggle="tab"
                                                        href="#evaluacion{{$antecedentes->id}}" role="tab" aria-controls="evaluacion{{$antecedentes->id}}"
                                                        aria-selected="true">Ant. Patologicos y no Patologicos</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" id="medicamentos-tab{{$antecedentes->id}}" data-toggle="tab"
                                                        href="#medicamentos{{$antecedentes->id}}" role="tab" aria-controls="medicamentos{{$antecedentes->id}}"
                                                        aria-selected="false">Evaluación Oral</a>
                                                </li>

                                                {{-- <li class="nav-item">
                                                    <a class="nav-link" id="radiografico-tab{{$antecedentes->id}}" data-toggle="tab"
                                                        href="#radiografico{{$antecedentes->id}}" role="tab" aria-controls="radiografico{{$antecedentes->id}}"
                                                        aria-selected="false">Historial radiografíco</a>
                                                </li> --}}
                                            </ul>
                                        </div>


                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="evaluacion{{$antecedentes->id}}" role="tabpanel"
                                                aria-labelledby="evaluacion-tab{{$antecedentes->id}}">

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
                                                            @if ($antecedentes->antecedente1 == '1')
                                                            <input name="antecedente1" type="radio" class="form-check-input"
                                                                id="antecedente1" name="antecedente1" value="1" checked>
                                                            @else
                                                            <input name="antecedente1" type="radio" class="form-check-input"
                                                                id="antecedente1" name="antecedente1" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente1 == '0')
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
                                                                placeholder="Observaciones1" value="{{$antecedentes->Observaciones1}}">
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
                                                            @if ($antecedentes->antecedente2 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente2"
                                                                name="antecedente2" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente2"
                                                                name="antecedente2" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente2 == '0')
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
                                                                placeholder="Observaciones2" value="{{$antecedentes->Observaciones2}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-control-label" for="example3cols1Input">Enfermedades virales
                                                                <br>
                                                                <label class="form-check-label" for="">Var.</label>
                                                                @if ($antecedentes->varicela == '1')
                                                                <input type="checkbox" class="form-check-input" id="varicela" name="varicela"
                                                                    value="1" checked> <br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="varicela" name="varicela"
                                                                    value="1"> <br>
                                                                @endif
                                                                <label class="form-check-label" for="">Sara.</label>
                                                                @if ($antecedentes->sarampion == '1')
                                                                <input type="checkbox" class="form-check-input" id="sarampion" name="sarampion"
                                                                    value="1" checked> <br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="sarampion" name="sarampion"
                                                                    value="1"> <br>
                                                                @endif
                                                                <label class="form-check-label" for="">Rub.</label>
                                                                @if ($antecedentes->sarampion == '1')
                                                                <input type="checkbox" class="form-check-input" id="sarampion" name="sarampion"
                                                                    value="1" checked> <br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="sarampion" name="sarampion"
                                                                    value="1"> <br>
                                                                @endif
                                                                <label class="form-check-label" for="">Esc.</label>
                                                                @if ($antecedentes->escarlatina == '1')
                                                                <input type="checkbox" class="form-check-input" id="escarlatina"
                                                                    name="escarlatina" value="1" checked> <br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="escarlatina"
                                                                    name="escarlatina" value="1"> <br>
                                                                @endif
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label" for="">Si</label>
                                                            @if ($antecedentes->antecedente3 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente3"
                                                                name="antecedente3" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente3"
                                                                name="antecedente3" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente3 == '0')
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
                                                                placeholder="Observaciones3" value="{{$antecedentes->Observaciones3}}">
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
                                                            @if ($antecedentes->antecedente4 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente4"
                                                                name="antecedente4" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente4"
                                                                name="antecedente4" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente4 == '0')
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
                                                                placeholder="Observaciones4" value="{{$antecedentes->Observaciones4}}">
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
                                                            @if ($antecedentes->antecedente5 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente5"
                                                                name="antecedente5" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente5"
                                                                name="antecedente5" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente5 == '0')
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
                                                                placeholder="Observaciones5" value="{{$antecedentes->Observaciones5}}">
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
                                                            @if ($antecedentes->antecedente6 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente6"
                                                                name="antecedente6" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente6"
                                                                name="antecedente6" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente6 == '0')
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
                                                                placeholder="Observaciones6" value="{{$antecedentes->Observaciones6}}">
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
                                                            @if ($antecedentes->antecedente7 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente7"
                                                                name="antecedente7" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente7"
                                                                name="antecedente7" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente7 == '0')
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
                                                                placeholder="Observaciones7" value="{{$antecedentes->Observaciones7}}">
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
                                                            @if ($antecedentes->antecedente8 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente8"
                                                                name="antecedente8" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente8"
                                                                name="antecedente8" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente8 == '0')
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
                                                                placeholder="Observaciones8" value="{{$antecedentes->Observaciones8}}">
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
                                                            @if ($antecedentes->antecedente9 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente9"
                                                                name="antecedente9" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente9"
                                                                name="antecedente9" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente9 == '0')
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
                                                                placeholder="Observaciones9" value="{{$antecedentes->Observaciones9}}">
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
                                                            @if ($antecedentes->antecedente10 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente10"
                                                                name="antecedente10" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente10"
                                                                name="antecedente10" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente10 == '0')
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
                                                                placeholder="Observaciones10" value="{{$antecedentes->Observaciones10}}">
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
                                                            @if ($antecedentes->antecedente11 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente11"
                                                                name="antecedente11" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente11"
                                                                name="antecedente11" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente11 == '0')
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
                                                                placeholder="Observaciones11" value="{{$antecedentes->Observaciones11}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group form-check-inline">
                                                            <label class="form-control-label" for="example3cols1Input">Enf. transmisión
                                                                sexual <br>
                                                                <label class="form-check-label" for="">VIH</label>
                                                                @if ($antecedentes->vih == '1')
                                                                <input type="checkbox" class="form-check-input" id="vih" name="vih" value="1"
                                                                    checked><br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="vih" name="vih"
                                                                    value="1"><br>
                                                                @endif
                                                                <label class="form-check-label" for="">Hepa.</label>
                                                                @if ($antecedentes->hepatitis == '1')
                                                                <input type="checkbox" class="form-check-input" id="hepatitis" name="hepatitis"
                                                                    value="1" checked><br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="hepatitis" name="hepatitis"
                                                                    value="1"><br>
                                                                @endif
                                                                <label class="form-check-label" for="">VPH</label>
                                                                @if ($antecedentes->vph == '1')
                                                                <input type="checkbox" class="form-check-input" id="vph" name="vph" value="1"
                                                                    checked><br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="sarampion" name="sarampion"
                                                                    value="1"><br>
                                                                @endif
                                                                <label class="form-check-label" for="">Otras</label>
                                                                @if ($antecedentes->otras_tran == '1')
                                                                <input type="checkbox" class="form-check-input" id="otras_tran"
                                                                    name="otras_tran" value="1" checked><br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="otras_tran"
                                                                    name="otras_tran" value="1"><br>
                                                                @endif
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group form-check-inline">
                                                            <label class="form-check-label" for="">Si</label>
                                                            @if ($antecedentes->antecedente12 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente12"
                                                                name="antecedente12" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente12"
                                                                name="antecedente12" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente12 == '0')
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
                                                                placeholder="Observaciones12" value="{{$antecedentes->Observaciones12}}">
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
                                                            @if ($antecedentes->antecedente13 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente13"
                                                                name="antecedente13" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente13"
                                                                name="antecedente13" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente13 == '0')
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
                                                                placeholder="Observaciones13" value="{{$antecedentes->Observaciones13}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group form-check-inline">
                                                            <label class="form-control-label" for="example3cols1Input">Problemas
                                                                respiratorios <br>
                                                                <label class="form-check-label" for="">Covid19</label>
                                                                @if ($antecedentes->covid == '1')
                                                                <input type="checkbox" class="form-check-input" id="covid" name="covid"
                                                                    value="1" checked><br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="covid" name="covid"
                                                                    value="1"><br>
                                                                @endif
                                                                <label class="form-check-label" for="">Influ.</label>
                                                                @if ($antecedentes->influenza == '1')
                                                                <input type="checkbox" class="form-check-input" id="influenza" name="influenza"
                                                                    value="1" checked><br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="influenza" name="influenza"
                                                                    value="1"><br>
                                                                @endif
                                                                <label class="form-check-label" for="">EPOC</label>
                                                                @if ($antecedentes->epoc == '1')
                                                                <input type="checkbox" class="form-check-input" id="epoc" name="epoc" value="1"
                                                                    checked><br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="sarampion" name="sarampion"
                                                                    value="1"><br>
                                                                @endif
                                                                <label class="form-check-label" for="">Asma</label>
                                                                @if ($antecedentes->asma == '1')
                                                                <input type="checkbox" class="form-check-input" id="asma" name="asma" value="1"
                                                                    checked><br>
                                                                @else
                                                                <input type="checkbox" class="form-check-input" id="asma" name="asma"
                                                                    value="1"><br>
                                                                @endif
                                                                <label class="form-check-label" for="">Asma</label>
                                                                @if ($antecedentes->otras_res == '1')
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
                                                            @if ($antecedentes->antecedente14 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente14"
                                                                name="antecedente14" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente14"
                                                                name="antecedente14" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente14 == '0')
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
                                                                placeholder="Observaciones14" value="{{$antecedentes->Observaciones14}}">
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
                                                            @if ($antecedentes->antecedente15 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente15"
                                                                name="antecedente15" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente15"
                                                                name="antecedente15" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente15 == '0')
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
                                                                placeholder="Observaciones15" value="{{$antecedentes->Observaciones15}}">
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
                                                            @if ($antecedentes->antecedente16 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente16"
                                                                name="antecedente16" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente16"
                                                                name="antecedente16" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente16 == '0')
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
                                                                placeholder="Observaciones16" value="{{$antecedentes->Observaciones16}}">
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
                                                            @if ($antecedentes->antecedente17 == '1')
                                                            <input type="radio" class="form-check-input" id="antecedente17"
                                                                name="antecedente17" value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="antecedente17"
                                                                name="antecedente17" value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->antecedente17 == '0')
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
                                                                placeholder="Observaciones17" value="{{$antecedentes->Observaciones17}}">
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
                                                                placeholder="Antecedente18"value="{{$antecedentes->antecedente18}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input name="Observaciones18" type="text" class="form-control" id="Observaciones18"
                                                                placeholder="Observaciones18" value="{{$antecedentes->Observaciones18}}">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="Talla">Talla</label>
                                                            <input name="talla" type="text" class="form-control" id="talla" value="{{$antecedentes->talla}}">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="Peso">Peso</label>
                                                            <input name="peso" type="text" class="form-control" id="peso" value="{{$antecedentes->peso}}">
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            {{-- tab datos de Evaluación --}}

                                            {{-- tab datos de Medicamentos{{$antecedentes->id}} --}}
                                            <div class="tab-pane fade" id="medicamentos{{$antecedentes->id}}" role="tabpanel"
                                                aria-labelledby="medicamentos-tab{{$antecedentes->id}}">

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
                                                            @if ($antecedentes->pregunta1 == '1')
                                                            <input type="radio" class="form-check-input" id="pregunta1" name="pregunta1"
                                                                value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="pregunta1" name="pregunta1"
                                                                value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->pregunta1 == '0')
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
                                                                placeholder="descripcion" value="{{$antecedentes->descripcion1}}">
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
                                                            @if ($antecedentes->pregunta2 == '1')
                                                            <input type="radio" class="form-check-input" id="pregunta2" name="pregunta2"
                                                                value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="pregunta2" name="pregunta2"
                                                                value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->pregunta2 == '0')
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
                                                            @if ($antecedentes->pregunta3 == '1')
                                                            <input type="radio" class="form-check-input" id="pregunta3" name="pregunta3"
                                                                value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="pregunta3" name="pregunta3"
                                                                value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->pregunta3 == '0')
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
                                                                placeholder="descripcion3" value="{{$antecedentes->descripcion3}}">
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
                                                            @if ($antecedentes->pregunta4 == '1')
                                                            <input type="radio" class="form-check-input" id="pregunta4" name="pregunta4"
                                                                value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="pregunta4" name="pregunta4"
                                                                value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->pregunta4 == '0')
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
                                                                placeholder="descripcion4" value="{{$antecedentes->descripcion4}}">
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
                                                            @if ($antecedentes->pregunta6 == '1')
                                                            <input type="radio" class="form-check-input" id="pregunta6" name="pregunta6"
                                                                value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="pregunta6" name="pregunta6"
                                                                value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->pregunta6 == '0')
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
                                                                placeholder="descripcion6" value="{{$antecedentes->descripcion6}}">
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
                                                            @if ($antecedentes->pregunta7 == '1')
                                                            <input type="radio" class="form-check-input" id="pregunta7" name="pregunta7"
                                                                value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="pregunta7" name="pregunta7"
                                                                value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->pregunta7 == '0')
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
                                                                placeholder="descripcion7" value="{{$antecedentes->descripcion7}}">
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
                                                            @if ($antecedentes->pregunta8 == '1')
                                                            <input type="checkbox" class="form-check-input" id="pregunta8" name="pregunta8"
                                                                value="1" checked><br>
                                                            @else
                                                            <input type="checkbox" class="form-check-input" id="pregunta8" name="pregunta8"
                                                                value="1"><br>
                                                            @endif
                                                            <label class="form-check-label" for="">E.</label>
                                                            @if ($antecedentes->pregunta9 == '1')
                                                            <input type="checkbox" class="form-check-input" id="pregunta9" name="pregunta9"
                                                                value="1" checked><br>
                                                            @else
                                                            <input type="checkbox" class="form-check-input" id="pregunta9" name="pregunta9"
                                                                value="1"><br>
                                                            @endif
                                                            <label class="form-check-label" for="">H</label>
                                                            @if ($antecedentes->pregunta10 == '1')
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
                                                                placeholder="descripcion8" value="{{$antecedentes->descripcion8}}">
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
                                                            @if ($antecedentes->pregunta11 == '1')
                                                            <input type="radio" class="form-check-input" id="pregunta11" name="pregunta11"
                                                                value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="pregunta11" name="pregunta11"
                                                                value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->pregunta11 == '0')
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
                                                                placeholder="descripcion9" value="{{$antecedentes->descripcion9}}">
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
                                                            @if ($antecedentes->pregunta12 == '1')
                                                            <input type="radio" class="form-check-input" id="pregunta12" name="pregunta12"
                                                                value="1" checked>
                                                            @else
                                                            <input type="radio" class="form-check-input" id="pregunta12" name="pregunta12"
                                                                value="1">
                                                            @endif
                                                            <label class="form-check-label" for="">No</label>
                                                            @if ($antecedentes->pregunta12 == '0')
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
                                                                placeholder="descripcion10" value="{{$antecedentes->descripcion10}}">
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
                                                                placeholder="pregunta13" value="{{$antecedentes->pregunta13}}">
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
                                                                placeholder="medicamentos" value="{{$antecedentes->medicamentos}}">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            {{-- Historial radiografíco --}}
                                            {{-- <div class="tab-pane fade" id="radiografico{{$antecedentes->id}}" role="tabpanel"
                                                aria-labelledby="radiografico-tab{{$antecedentes->id}}">

                                            </div> --}}
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a type="button" class="btn btn-secondary"
                                            href="{{ route('antecedentes.index') }}">Cancelar</a>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
