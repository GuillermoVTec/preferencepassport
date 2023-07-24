<?php

namespace App\Http\Controllers;

use App\Models\DetallesDePago;
use App\Models\detalles_de_pagos;

use Illuminate\Http\Request;

/**
 * Class DetallesDePagoController
 * @package App\Http\Controllers
 */
class DetallesDePagoController extends Controller
{
            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detallesDePagos = DetallesDePago::paginate();

        return view('detalles-de-pago.index', compact('detallesDePagos'))
            ->with('i', (request()->input('page', 1) - 1) * $detallesDePagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detallesDePago = new DetallesDePago();
        return view('detalles-de-pago.create', compact('detallesDePago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetallesDePago::$rules);

        $detallesDePago = DetallesDePago::create($request->all());

        return redirect()->route('indexddp')
            ->with('success', 'DetallesDePago created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detallesDePago = DetallesDePago::find($id);

        return view('detalles-de-pago.show', compact('detallesDePago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detallesDePago = DetallesDePago::find($id);

        return view('detalles-de-pago.edit', compact('detallesDePago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetallesDePago $detallesDePago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $ddp = detalles_de_pagos::find($id); 
         $ddp->fecha_de_pago=$request->input('fecha_de_pago2');
         $ddp->cantidad=$request->input('cantidad2');
         $ddp->concepto=$request->input('conceptop2');
         $ddp->status_de_pago=$request->input('status_de_pago2');
         $ddp->pago_asignado=$request->input('pago_asignado2');
         $ddp->num_aprovacion=$request->input('num_aprovacion2');
         $ddp->forma_de_pago=$request->input('formaPago2' ) == 'nuevatarjeta';

         $ddp->forma_de_pago=$request->input('formaPago2');            
         $ddp->nota=$request->input('notap2');
         //$ddp->comprovante=$request->comprovante->getClientOriginalName();
         //$ddp->addMediaFromRequest('comprovante')->toMediaCollection('comprovantes');
         $ddp->update();

        //var_dump($request->input('fecha_de_pago2'));

        return redirect()->route('indexddp')
            ->with('success', 'DetallesDePago updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detallesDePago = DetallesDePago::find($id)->delete();

        return redirect()->route('detalles-de-pagos.index')
            ->with('success', 'DetallesDePago deleted successfully');
    }
}
