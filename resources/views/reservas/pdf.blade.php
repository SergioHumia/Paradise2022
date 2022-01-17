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

<h2 id="titulop">Reservas</h2>
<table id="tabla_reservas" class="table table-striped table-bordered ">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre cliente</th>
            <th>Apellidos</th>
            <th>Viaje</th>

        </tr>
    </thead>
    <tbody>
        @foreach($reservas as $reserva)
            <tr>
                <td>{{$reserva->id}}</td>
                <th>{{$reserva->nombre}}</td>
                <td>{{$reserva->apellidos}}</td>
                <td>{{$reserva->viaje_id}}</td>
            </tr>
        @endforeach
    </tbody>

</table>
   
@endsection