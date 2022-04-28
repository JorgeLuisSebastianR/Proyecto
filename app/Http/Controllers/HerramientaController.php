<?php

namespace App\Http\Controllers;

use App\Models\herramienta;
use App\Http\Requests\StoreherramientaRequest;
use App\Http\Requests\UpdateherramientaRequest;

class HerramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //hola
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
     * @param  \App\Http\Requests\StoreherramientaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreherramientaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function show(herramienta $herramienta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function edit(herramienta $herramienta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateherramientaRequest  $request
     * @param  \App\Models\herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateherramientaRequest $request, herramienta $herramienta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy(herramienta $herramienta)
    {
        //
    }
}
