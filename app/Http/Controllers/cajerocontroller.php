<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cajerocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function metodo()
    {
        //
        return view("vista_cajero");
    }
    public function esta()
    {
        //
        return view("estado_cuenta");
    }
    public function consig()
    {
        //
        return view("consignacion");
    }
    public function estracto()
    {
        //
        return view("estractos");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
