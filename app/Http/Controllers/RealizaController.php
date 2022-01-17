<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Realiza;
use Illuminate\Http\Request;

class RealizaController extends Controller
{
    public function index()
    {
        $realizas = Realiza::all();
        return view('realizas.index', compact('realizas'));
    }

    public function pdf()
    {
        $realizas = Realiza::all();

        $pdf = PDF::loadView('realizas.pdf',['realizas'=>$realizas]);
        set_time_limit(300);
        return $pdf->stream();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('realizas.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Realiza $realiza)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Realiza $realiza)
    {
        //
    }
}
