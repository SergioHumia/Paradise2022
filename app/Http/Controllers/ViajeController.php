<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
    public function index()
    {
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));
    }

    public function pdf()
    {
        $viajes = Viaje::all();

        $pdf = PDF::loadView('viajes.pdf',['viajes'=>$viajes]);
        set_time_limit(300);
        return $pdf->stream();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('viajes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id'                => 'required',
            'lugar'             => 'required',
            'precio'            => 'required',
            'fecha'             => 'required|date_format:d-m-Y',
        ]);

        Viaje::create($request->all());

        return redirect()->route('viajes.index');
    }

    public function show(Viaje $viaje)
    {
        //
    }

    public function edit($id)
    {
        $viaje = Viaje::find($id);
        return view('viajes.edit', compact('viaje'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id'                => 'required',
            'lugar'             => 'required',
            'precio'            => 'required',
            'fecha'             => 'required|date_format:d-m-Y',
        ]);

        $viaje = Viaje::find($id);
        $viaje->update($request->all());

        return redirect()->route('viajes.index');
    }

    public function destroy(Viaje $viaje)
    {
        //
    }
}
