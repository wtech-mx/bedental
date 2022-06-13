<!-- Modal -->
<div class="modal fade" id="facturas" tabindex="-1" role="dialog" aria-labelledby="facturas" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Crear fac</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

                        <form action="{{ route('factura.create_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                              <div class="form-group col-12 mb-3">
                                 <label for="">Selecionar Paciente</label>
                                      <select class="form-control mibuscador_paciente" id="id_client" name="id_client" required>
                                           <option value="">Seleccione Paciente</option>
                                               @foreach($client as $item)
                                                  <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                               @endforeach
                                      </select>
                              </div>

                                <div class="form-group col-6">
                                    <label for="">Fecha</label>
                                    <input class="form-control" type="date" name="date" required>
                                </div>

                                <div class="form-group col-6">
                                    <label for="">Titulo</label>
                                    <input class="form-control" type="text" name="name">
                                </div>

                                <div class="form-group col-12 mb-5">
                                    <label for="">XML</label>
                                    <input class="form-control" type="file" name="file_name" required>
                                </div>

                                <div class="form-group col-12 mb-5">
                                    <label for="">PDF</label>
                                    <input class="form-control" type="file" name="file_name2" required>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
      </div>


    </div>
  </div>
</div>
