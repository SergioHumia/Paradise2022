@extends("layouts.app4")
@section("contenido")
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
        $('#tabla_realizas').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });
    } );
    </script>

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
        <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)"  fill-opacity="0.6">REALIZAR</text>
        <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">REALIZAR</text>
        </svg>
    </div>
    @if(count($realizas)>0)
        <a href=" {{url('/home')}}" class="btn btn-secondary" padding="10px">Regresar</a>
        &nbsp;
        <a href=" {{url('/realizas/pdf')}}" class="btn btn-outline-dark float-right" padding="10px">Generar PDF</a>
        
        <table id="tabla_realizas" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>ID Viaje</th>
                    <th>Lugar</th>
                    <th>Nombre y Apellidos del cliente</th>
                    <th>ID Cliente</th>
                </tr>
            </thead>
            <tbody>
                @foreach($realizas as $realiza)
                    <tr>
                        <td>{{$realiza->viaje_id}}</td>
                        <td>{{$realiza->viaje->lugar}}</td>
                        <td>{{$realiza->cliente->nombre}} {{$realiza->cliente->apellidos}}</td>
                        <td>{{$realiza->cliente_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1>No se va a realizar ningún viaje</h1>
    @endif
@endsection