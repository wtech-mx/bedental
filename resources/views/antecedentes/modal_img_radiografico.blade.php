<!-- Modal -->

<div class="modal fade" id="exampleModal{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModal"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $row->client->nombre }} {{ $row->client->apellido }}</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button>
            </div>
            <div class="modal-body">
                <div class="form-group col-xs-6 col-sm-6 col-md-6">
                    <div class="card" style="width: auto;">
                        @foreach ($radio as $dds)
                        @if ($dds->id_antecedente == $row->id)
                            <a href="{{asset('img/radiografias/'.$dds->file_name)}}" data-lightbox="photos">
                            <img class="card-img-top" src="{{asset('img/radiografias/'.$dds->file_name)}}">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <P>{{$dds->name}}</P>
                                </h5>
                                <p class="card-text">Fecha:
                                <P>{{$dds->date}}</P>
                                </p>
                            </div>
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
