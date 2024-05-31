<?php

namespace App\Http\Controllers;

use App\Models\Reparaciones;
use Illuminate\Http\Request;

class ReparacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function soporte()
     {
         return view("soporteTecnico.soporteTecnico");
     }

     
    public function index()
    {
        //
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
    public function show(Reparaciones $reparaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reparaciones $reparaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reparaciones $reparaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reparaciones $reparaciones)
    {
        //
    }
}
