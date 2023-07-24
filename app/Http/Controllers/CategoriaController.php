<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Categoria::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categoria::create($request->all());
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categoria $categoria)
    {
        Categoria::findOrFail($request->id)->update($request->all());
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        Categoria::findOrFail($categoria->id)->delete();
    }
}
