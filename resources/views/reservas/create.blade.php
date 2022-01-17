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
    <h3>Nueva reserva</h3>
    <form action="{{route('reservas.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="ID" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" >
        </div>
        <div class="form-group">
            <label for="viaje_id">Código Viaje</label>
            <input type="text" class="form-control" id="viaje_id" name="viaje_id" placeholder="Código viaje" >
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/reservas')}}" class="btn btn-secondary">Volver</a>
    </form>
@endsection