<?php

namespace App\Http\Controllers;

use App\Models\MateriaPrima;
use App\Http\Requests\StoreMateriaPrimaRequest;
use App\Http\Requests\UpdateMateriaPrimaRequest;

class MateriaPrimaController extends Controller
{

    public function index()
    {
        //
        return view('materiaprimas.index')->with('materiaprimas', MateriaPrima::all());
    }

    public function create()
    {
        //
        return view('materiaprimas.create');
    }

    public function store(StoreMateriaPrimaRequest $request)
    {
        //
        $request->validate([
            'tipo' => 'required',
            'nombre' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'cantidad' => 'required',
            'alto' => 'required',
            'largo' => 'required',
            'ancho' => 'required'
        ]);

        MateriaPrima::create([
            'tipo' => $request->tipo,
            'nombre' => $request->nombre,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'cantidad' => $request->cantidad,
            'alto' => $request->alto,
            'largo' => $request->largo,
            'ancho' => $request->ancho
        ]);
        return redirect()->route('materiaPrima.index');
    }

    public function show(MateriaPrima $materiaPrima)
    {
        //
        return view('materiaPrimas.show', compact('materiaPrima'));
    }

    public function edit(MateriaPrima $materiaPrima)
    {
        //
        return view('materiaPrimas.show', compact('materiaPrima'));
    }


    public function update(UpdateMateriaPrimaRequest $request, MateriaPrima $materiaPrima)
    {
        //
        $request->validate([
            'tipo' => 'required',
            'nombre' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'cantidad' => 'required',
            'alto' => 'required',
            'largo' => 'required',
            'ancho' => 'required'
        ]);

        $materiaPrima->update($request->all());
        return redirect()->route('materiaPrima.index');
    } /// aquí me quede xd ----------------------------------------------------------------------------------

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function destroy(MateriaPrima $materiaPrima)
    {
        //
    }
}
