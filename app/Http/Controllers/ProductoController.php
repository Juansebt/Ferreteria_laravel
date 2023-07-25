<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function __construct() {
        $this->middleware('cantidadProducto',['only' => ['store']]);
    }

    /**
     * Display a listing of the resource.
     * Consultar
     */
    public function index()
    {
        return Producto::all();
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
     * Crear
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * Actualizar
     */
    public function update(Request $request, Producto $producto)
    {
        // dd($producto);
        Producto::findOrFail($request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     * Eliminar
     */
    public function destroy(Producto $producto)
    {
        Producto::findOrFail($producto->id)->delete();      
    }
}
