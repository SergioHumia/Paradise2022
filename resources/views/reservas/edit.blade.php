@extends("layouts.app4")

@section("contenido")
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h3>Editar cliente </h3>
    <form action="{{url('/reservas/')}}/{{$reserva->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$reserva->id}}" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$reserva->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$reserva->apellidos}}">
        </div>
        <div class="form-group">
            <label for="viaje_id">Código Viaje</label>
            <input type="text" class="form-control" id="viaje_id" name="viaje_id" placeholder="viaje_id" value="{{$reserva->viaje_id}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/reservas')}}" class="btn btn-secondary">Cancelar</a>
@endsection