<!-- Modal -->
<div class="modal fade" id="facturasModal{{$row->id}}" tabindex="-1" aria-labelledby="facturasModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $row->nombre }} {{ $row->apellido }}</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="individual-tab" data-toggle="tab" href="#individual{{ $row->id }}" role="tab"
                            aria-controls="individual" aria-selected="true">Subir factura</a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="masiva-tab" data-toggle="tab" href="#masiva{{ $row->id }}" role="tab"
                            aria-controls="masiva" aria-selected="false">Ver Facturas</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="individual{{ $row->id }}" role="tabpanel" aria-labelledby="individual-tab">
                        <form action="{{ route('factura.store', $row->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="">Fecha</label>
                                    <input class="form-control" type="date" name="date">
                                </div>

                                <div class="form-group col-6">
                                    <label for="">Titulo</label>
                                    <input class="form-control" type="text" name="name">
                                </div>

                                <div class="form-group col-12 mb-5">
                                    <label for="">XML</label>
                                    <input class="form-control" type="file" name="file_name">
                                </div>

                                <div class="form-group col-12 mb-5">
                                    <label for="">PDF</label>
                                    <input class="form-control" type="file" name="file_name2">
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="masiva{{ $row->id }}" role="tabpanel" aria-labelledby="masiva-tab">
                        @if (!empty($facturas))


                        @foreach ($facturas as $fact)
                            @if ($fact->id_clients == $row->id)
                                <div class="row">
                                      <div class="col-12">
                                           <div class="card-body">
                                              <h3 class="text-center">Fecha:{{$fact->date}}</h3>
                                              <h3 class="text-center">Titulo:{{$fact->name}}</h3>
                                           </div>
                                      </div>

                                      <div class="col-sm-6">
                                        <div class="card">
                                            <iframe class="card-img-top" src="{{asset('/img/facturas/'.$fact->file_name)}}" height="200" width="300"></iframe>
                                        </div>
                                      </div>

                                      <div class="col-sm-6">
                                        <div class="card">
                                            <iframe class="card-img-top" src="{{asset('/img/facturas/'.$fact->file_name2.'#toolbar=0')}}" height="200" width="300" type="application/pdf"></iframe>
                                        </div>
                                      </div>
                                </div>
                            @endif
                        @endforeach
                        @endif
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
