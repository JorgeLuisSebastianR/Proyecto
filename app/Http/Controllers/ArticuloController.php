<?php

namespace App\Http\Controllers;

use App\Models\articulo;
use App\Http\Requests\StorearticuloRequest;
use App\Http\Requests\UpdatearticuloRequest;
 
class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $articulos = articulo::all();
       return view('articulos.index',compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorearticuloRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearticuloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearticuloRequest  $request
     * @param  \App\Models\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearticuloRequest $request, articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(articulo $articulo)
    {
        //
    }
}
