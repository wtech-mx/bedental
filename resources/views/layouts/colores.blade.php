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
            <form method="POST" action="{{ route('colores.update_colores', $colores->id) }}"
                enctype="multipart/form-data" role="form">
              @csrf
              <input type="hidden" name="_method" value="PATCH">

                <div class="modal-body row">
                        <div class="form-group col-6">
                            <label for="limpieza">Limpieza</label>
                            <input name="limpieza" type="color" class="form-control" id="limpieza" value="{{$colores->limpieza}}">
                        </div>

                        <div class="form-group col-6">
                            <label for="operatoria">Operatoria</label>
                            <input name="operatoria" type="color" class="form-control" id="operatoria" value="{{$colores->operatoria}}">
                        </div>

                        <div class="form-group col-6">
                            <label for="ortodoncia">Ortodoncia</label>
                            <input name="ortodoncia" type="color" class="form-control" id="ortodoncia" value="{{$colores->ortodoncia}}">
                        </div>

                        <div class="form-group col-6">
                            <label for="cirugia_extraccion">Cirugia/Extracción</label>
                            <input name="cirugia_extraccion" type="color" class="form-control" id="cirugia_extraccion" value="{{$colores->cirugia_extraccion}}">
                        </div>
                </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">cerrar</button>
                        <button type="submit" class="btn btn-primary">guardar</button>
                    </div>
            </form>
        </div>
    </div>
</div>


