<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Models\Respuestas;
use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preguntas = Preguntas::all();
        return view('preguntas_respuestas.preguntas.index',compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $respuestas = Respuestas::all();
        return view('preguntas_respuestas.preguntas.create',compact('respuestas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Preguntas::create([
            'pregunta' => $request->pregunta,
            'estado' => $request->estado,
            
        ]);

        // Preguntas::create([

        // ]);

        return redirect('/preguntas')->with('message','Pregunta agregada');
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
