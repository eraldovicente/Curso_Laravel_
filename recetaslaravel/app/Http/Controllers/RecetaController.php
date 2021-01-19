<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $receta = [
            'nombre' => 'Pizza Hawaiana',
            'descripcion' => 'Prepara la mejor pizza'
        ];

        return $receta;
    }
}