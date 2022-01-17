<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    public function pdf()
    {
        $reservas = Reserva::all();

        $pdf = PDF::loadView('reservas.pdf',['reservas'=>$reservas]);
        set_time_limit(300);
        return $pdf->stream();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id'            => 'required',
            'nombre'        => 'required',
            'apellidos'     => 'required',
            'viaje_id'      => 'required',
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $reserva = Reserva::find($id);
        return view('reservas.edit', compact('reserva'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id'            => 'required',
            'nombre'        => 'required',
            'apellidos'     => 'required',
            'viaje_id'      => 'required',
        ]);

        $reserva = Reserva::find($id);
        $reserva->update($request->all());

        return redirect()->route('reservas.index');
    }

    public function destroy(Reserva $reserva)
    {
        Reserva::find($reserva->id)->delete();
        return redirect()->route('reservas.index');
    }
}