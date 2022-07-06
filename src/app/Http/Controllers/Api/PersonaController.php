<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePersonaRequest;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function store(StorePersonaRequest $request){
        try {
            $persona = Persona::create($request->all());
            return response()->json([
                'statusCode' => 200,
                'message' => 'Ingresado correctamente',
                'persona' => $persona
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 500,
                'message' => 'No se pudo crear la persona',
                'error' => $e
            ], 500);
        }
    }

    public function show($id) {
        try{
            $persona =  Persona::find($id);
            if(!empty($persona)) {
                return response()->json([
                    'statusCode' => 200,
                    'empleo' => $persona
                ], 200);
            } else {
                return response()->json([
                    'statusCode' => 404,
                    'message' => 'Persona no econtrada'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 500,
                'message' => 'Error',
                'error' => $e
            ], 500);
        }
    }
}
