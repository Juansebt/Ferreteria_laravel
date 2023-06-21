<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class inicioC extends Controller
{
    public function saludar($nombre)
    {
        //Logica del BackEnd - CRUD
        // echo "Hola desde el controlador ".$nombre;
        return view('inicio', ['nombre' => $nombre]);
    }
}