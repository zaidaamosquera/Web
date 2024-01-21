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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $GenContr = new GenerosController();
        $ProduContr = new ProductoraController();

        $allgen = $GenContr->index();
        $allPro = $ProduContr->index();

        return view("RegistroPeliculas", ["GenerContr" => $allgen, "ProduContr" => $allPro]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "TituloPeliculas" => ["required", "string"],
            "FechaEstreno" => ["required", "date"]
        ]);


        Pelicula::create([
            "TituloPeliculas" => $request->TituloPeliculas,
            "FechaEstreno" => $request->FechaEstreno,
            "Generos_idGeneros" => $request->Generos_idGeneros,
            "Productoras_idProductoras" => $request->Productoras_idProductoras
        ]);

        return to_route("RegistroPelicula")->with("Mensaje","DSPSMensaje");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
