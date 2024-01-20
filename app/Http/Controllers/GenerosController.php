<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generos;

use Illuminate\Support\Facades\DB;

class GenerosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $g = DB::table("Generos")->get();
        return $g;
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            "NombreGenero" => ["required", "string"]

        ]);

        Generos::create([
            "NombreGenero" => $request->NombreGenero

        ]);

        return to_route("RegistrarG")->with("Mensaje","DSPSMensaje");
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $g = DB::table("Generos")->get();
        return view("RegistrarG", ["todGens"=>$g]);
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
    public function update(Request $request, String $generos)
    {
        $request->validate([
            "NombreGenero" => ["required", "string"]

        ]);

        $generos = Generos::find($generos);

        $generos->update([
            "NombreGenero"=>$request->NombreGenero
        ]);

        return to_route("RegistrarG")->with("Mensaje","Editado!!!!!!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $generos)
    {
        $generos = Generos::find($generos);
        $generos->delete();

        return to_route("RegistrarG")->with("Mensaje","Genero Eliminado");
    }
}
