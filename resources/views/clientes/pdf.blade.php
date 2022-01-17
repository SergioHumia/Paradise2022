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

    <h1 id="titulop">Clientes</h1>
        <table id="tabla_clientes" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Fecha Nacimiento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->f_nacimiento}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

@endsection