<!-- Modal -->
<div class="modal fade" id="controlpagos{{$item->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="controlpagos" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="controlpagos">Control de pagos editar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body row">
      {!! Form::open(array('route' => ['control_pagos.update', $item->id],'method'=>'PATCH','enctype'=>'multipart/form-data')) !!}

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Paciente:</label>
                <input type="text" value="{{$item->Client->nombre}}" class="form-control" name="fecha" id="fecha" disabled>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Doctor:</label>
                <input type="text" value="{{$item->Especialists->nombre}}" class="form-control" name="fecha" id="fecha" disabled>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Fecha:</label>
                <input type="text" value="{{$item->fecha}}" class="form-control" name="fecha" id="fecha" disabled>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Tratameinto:</label>
                <input type="text" value="{{$item->tratamiento}}" class="form-control" name="tratamiento" id="tratamiento" disabled>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Costo total:</label>
                <input type="text" value="{{$item->costo_total}}" class="form-control" name="costo_total" id="costo_total">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Saldo pendiente:</label>
                <input type="text" value="{{$item->saldo_pendiente}}" class="form-control" name="saldo_pendiente" id="saldo_pendiente">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Firma doctor:</label>
                <input type="text" value="{{$item->firma_doctor}}" class="form-control" name="firma_doctor" id="firma_doctor">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Firma paciente:</label>
                <input type="text" value="{{$item->firma_paciente}}" class="form-control" name="firma_paciente" id="firma_paciente">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>

      {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
