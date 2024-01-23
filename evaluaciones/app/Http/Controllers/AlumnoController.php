<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Ce;
use App\Models\Nota;



class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view("alumnos.index", ["alumnos"=>Alumno::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("alumnos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Alumno::create(["nombre"=>$request->nombre]);
        return redirect()->route("alumnos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumno $alumno)
    {
        return view("alumnos.show", ["alumnos"=>$alumno]);
    }

    public function criterio(Alumno $alumno)
    {
        return view("alumnos.show", ["alumnos"=>$alumno]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view("alumnos.edit", ["alumnos"=>$alumno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update(["nombre"=>$request->nombre]);
        return redirect()->route("alumnos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        Alumno::destroy($alumno->id);
        return redirect()->route("alumnos.index");

    }
    public function criterios(Alumno $alumno)
    {
        $not = $alumno->notas;
        return view("alumnos.criterios", ["alumnos"=>$alumno, "notas" => $not]);

    }

}
