@extends('layouts.app')

@section('content')
      <div class="container p-3">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12 m-auto">
                <form action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card shadow">

                        @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif

                        <div class="card-header">
                            <h4 class="card-title">Envio de correo</h4>
                        </div>

                        <div class="card-body row">
                            <div class="form-group col-6">
                                <label for="emailRecipient">Email para </label>
                                <input type="email" name="emailRecipient" id="emailRecipient" class="form-control" placeholder="Mail To">
                            </div>

                            <div class="form-group col-6">
                                <label for="emailSubject">Asunto </label>
                                <input type="text" name="emailSubject" id="emailSubject" class="form-control" placeholder="Mail Subject">
                            </div>

                            <div class="form-group col-6">
                                <label for="emailCc">Con copia para</label>
                                <input type="email" name="emailCc" id="emailCc" class="form-control" placeholder="Mail CC">
                            </div>

                            <div class="form-group col-6">
                                <label for="emailBcc">Segunda  copia para </label>
                                <input type="email" name="emailBcc" id="emailBcc" class="form-control" placeholder="Mail BCC">
                            </div>

                            <div class="form-group col-12">
                                <label for="emailBody">Mensaje </label>
                                <textarea name="emailBody" id="emailBody" class="form-control" placeholder="Mail Body"></textarea>
                            </div>

                            <div class="form-group col-12">
                                <label for="emailAttachments">Archivos </label>
                                <input type="file" name="emailAttachments[]" multiple="multiple" id="emailAttachments" class="form-control">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Enviar Correo</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>

@endsection
