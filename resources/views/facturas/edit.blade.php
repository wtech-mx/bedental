<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{$row->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body row">
      {!! Form::open(array('route' => ['facturas.upload', $row->id],'method'=>'PATCH','enctype'=>'multipart/form-data')) !!}

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Titulo:</label>
                <input type="text" value="{{$row->name}}" class="form-control" name="name" id="name">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Fecha:</label>
                <input type="date" value="{{$row->date}}" class="form-control" name="date" id="date">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                 <iframe class="card-img-top" src="{{asset('/img/facturas/'.$row->file_name)}}" height="200" width="300">
                 </iframe>
                    <label class="mt-3" >Cambiar xml:</label>
                    <input class="form-control" type="file" value="{{$row->file_name}}" name="file_name" id="file_name">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                 <iframe class="card-img-top" src="{{asset('/img/facturas/'.$row->file_name2.'#toolbar=0')}}" height="200" width="300" type="application/pdf">
                 </iframe>
                    <label class="mt-3" >Cambiar PDF:</label>
                    <input class="form-control" type="file" value="{{$row->file_name2}}" name="file_name2" id="file_name2">
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
