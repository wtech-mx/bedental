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
            <form action="{{ route('colores.update_colores') }}" method="post"  enctype="multipart/form-data">
              @csrf

                <div class="modal-body row">
                    @foreach ($colores as $item)
                        <div class="form-group col-8">
                            <label for="limpieza">Servicio</label>
                            <input type="hidden" class="form-control" id="id[]" name="id[]" value="{{$item->id}}">
                            <input type="text" class="form-control" id="servicio[]" name="servicio[]" value="{{$item->servicio}}">
                        </div>

                        <div class="form-group col-4">
                            <label for="operatoria">Color</label>
                            <input type="color" class="form-control" id="color[]" name="color[]" value="{{$item->color}}">
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


