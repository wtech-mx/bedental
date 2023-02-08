@extends('layouts.app')

@section('title')
     Calendario
@endsection



@section('fullcalendar_css')

    {{-- <link href='{{ asset('lib/main.css') }}' rel='stylesheet' />
    <script src='{{ asset('lib/main.js') }}'></script> --}}
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@6.1.1/index.global.min.js'></script>


<style>
    .atendido{
        background-color: rgb(104, 104, 104);
    }
    .noasistira{
        background-color: rgb(170, 10, 149);
    }
    .confirmado{
        background-color: rgb(24, 161, 31);
    }
</style>

@endsection

@section('content')

    <div class="calendar" data-toggle="calendar" id="calendar"></div>
    @include('alerts.modal')

@endsection

@section('fullcalendar_js')
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
                dayMaxEvents: 3,
                aspectRatio: 1.8,
                themeSystem: 'bootstrap',
                scrollTime:  "09:00:00",
                slotMinTime: "08:00:00",
                slotMaxTime: "22:00:00",
                hiddenDays: [ 0 ],
                schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',

              headerToolbar: {
                left: 'today prev,next',
                center: 'title',
                // right: 'dayGridDay,timeGridWeek,dayGridMonth' sirve para la vidsata por di
                right: 'resourceTimeGridDay,timeGridWeek,dayGridMonth'
              },

              resources: [
                    { id: "A", title: "Modulo A" },
                    { id: "B", title: "Modulo B" },
                ],

                events:"{{ route('calendar.show_calendar') }}",

                // events: [
                // {
                // id: "3",
                // resourceId: "a",
                // start: "2023-02-03T12:00:00",
                // end: "2023-02-03T13:00:00",
                // title: "event 3" },


                // {
                // id: "5",
                // resourceId: "b",
                // start: "2023-02-03T10:00:00",
                // end: "2023-02-03T1:00:00",
                // title: "event 5" }
                // ],

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
                  $('#resourceId').val(info.event._def.resourceIds);
                  $('#id_especialist').val(info.event.extendedProps.id_especialist);
                  $('#title').val(info.event.title);
                  $('#txtTelefono').val(info.event.extendedProps.telefono);
                  $('#color').val(info.event.backgroundColor);
                  $('#id_color').val(info.event.extendedProps.id_color);
                  $('#descripcion').val(info.event.extendedProps.descripcion);
                  $('#id_status').val(info.event.extendedProps.id_status);
                  $('#image').val(info.event.extendedProps.image);
                  $('#exampleModal').modal();

                  console.log('Fecha', dia)
                },

                eventContent: function(arg) {

                minutos3=(arg.event.start.getMinutes());
                hora3=(arg.event.start.getHours());
                minutos3 = (minutos3<10)?"0"+minutos3:minutos3;
                hora3 = (hora3<10)?"0"+hora3:hora3;
                horario = (hora3+":"+minutos3);
                let hor = horario;

                let imageArg = arg.event.extendedProps.image;
                let modulocapi = arg.event.getResources().map(function(resource) { return resource.id });

                let arrayOfDomNodes = []

                // title event
                let titleEvent = document.createElement('div')
                  titleEvent.innerHTML = arg.event.title
                  titleEvent.classList = "fc-event-title fc-sticky"


                // Hora event
                let horaEvent = document.createElement('div')
                  horaEvent.innerHTML = '<div style="font-size:10px;">'+hor+' - '+modulocapi+'</div>';
                  horaEvent.classList = "fc-event-time"

                // image event
                let imgEventWrap = document.createElement('div')
                  let imgEvent = '<img width="16px" height="16px" style="margin-left: 10px" src="'+imageArg+'" >';
                  imgEventWrap.classList = "fc-event-img"
                  imgEventWrap.innerHTML = imgEvent;

                arrayOfDomNodes = [ titleEvent,horaEvent,imgEventWrap ]

                return { domNodes: arrayOfDomNodes }
              },



            });

            calendar.setOption('locale','Es');
            calendar.render();

            $('#btnWhats').click(function(){
                ObjEvento= recolectarDatosGUIWhatsapp('POST');
                {{--EnviarInformacion('{{route('calendar.index_calendar')}}', ObjEvento);--}}
                EnviarInformacionWhatsapp('', ObjEvento);
            });

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

            function recolectarDatosGUIWhatsapp(method){
                nuevoEventowhatasapp={
                    telefono:$('#txtTelefono').val(),
                    fecha:$('#txtFecha').val(),
                    hora:$('#txtHora').val(),
                    '_token':$("meta[name='csrf-token']").attr("content"),
                    '_method':method
                }
                return (nuevoEventowhatasapp);
            }

            function recolectarDatosGUI(method){
                colorAlert =("#2ECC71");
                imageDefault = ("{{asset('img/icon/comprobado.png') }}");

                nuevoEvento={
                    id:$('#txtID').val(),
                    title:$('#title').val(),
                    id_client:$('#id_client').val(),
                    resourceId:$('#resourceId').val(),
                    id_especialist:$('#id_especialist').val(),
                    descripcion:$('#descripcion').val(),
                    id_status:$('#id_status').val(),
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
                    resourceId:$('#resourceId').val(),
                    id_especialist:$('#id_especialist').val(),
                    descripcion:$('#descripcion').val(),
                    id_status:$('#id_status').val(),
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

            function EnviarInformacionWhatsapp(accion,ObjEvento){
                // console.log(ObjEvento['telefono']);
                var pagina='https://api.whatsapp.com/send?phone=+52'+ObjEvento['telefono']+'&text=Buen%20día%20✨🦷%20Le%20escribimos%20del%20consultorio%20dental%20BeDental%20para%20confirmar%20la%20cita%20'+ObjEvento['fecha']+'%20%20a%20las%20'+ObjEvento['hora']+'%20Le%20agradecemos%20nos%20confirme%20su%20asistencia%20a%20más%20tardar%20hoy%20antes%20de%202:00%20pm%20de%20lo%20contrario%20se%20cederá%20el%20lugar%20a%20otro%20paciente%20que%20requiera.%20Quedamos%20al%20pendiente%20de%20su%20pronta%20respuesta.%20Gracias!';
                window.open(pagina, '_blank');
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
                  $('#txtTelefono').val("");
                  $('#txtHora').val("");
                  $('#txtHorafin').val("");
                  $('#color').val("");
                  $('#id_color').val("");
                  $('#descripcion').val("");
                  $('#id_status').val("");
                  $('#image').val("");
            }
          });

        </script>

    @endsection


