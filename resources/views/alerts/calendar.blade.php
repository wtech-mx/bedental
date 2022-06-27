@extends('layouts.app')

@section('title')
     Calendario
@endsection

@section('fullcalendar')

    <link href='{{ asset('lib/main.css') }}' rel='stylesheet' />
    <script src='{{ asset('lib/main.js') }}'></script>

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
                themeSystem: 'bootstrap',
                scrollTime:  "09:00:00",
                slotMinTime: "08:00:00",
                slotMaxTime: "22:00:00",
                hiddenDays: [ 0 ],

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
                  $("#btnAgregar").prop("disabled",false);
                  $("#btnModificar").prop("disabled",true);
                  $("#btnBorrar").prop("disabled",true);

                    if (info.allDay) {
                        $('#txtFecha').val(info.dateStr);
                    } else {
                        let fechaHora = info.dateStr.split("T");
                        let unahora = fechaHora[1].substring(0, 2);
                        let final = Number(unahora) + 1;
                        $('#txtFecha').val(fechaHora[0]);
                        $('#txtHorafin').val(fechaHora[1].substring(0, 5));
                        $('#txtHora').val(fechaHora[1].substring(0, 5));
                        console.log('hora', final)
                    }
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
                  $('#resource_id').val(info.event.extendedProps.resource_id);
                  $('#id_especialist').val(info.event.extendedProps.id_especialist);
                  $('#title').val(info.event.title);
                  $('#txtTelefono').val(info.event.extendedProps.telefono);
                  $('#color').val(info.event.backgroundColor);
                  $('#id_color').val(info.event.extendedProps.id_color);
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
                    let id_color = arg.event.extendedProps.id_color;

                    minutos3=(arg.event.start.getMinutes());
                    hora3=(arg.event.start.getHours());
                    minutos3 = (minutos3<10)?"0"+minutos3:minutos3;
                    hora3 = (hora3<10)?"0"+hora3:hora3;
                    horario = (hora3+":"+minutos3);
                    let hor = horario;

                    if (checkArg == 1){

                        modulocapi = arg.event.extendedProps.resource_id.toUpperCase()
                        let hora = '<div class="position-absolute" style="top: 0;left: 0">'+hor+'</div>';
                        let imgEvent = '<div class="position-absolute" style="top: 5px;right: 15px"><i class="fa fa-flask" aria-hidden="true"></i></div>';
                        let titleEvent =  '<div class="position-absolute" style="top: 20px;left: 0;font-size: 11px;">'+arg.event.title+'</div>';
                        let modulo = '<div class="position-absolute" style="top: 20px;right: 17px">'+modulocapi+'</div>';
                        contenedorEventWrap.classList = "position-relative";
                        contenedorEventWrap.innerHTML = imgEvent+hora+titleEvent+modulo;
                        arrayOfDomNodes = [contenedorEventWrap ]
                        return { domNodes: arrayOfDomNodes }
                    }

                    if (checkArg == 2){
                        modulocapi = arg.event.extendedProps.resource_id.toUpperCase()
                        let hora = '<div class="position-absolute" style="top: 0;left: 0">'+hor+'</div>';
                        let imgEvent = '<div class="position-absolute" style="top: 5px;right: 15px"><i class="fa fa-check" aria-hidden="true"></i></div>';
                        let titleEvent =  '<div class="position-absolute" style="top: 20px;left: 0;font-size: 11px;">'+arg.event.title+'</div>';
                        let modulo = '<div class="position-absolute" style="top: 20px;right: 17px">'+modulocapi+'</div>';
                        contenedorEventWrap.classList = "position-relative";
                        contenedorEventWrap.innerHTML = imgEvent+hora+titleEvent+modulo;
                        arrayOfDomNodes = [contenedorEventWrap ]
                        return { domNodes: arrayOfDomNodes }
                    }

                    if (checkArg == 3){
                        modulocapi = arg.event.extendedProps.resource_id.toUpperCase()
                        let hora = '<div class="position-absolute" style="top: 0;left: 0">'+hor+'</div>';
                        let imgEvent = '<div class="position-absolute" style="top: 5px;right: 15px"><i class="fa fa-times" aria-hidden="true"></i></div>';
                        let titleEvent =  '<div class="position-absolute" style="top: 20px;left: 0;font-size: 11px;">'+arg.event.title+'</div>';
                        let modulo = '<div class="position-absolute" style="top: 20px;right: 17px">'+modulocapi+'</div>';
                        contenedorEventWrap.classList = "position-relative";
                        contenedorEventWrap.innerHTML = imgEvent+hora+titleEvent+modulo;
                        arrayOfDomNodes = [contenedorEventWrap ]
                        return { domNodes: arrayOfDomNodes }
                    }
                    if (checkArg == 4){
                        modulocapi = arg.event.extendedProps.resource_id.toUpperCase()
                        let hora = '<div class="position-absolute" style="top: 0;left: 0">'+hor+'</div>';
                        let imgEvent = '<div class="position-absolute" style="top: 5px;right: 15px"><i class="fa fa-address-book" aria-hidden="true"></i></div>';
                        let titleEvent =  '<div class="position-absolute" style="top: 20px;left: 0;font-size: 11px;">'+arg.event.title+'</div>';
                        let modulo = '<div class="position-absolute" style="top: 20px;right: 17px">'+modulocapi+'</div>';
                        contenedorEventWrap.classList = "position-relative";
                        contenedorEventWrap.innerHTML = imgEvent+hora+titleEvent+modulo;
                        arrayOfDomNodes = [contenedorEventWrap ]
                        return { domNodes: arrayOfDomNodes }
                    }
                    if (checkArg == 5){
                        modulocapi = arg.event.extendedProps.resource_id.toUpperCase()
                        let hora = '<div class="position-absolute" style="top: 0;left: 0">'+hor+'</div>';
                        let imgEvent = '<div class="position-absolute" style="top: 5px;right: 15px"><i class="fa fa-calendar" aria-hidden="true"></i></div>';
                        let titleEvent =  '<div class="position-absolute" style="top: 20px;left: 0;font-size: 11px;">'+arg.event.title+'</div>';
                        let modulo = '<div class="position-absolute" style="top: 20px;right: 17px">'+modulocapi+'</div>';
                        contenedorEventWrap.classList = "position-relative";
                        contenedorEventWrap.innerHTML = imgEvent+hora+titleEvent+modulo;
                        arrayOfDomNodes = [contenedorEventWrap ]
                        return { domNodes: arrayOfDomNodes }
                    }
                    if (checkArg == 6){
                        modulocapi = arg.event.extendedProps.resource_id.toUpperCase()
                        let hora = '<div class="position-absolute" style="top: 0;left: 0">'+hor+'</div>';
                        let imgEvent = '<div class="position-absolute" style="top: 5px;right: 15px"><i class="fa fa-clock" aria-hidden="true"></i></div>';
                        let titleEvent =  '<div class="position-absolute" style="top: 20px;left: 0;font-size: 11px;">'+arg.event.title+'</div>';
                        let modulo = '<div class="position-absolute" style="top: 20px;right: 17px">'+modulocapi+'</div>';
                        contenedorEventWrap.classList = "position-relative";
                        contenedorEventWrap.innerHTML = imgEvent+hora+titleEvent+modulo;
                        arrayOfDomNodes = [contenedorEventWrap ]
                        return { domNodes: arrayOfDomNodes }
                    }
                    if (checkArg == 7){
                        modulocapi = arg.event.extendedProps.resource_id.toUpperCase()
                        let hora = '<div class="position-absolute" style="top: 0;left: 0">'+hor+'</div>';
                        let imgEvent = '<div class="position-absolute" style="top: 5px;right: 15px"><i class="fa fa-user-plus" aria-hidden="true"></i></div>';
                        let titleEvent =  '<div class="position-absolute" style="top: 20px;left: 0;font-size: 11px;">'+arg.event.title+'</div>';
                        let modulo = '<div class="position-absolute" style="top: 20px;right: 17px">'+modulocapi+'</div>';
                        contenedorEventWrap.classList = "position-relative";
                        contenedorEventWrap.innerHTML = imgEvent+hora+titleEvent+modulo;
                        arrayOfDomNodes = [contenedorEventWrap ]
                        return { domNodes: arrayOfDomNodes }
                    }
                    if (checkArg == 8){
                        modulocapi = arg.event.extendedProps.resource_id.toUpperCase()
                        let hora = '<div class="position-absolute" style="top: 0;left: 0">'+hor+'</div>';
                        let imgEvent = '<div class="position-absolute" style="top: 5px;right: 15px"><i class="fa fa-ban" aria-hidden="true"></i></div>';
                        let titleEvent =  '<div class="position-absolute" style="top: 20px;left: 0;font-size: 11px;">'+arg.event.title+'</div>';
                        let modulo = '<div class="position-absolute" style="top: 20px;right: 17px">'+modulocapi+'</div>';
                        contenedorEventWrap.classList = "position-relative";
                        contenedorEventWrap.innerHTML = imgEvent+hora+titleEvent+modulo;
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
                    resource_id:$('#resource_id').val(),
                    id_especialist:$('#id_especialist').val(),
                    descripcion:$('#descripcion').val(),
                    estatus:$('#estatus').val()+estatusDefault,
                    check:$('#check').val(),
                    image:$('#image').val()+imageDefault,
                    color:$('#color').val(),
                    id_color:$('#id_color').val(),
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
                    resource_id:$('#resource_id').val(),
                    id_especialist:$('#id_especialist').val(),
                    descripcion:$('#descripcion').val(),
                    estatus:$('#estatus').val(),
                    check:$('#check').val(),
                    image:$('#image').val(),
                    color:$('#color').val(),
                    id_color:$('#id_color').val(),
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
                  $('#resource_id').val("");
                  $('#id_especialist').val("");
                  $('#txtFecha').val("");
                  $('#txtTelefono').val("");
                  $('#txtHora').val("");
                  $('#txtHorafin').val("");
                  $('#color').val("");
                  $('#id_color').val("");
                  $('#descripcion').val("");
                  $('#estatus').val("");
                  $('#check').val("");
                  $('#image').val("");
            }
          });

        </script>

    @endsection

@section('content')
    <style>

    </style>

    <div class="calendar" data-toggle="calendar" id="calendar"></div>
    @include('alerts.modal')
@endsection
