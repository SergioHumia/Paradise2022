@extends("layouts.app2")
@section("contenido")
       <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="principal">
                <h1><span>E</span><span>X</span><span>C</span><span>U</span><span>R</span><span>S</span><span>I</span><span>O</span><span>N</span><span>E</span><span>S</span><span> </span><span>P</span><span>A</span><span>R</span><span>A</span><span>D</span><span>I</span><span>S</span><span>E</span></h1>
            </div>
            <div class="text-center">
                <h2>
                    <img src="https://terrenasparadise.com/wp-content/uploads/2016/06/como-viajar-avion-gif.gif" HSPACE="20" VSPACE="20">
                    <img src="https://c.tenor.com/gbzL6alCKy8AAAAd/boats-sailing.gif" HSPACE="20" VSPACE="20">
                </h2>
                <a class="btn btn-success" href="{{ route('clientes.index') }}">Clientes</a>
                <a class="btn btn-success" href="{{ route('viajes.index') }}">Viajes</a>
                <a class="btn btn-success" href="{{ route('reservas.index') }}">Reservas</a>
                <a class="btn btn-success" href="{{ route('realizas.index') }}">Viajes a realizar</a>
            </div>
        </div>
    </div>
@endsection
