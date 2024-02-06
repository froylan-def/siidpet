<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ugi;

class UgiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ugis = Ugi::all();
        return response($ugis);
        //return csrf_token(); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //return csrf_token(); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $request->validate([
            'nombre' => 'required',
        ]);

        $ugi = Ugi::create( $request->all() );

        // Puedes realizar otras acciones después de la creación, como redireccionar o devolver una respuesta JSON
        return response()->json(['mensaje' => 'Objeto creado con éxito', 'objeto' => $ugi ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ugi = Ugi::find($id);

        if (!$ugi) {
            return response()->json(['mensaje' => 'Ugi no encontrado'], 404);
        }

        return response()->json(['ugi' => $ugi], 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Encontramos el dato con el id
        $ugi = Ugi::find($id);

        // Verifica si el usuario existe
        if (!$ugi) {
            return response()->json(['mensaje' => 'Usuario no encontrado'], 404);
        }

        // Actualiza los datos con los nuevos datos proporcionados
        $ugi->update($request->all());

        // Puedes devolver una respuesta JSON, un mensaje de éxito, etc.
        return response()->json(['mensaje' => 'Datos actualizados con éxito']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return response()->json(['mensaje' => 'ALGO DE RESPUESTA EN DELETE'], 201);
        // Buscar el usuario por su ID
        $ugi = Ugi::find($id);

        // Verificar si el usuario existe
        if ($ugi) {
            // Eliminar el usuario
            $ugi->delete();
            return response()->json(['mensaje' => 'Ugi eliminado correctamente'], 201);
        } else {
            return response()->json(['mensaje' => 'No se ha encontrado el Ugi correspondiente'], 201);
        }
    }
}
