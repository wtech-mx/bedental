@extends('layouts.app')

@section('template_title')
     Calendario
@endsection

@section('fullcalendar')

    <link href='{{ asset('lib/main.css') }}' rel='stylesheet' />
    <script src='{{ asset('lib/main.js') }}'></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        @php
        $Y = date('Y') ;
        $M = date('m');
        $D = date('d') ;
        $Fecha = $Y."-".$M."-".$D;
       @endphp

    <script>
          document.addEventListener('DOMContentLoaded', function() {

            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {

                height: 'auto',
                timeZone: 'local',
                {{--now: '{{$Fecha}}',--}}
                initialDate: '{{$Fecha}}',
                initialView: 'timeGridWeek',
                editable: true,
                dayMaxEvents: 5,
                aspectRatio: 1.8,
                scrollTime: '00:00',

              headerToolbar: {
                left: 'today prev,next',
                center: 'title',
                right: 'resourceTimelineDay,timeGridWeek,dayGridMonth'
              },

                 resourceAreaHeaderContent: 'Modulo',
                  resourceLabelContent: function(arg) {
                    return 'Unidad ' + arg.resource.id.toUpperCase();
                  },
                  resourceLabelDidMount: function(arg) {
                    if (arg.resource.id == 'h') {
                      arg.el.style.backgroundColor = 'rgb(255, 243, 206)';
                    }
                  },
                  resources: [
                    { id: 'a'},
                    { id: 'b'},
                  ],

                events:"{{ route('calendar.show_calendar') }}",

                  dateClick:function (info) {

                  limpiarFormulario();
                  $('#txtFecha').val("");
                  $('#txtFecha').val(info.dateStr);
                  $("#btnAgregar").prop("disabled",false);
                  $("#btnModificar").prop("disabled",true);
                  $("#btnBorrar").prop("disabled",true);
                  $('#exampleModal').modal('toggle');
                },

                  eventClick:function (info) {

                  $("#btnAgregar").prop("disabled",true);
                  $("#btnModificar").prop("disabled",false);
                  $("#btnBorrar").prop("disabled",false);
                  $('#txtID').val(info.event.id);

                    mes = (info.event.start.getMonth()+1);
                    dia = (info.event.start.getDate());
                    anio = (info.event.start.getFullYear());

                    mes = (mes<10)?"0"+mes:mes;
                    dia = (dia<10)?"0"+dia:dia;

                    minutos=(info.event.start.getMinutes());
                    hora=(info.event.start.getHours());

                    minutos = (minutos<10)?"0"+minutos:minutos;
                    hora = (hora<10)?"0"+hora:hora;

                    horario = (hora+":"+minutos);

                    // ---------

                    minutos2=(info.event.end.getMinutes());
                    hora2=(info.event.end.getHours());

                    minutos2 = (minutos2<10)?"0"+minutos2:minutos2;
                    hora2 = (hora2<10)?"0"+hora2:hora2;

                    horario2 = (hora2+":"+minutos2);


                  $('#txtFecha').val(anio+"-"+mes+"-"+dia);
                  $('#txtHora').val(horario);
                  $('#txtHorafin').val(horario2);
                  $('#id_client').val(info.event.extendedProps.id_client);
                  $('#resourceId').val(info.event.extendedProps.resourceId);
                  $('#id_especialist').val(info.event.extendedProps.id_especialist);
                  $('#title').val(info.event.title);
                  $('#color').val(info.event.backgroundColor);
                  $('#descripcion').val(info.event.extendedProps.descripcion);
                  $('#estatus').val(info.event.extendedProps.estatus);
                  $('#check').val(info.event.extendedProps.check);
                  $('#image').val(info.event.extendedProps.image);
                  $('#exampleModal').modal();

                  console.log('Fecha', dia)
                },

                  eventContent: function(arg) {

                    let arrayOfDomNodes = []
                    let contenedorEventWrap = document.createElement('div');

                    let titleArg = arg.event.title;
                    let imageArg = arg.event.extendedProps.image;
                    let checkArg = arg.event.extendedProps.check;

                    if (checkArg == 1){
                        let imgEvent = '<img width="16px" height="16px" style="margin-left: 10px" src="'+imageArg+'" >';
                        let titleEvent ='<p> </p>';

                        contenedorEventWrap.classList = "d-flex ml-5";
                        contenedorEventWrap.innerHTML = imgEvent+titleEvent;

                        arrayOfDomNodes = [contenedorEventWrap ]
                        return { domNodes: arrayOfDomNodes }
                    }

                  },

            });

            calendar.setOption('locale','Es');
            calendar.render();

            $('#btnAgregar').click(function(){
                ObjEvento= recolectarDatosGUI('POST');
                {{--EnviarInformacion('{{route('calendar.index_calendar')}}', ObjEvento);--}}
                EnviarInformacion('', ObjEvento);
            });

            $('#btnBorrar').click(function(){
                ObjEvento= editarDatosGUI('PATCH');
                EnviarInformacion('/destroy/'+$('#txtID').val(), ObjEvento);
            });

            $('#btnModificar').click(function(){
                ObjEvento= editarDatosGUI('PATCH');
                EnviarInformacion('/update/'+$('#txtID').val(), ObjEvento);
            });

            function recolectarDatosGUI(method){
                colorAlert =("#2ECC71");
                estatusDefault = 0;
                checkDefault = 0;
                imageDefault = ("{{asset('img/icon/comprobado.png') }}");

                nuevoEvento={
                    id:$('#txtID').val(),
                    title:$('#title').val(),
                    id_client:$('#id_client').val(),
                    resourceId:$('#resourceId').val(),
                    id_especialist:$('#id_especialist').val(),
                    descripcion:$('#descripcion').val(),
                    estatus:$('#estatus').val()+estatusDefault,
                    check:$('#check').val()+checkDefault,
                    image:$('#image').val()+imageDefault,
                    color:$('#color').val(),
                    start:$('#txtFecha').val()+" "+$('#txtHora').val(),
                    end:$('#txtFecha').val()+" "+$('#txtHorafin').val(),
                    '_token':$("meta[name='csrf-token']").attr("content"),
                    '_method':method
                }
                console.log('Fecha nuevo',nuevoEvento)
                return (nuevoEvento);
            }

            function editarDatosGUI(method){
                nuevoEvento={
                    id:$('#txtID').val(),
                    title:$('#title').val(),
                    id_client:$('#id_client').val(),
                    resourceId:$('#resourceId').val(),
                    id_especialist:$('#id_especialist').val(),
                    descripcion:$('#descripcion').val(),
                    estatus:$('#estatus').val(),
                    check:$('#check').val(),
                    image:$('#image').val(),
                    color:$('#color').val(),
                    start:$('#txtFecha').val()+" "+$('#txtHora').val(),
                    end:$('#txtFecha').val()+" "+$('#txtHorafin').val(),
                    '_token':$("meta[name='csrf-token']").attr("content"),
                    '_method':method
                }
                console.log('Fecha nuevo 1',nuevoEvento)
                return (nuevoEvento);
            }

            function EnviarInformacion(accion,ObjEvento){
                $.ajax(
                        {
                           type:"POST",
                             url: "{{route('calendar.store_calendar')}}"+accion,
                            data:ObjEvento,
                            success:function (msg){
                                  console.log('Mensaje',msg);
                                  $('#exampleModal').modal('toggle');
                                  calendar.refetchEvents();
                                 },
                            error:function(){alert("hay un error");}
                        }
                    );
            }

            function limpiarFormulario(){
                  $('#txtID').val("");
                  $('#title').val("");
                  $('#id_client').val("");
                  $('#resourceId').val("");
                  $('#id_especialist').val("");
                  $('#txtFecha').val("");
                  $('#txtHora').val("");
                  $('#txtHorafin').val("");
                  $('#color').val("");
                  $('#descripcion').val("");
                  $('#estatus').val("");
                  $('#check').val("");
                  $('#image').val("");
            }
          });

        </script>

    @endsection

@section('content')

     <div class="calendar" data-toggle="calendar" id="calendar"></div>
    @include('alerts.modal')

@endsection
