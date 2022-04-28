<?php

namespace App\Http\Controllers;

use App\Models\MateriaPrima;
use App\Http\Requests\StoreMateriaPrimaRequest;
use App\Http\Requests\UpdateMateriaPrimaRequest;

class MateriaPrimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreMateriaPrimaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMateriaPrimaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function show(MateriaPrima $materiaPrima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function edit(MateriaPrima $materiaPrima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMateriaPrimaRequest  $request
     * @param  \App\Models\MateriaPrima  $materiaPrima
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMateriaPrimaRequest $request, MateriaPrima $materiaPrima)
    {
        //
    }

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
