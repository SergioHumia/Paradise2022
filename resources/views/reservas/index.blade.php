@extends("layouts.app4")


@section("contenido")
<br>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
        }
        #titulop{
            text-align:center;
            text-decoration:underline;
        }
    </style>

<script>
    $(document).ready(function() {
        $('#tabla_reservas').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

        $(".borrar").click(function(e){
            e.preventDefault();
            const tr=$(this).closest("tr");
            const id=tr.data("id");
            Swal.fire({
                title: '¿Quieres borrarlo?',
                showCancelButton: true,
                confirmButtonText: 'Eliminar',
                cancelButtonText: `Cancelar`,
            }).then((result) => {
                console.log(result)
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url   : "{{url('/reservas')}}/"+id,
                        data  : {
                            _token: "{{csrf_token()}}",
                            _method: "delete",
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    });
                } 
            })
        });

    } );
    </script>



</head>
<body>
    <div class="titulo">
        <svg viewbox="0 0 100 20">
        <defs>
            <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
            <stop offset="5%" stop-color="#326384"/>
            <stop offset="95%" stop-color="#123752"/>
            </linearGradient>
            <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
            <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)"> 
                <animateTransform
                    attributeName="transform"
                    begin="0s"
                    dur="1.5s"
                    type="translate"
                    from="0,0"
                    to="40,0"
                    repeatCount="indefinite" />
            </path>
            </pattern>
        </defs>
        <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">RESERVAS</text>
        <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">RESERVAS</text>
        </svg>
    </div>
    @if(count($reservas)>0)
        <a href=" {{url('/home')}}" class="btn btn-secondary" padding="10px">Regresar</a>
        &nbsp;
        <a href=" {{url('/reservas/pdf')}}" class="btn btn-outline-dark float-right" padding="10px">Generar PDF</a>
        &nbsp;
        <a href=" {{url('/reservas/create')}}" class="btn btn-primary" padding="10px">Nuevo reserva</a>
        
        <table id="tabla_reservas" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Viaje</th>
                    <th data_orderable="false">Editar</th>
                    <th data_orderable="false">Borrar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                    <tr data-id='{{$reserva->id}}'>
                        <td>{{$reserva->id}}</td>
                        <th>{{$reserva->nombre}}</td>
                        <td>{{$reserva->apellidos}}</td>
                        <td>{{$reserva->viaje_id}}</td>
                        <td><a href="{{url('/reservas')}}/{{$reserva->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td> 
                        <td class="borrar"><form method="POST" action="{{url('/reservas')}}/{{$reserva->id}}">
                                @csrf
                                @method("delete")
                                <input  type="image" width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png">
                        </form></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay reservas</h1>
    @endif
   

@endsection