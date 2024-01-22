<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personaje;
use App\Models\Jugador;
use App\Models\Inventario;


class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("personajes.index", ["personajes"=>Personaje::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("personajes.create", ["jugadores"=>Jugador::all(), "inventarios"=>Inventario::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Personaje::create(
            [
            "nombre" => $request->nombre,
            "descripción" => $request->descripción,
            "jugador_id" => $request->jugador,
            "inventario_id" => $request->inventario
            ]
        );

        return redirect()->route("personajes.index");
    }


    /**
     * Display the specified resource.
     */
    public function show(Personaje $personaje)
    {
        return view("personajes.show", ["personaje"=> $personaje]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personaje $personaje)
    {
        return view("personajes.edit", ["personajes" => $personaje, "jugadores"=>Jugador::all(), "inventarios"=>Inventario::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personaje $personaje)
    {
        $personaje->update(
            [
            "nombre" => $request->nombre,
            "descripción" => $request->descripción,
            "jugador_id" => $request->jugador,
            "inventario_id" => $request->inventario
            ]
        );

        return redirect()->route("personajes.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personaje $personaje)
    {
        Personaje::destroy($personaje->id);
        return redirect()->route("personajes.index");

    }
}
