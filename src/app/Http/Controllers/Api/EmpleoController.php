<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmpleoRequest;
use App\Models\Empleo;
use Illuminate\Http\Request;

class EmpleoController extends Controller
{
    public function create(StoreEmpleoRequest $request){
        try {
            $empleo = Empleo::create($request->all());
            return response()->json([
                'statusCode' => 200,
                'message' => 'Empleo ingresado correctamente',
                'empleo' => $empleo
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'statusCode' => 500,
                'message' => 'No se pudo crear el empleo',
                'error' => $e
            ], 500);
        }
    }

    public function show($id) {
        try{
            $empleo =  Empleo::find($id);
            if(!empty($empleo)) {
                return response()->json([
                    'statusCode' => 200,
                    'empleo' => $empleo
                ], 200);
            } else {
                return response()->json([
                    'statusCode' => 404,
                    'message' => 'Empleo no encontrado'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
            'statusCode' => 500,
            'message' => 'No se pudo crear el empleo',
            'error' => $e
            ], 500);
        }
    }
}
