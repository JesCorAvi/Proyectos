<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("peliculas.index", ["peliculas"=>Pelicula::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("peliculas.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelicula::create(["titulo" => $request->titulo]);

        return redirect()->route("peliculas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //$listaProyecciones = $pelicula->proyecciones;
        //$acc = 0;
        //foreach($listaProyecciones as $proyec){
        //    $acc += $proyec->entradas->count();
        //}
        //return view("peliculas.show", ["pelicula"=>$pelicula, "totalEntrada"=>$acc]);
        $acc = $pelicula->proyecciones->flatMap->entradas->count();
        return view("peliculas.show", ["pelicula"=>$pelicula, "totalEntrada"=>$acc]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        return view("peliculas.edit", ["pelicula"=>$pelicula]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $acc = $pelicula->proyecciones->flatMap->entradas->count();
        if(!$acc)
            $pelicula->update(["titulo" => $request->titulo]);
        return redirect()->route("peliculas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        $acc = $pelicula->proyecciones->flatMap->entradas->count();
        if(!$acc)
            Pelicula::destroy($pelicula->id);
        return redirect()->route("peliculas.index");
    }
}
