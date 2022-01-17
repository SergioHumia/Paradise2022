@extends("layouts.app3")
@section("contenido")

<style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
        }
        #titulop{
            text-align:center;
        }
    </style>

<h2 id="titulop">Realizas</h2>
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
   
@endsection