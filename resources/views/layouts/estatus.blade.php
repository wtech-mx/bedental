<!-- Modal -->
<div class="modal fade" id="estatusModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="estatusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Configuración de estatus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>

                <div class="modal-body ">
                    <a class="btn btn-primary" data-toggle="collapse" href="#estatus" role="button" aria-expanded="false" aria-controls="estatus">
                        Agregar estatus
                      </a>
                      <div class="collapse" id="estatus">
                    <form action="{{ route('estatus.create') }}" method="post" class="row"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-3">
                            <label for="limpieza">Estatus</label>
                            <input type="text" class="form-control" id="estatus" name="estatus">
                        </div>

                        <div class="form-group col-2">
                            <label for="Color">Color</label>
                            <input type="color" class="form-control" id="color" name="color">
                        </div>

                        <div class="form-group col-3">
                            <label for="operatoria" style="opacity: 0;">-------</label>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
                    <hr>
                    @foreach ($estatus as $item)
                    <form action="{{ route('estatus.update_estatus',$item->id) }}" method="post" class="row"  enctype="multipart/form-data">
                      @csrf

                        <div class="form-group col-3">
                            <label for="limpieza">estatus</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="{{$item->id}}">
                            <input type="text" class="form-control" id="estatus" name="estatus" value="{{$item->estatus}}">
                        </div>

                        <div class="form-group col-2">
                            <label for="Color">Color</label>
                            <input type="color" class="form-control" id="color" name="color" value="{{$item->color}}">
                        </div>

                        <div class="form-group col-3">
                            <label for="operatoria" style="opacity: 0;">-------</label>
                            <button type="submit" class="btn btn-primary">guardar</button>
                        </div>
                       </form>
                    @endforeach
                </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">cerrar</button>
                    </div>

        </div>
    </div>
</div>

