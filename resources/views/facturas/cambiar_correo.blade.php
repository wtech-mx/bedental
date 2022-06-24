<!-- Modal -->
<div class="modal fade" id="changeenvelop{{$row->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="changeenvelop">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body row">
      {!! Form::open(array('route' => ['client_correo.upload', $row->Client->id],'method'=>'PATCH','enctype'=>'multipart/form-data')) !!}

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Correo 1:</label>
                <input type="text" value="{{$row->Client->email}}" class="form-control" name="email" id="email">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Correo 2:</label>
                <input type="text" value="{{$row->Client->email2}}" class="form-control" name="email2" id="email2">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-12">
                <label for="">Correo_fiscal:</label>
                <input type="text" value="{{$row->Client->correo_fiscal}}" class="form-control" name="correo_fiscal" id="correo_fiscal">
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
