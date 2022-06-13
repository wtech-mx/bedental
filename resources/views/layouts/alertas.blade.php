@if (Session::has('success'))
<script>
    Swal.fire({
        title: 'Exito!!',
        html: 'Se ha <b>agragado</b> </br> ',
        imageUrl: '{{ asset('img/icon/checked.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })

</script>
@endif

@if (Session::has('edit'))
<script>
    Swal.fire({
        title: 'Exito!!',
        html: 'Se ha <b>editado</b> </br>',
        imageUrl: '{{ asset('img/icon/edit.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })

</script>
@endif

@if (Session::has('delete'))
<script>
    Swal.fire({
        title: 'Exito!!',
        html: 'Se ha <b>eliminado</b> </br>',
        imageUrl: '{{ asset('img/icon/delete.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })

</script>
@endif

@if (Session::has('error'))
<script>
    Swal.fire({
        title: 'Error!!',
        html: 'Ha habido un <b>Error</b> </br>',
        imageUrl: '{{ asset('img/icon/warning.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })
</script>
@endif

@if (Session::has('failed'))
<script>
    Swal.fire({
        title: 'Fallo!!',
        html: 'Ha habido un <b>Fallo</b> </br>',
        imageUrl: '{{ asset('img/icon/error.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })
</script>
@endif

@if (Session::has('email'))
<script>
    Swal.fire({
        title: 'Enviado!!',
        html: 'Se haenviado el correo <b>Exitosamente</b> </br>',
        imageUrl: '{{ asset('img/icon/sending.png') }}',
        background: '#fff',
        imageWidth: 150,
        imageHeight: 150,
    })
</script>
@endif
