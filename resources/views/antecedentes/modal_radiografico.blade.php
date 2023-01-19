<!-- Modal -->
<div class="modal fade" id="Historial_radiografíco{{$row->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Historial radiografíco</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="individual-tab" data-toggle="tab" href="#individual" role="tab"
                            aria-controls="individual" aria-selected="true">Carga individual</a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="masiva-tab" data-toggle="tab" href="#masiva" role="tab"
                            aria-controls="masiva" aria-selected="false">Carga Masiva</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="individual" role="tabpanel"
                        aria-labelledby="individual-tab">
                        <h3 class="mt-5 mb-5 text-center">Carga Individual</h3>
                        <form action="{{ route('radiografia.upload', [$row->id]) }}" method="post"
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
                                    <label for="">Imagen</label>
                                    <input class="form-control" type="file" name="imagen">
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane fade" id="masiva" role="tabpanel" aria-labelledby="masiva-tab">
                        <h3 class="mt-5 mb-5 text-center">Carga Masiva</h3>
                        <form action="{{ route('radiografia.upload', [$row->id]) }}" method="post" name="file_name"
                            files="true" enctype="multipart/form-data" class="dropzone" id="image-upload">
                            @csrf
                            <div class="row">
                                <div class="form-group col-6 mt-3">
                                    <label for="">Fecha</label>
                                    <input class="form-control" type="date" name="date">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="">Titulo</label>
                                    <input class="form-control" type="text" name="name">
                                </div>


                                <div class="d-flex justify-content-center ">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
