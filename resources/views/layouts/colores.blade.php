<!-- Modal -->
<div class="modal fade" id="coloresModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Configuración de Colores</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
            <form method="POST" action="{{ route('colores.update_colores') }}"
                enctype="multipart/form-data" role="form">
              @csrf
              <input type="hidden" name="_method" value="PATCH">

                <div class="modal-body row">
                    @foreach ($colores as $item)
                        <div class="form-group col-6">
                            <label for="limpieza">Servicio</label>
                            <input name="id_{{$item->id}}" type="text" class="form-control" id="id_{{$item->id}}" value="{{$item->id}}">
                            <input name="servicio_{{$item->id}}" type="text" class="form-control" id="servicio_{{$item->id}}" value="{{$item->servicio}}">
                        </div>

                        <div class="form-group col-6">
                            <label for="operatoria">Color</label>
                            <input name="color_{{$item->id}}" type="color" class="form-control" id="color_{{$item->id}}" value="{{$item->color}}">
                        </div>
                    @endforeach
                </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">cerrar</button>
                        <button type="submit" class="btn btn-primary">guardar</button>
                    </div>
            </form>
        </div>
    </div>
</div>


