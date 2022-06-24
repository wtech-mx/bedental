
<form action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
    @csrf

     <input type="hidden" name="id" value="{{$row->id}}" id="id">
     <input type="hidden" name="emailRecipient" value="{{$row->Client->email}}" id="emailRecipient" class="form-control" >
     <input type="hidden" name="emailSubject" value="Envio de factura para {{$row->Client->nombre}} {{$row->Client->apellido}}" id="emailSubject" class="form-control" >

     <input type="hidden" name="file_name" id="file_name" value="{{'img/facturas/'.$row->file_name}}"/>
     <input type="hidden" name="file_name2" id="file_name2" value="{{'img/facturas/'.$row->file_name2}}">

     <input type="hidden" name="emailCc" id="emailCc" class="form-control" value="bedentalconsultorio@gmail.com">
     <input type="hidden" name="emailBcc" id="emailBcc" class="form-control" value="{{$row->Client->correo_fiscal}}">
     <input type="hidden" name="emailBcc2" id="emailBcc2" class="form-control" value="{{$row->Client->email2}}">
     <input type="hidden" name="estatus" id="estatus" class="form-control" value="1">
     <textarea name="emailBody" id="emailBody" class="form-control" hidden>
        Te contactamos de BEDENTAL te hacemos llegar tu factura anexada a este correo, cualquier duda o acalracion nos puedes contactar, que tenga un buen dia.
     </textarea>

     <input type="hidden" name="emailAttachments[]" multiple="multiple" id="emailAttachments" class="form-control">

    <div class="dropdown-item">
        <button type="submit" class="" style="font-size: .875rem;border: 1px solid transparent;background-color: transparent;">
            <i class="ni ni-email-83" style="margin-right: 20px;"></i>Enviar Correo
        </button>
    </div>

</form>
