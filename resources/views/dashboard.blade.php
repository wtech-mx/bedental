@section('title', __('Dashboard'))

@extends('layouts.app')

@section('breadcrumb')

          <div class="row">

            <div class="col-xl-3 col-md-6 col-6">
              <div class="card card-stats">
                <!-- Card body -->
                <a class="hover_card_bred" href="{{ route('clients.index') }}">
                <div class="card-body">
                  <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Pacientes </h5>
                          <span class="h2 font-weight-bold mb-0"> {{$count_client}} </span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #9368a9">
                            <i class="ni ni-circle-08 text-white"></i>
                          </div>
                        </div>
                  </div>
{{--                  <p class="mt-3 mb-0 text-sm">--}}
{{--                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>--}}
{{--                    <span class="text-nowrap">Since last month</span>--}}
{{--                  </p>--}}
                </div>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 col-6">
              <div class="card card-stats">
                <!-- Card body -->
                <a class="hover_card_bred" href="{{ route('especialists.index') }}">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Doctores</h5>
                      <span class="h2 font-weight-bold mb-0"> {{$count_especialist}} </span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape  text-white rounded-circle shadow" style="background-color: #9368a9">
                        <i class="fa fa-user-md text-white"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 col-6">
              <div class="card card-stats">
                <!-- Card body -->
                <a class="hover_card_bred" href="{{ route('antecedentes.index') }}">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">His. Clinico</h5>
                      <span class="h2 font-weight-bold mb-0">{{$count_antecedentes}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #9368a9">
                        <i class="fa fa-address-book text-white"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 col-6">
              <div class="card card-stats">
                <!-- Card body -->
                <a class="hover_card_bred" href="{{ route('users.index') }}">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Usuarios</h5>
                      <span class="h2 font-weight-bold mb-0">{{$count_users}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #9368a9">
                         <i class="ni ni-settings text-white"></i>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 col-6">
                  <div class="card card-stats">
                    <!-- Card body -->
                     <a class="hover_card_bred" href="{{ route('recordatorios.index') }}">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Recordatorios</h5>
                              <span class="h2 font-weight-bold mb-0">{{$recordatorios}}</span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #9368a9">
                                <i class="ni ni-calendar-grid-58 text-white"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                    </a>
                  </div>
            </div>

            <div class="col-9">
                <div class="d-flex flex-row-reverse">

                  <div class="card card-stats">
                    <!-- Card body -->
                     <a class="nav-link" type="button" data-toggle="modal" data-target="#coloresModal">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Colores</h5>
                              <span class="h2 font-weight-bold mb-0"></span>
                            </div>
                            <div class="col-auto">
                              <div class="icon icon-shape text-white rounded-circle shadow" style="background-color: #9368a9">
                                <i class="fa fa-paint-brush text-white"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                    </a>
                  </div>
                    @include('layouts.colores')
                </div>
            </div>

          </div>
@endsection

<style>
    .calendar .fc-toolbar {
        height: 100px!important;
        padding: 15px;
}
</style>

@section('content')
    {{--calednarioi--}}
    @include('alerts.calendar');
    {{--calednarioi--}}
@endsection

