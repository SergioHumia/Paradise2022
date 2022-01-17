<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function pdf()
    {
        $clientes = Cliente::all();

        $pdf = PDF::loadView('clientes.pdf',['clientes'=>$clientes]);
        set_time_limit(300);
        return $pdf->stream();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id'                => 'required',
            'nombre'            => 'required',
            'apellidos'         => 'required',
            'email'             => 'required|email',
            'telefono'          => 'required',
            'f_nacimiento'      => 'required|date_format:d-m-Y|before:01-01-2005',
        ]);

        Cliente::create($request->all());

        return redirect()->route('clientes.index');
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id'                => 'required',
            'nombre'            => 'required',
            'apellidos'         => 'required',
            'email'             => 'required|email',
            'telefono'          => 'required',
            'f_nacimiento'      => 'required|date-format:d-m-Y|before:01-01-2005',
        ]);

        $cliente = Cliente::find($id);
        $cliente->update($request->all());

        return redirect()->route('clientes.index');
    }

    public function destroy(Cliente $cliente)
    {
        Cliente::find($cliente->id)->delete();
        return redirect()->route('clientes.index');
    }
}
