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
    <form action="{{url('/viajes/')}}/{{$viaje->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{$viaje->id}}" readonly>
        </div>
        <div class="form-group">
            <label for="lugar">Lugar</label>
            <input type="text" class="form-control" id="lugar" name="lugar" placeholder="lugar" value="{{$viaje->lugar}}">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" placeholder="precio" value="{{$viaje->precio}}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="{{$viaje->fecha}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/viajes')}}" class="btn btn-secondary">Cancelar</a>
@endsection