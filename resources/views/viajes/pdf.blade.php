@extends("layouts.app3")
@section("contenido")

    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 10px;
        }
        #titulop{
            text-align:center;
        }
    </style>

<h2 id="titulop">Viajes</h2>
        <table id="tabla_viajes" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Viaje</th>
                    <th>Lugar</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($viajes as $viaje)
                    <tr>
                        <td>{{$viaje->id}}</td>
                        <td>{{$viaje->lugar}}</td>
                        <th>{{$viaje->precio}}€</td>
                        <td>{{$viaje->fecha}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>

@endsection