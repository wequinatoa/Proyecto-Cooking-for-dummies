<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recetasDP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receta = new Receta();
        $listaRecetas = Receta::all();
        return view ('/inicio',compact('$listaRecetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receta = new Receta();
        $receta->nombre = $request->input('titulo');
        $receta->apellido = $request->input('descripcion');
        $receta->cedula = $request->input('tipo');
        $receta->direccion = $request->input('categoria');
        $receta->save();

        return "Cliente Guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $receta = new Receta();
       $receta =Receta::find($id);
       return view('buscar',$receta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receta = new Receta();
        $receta =Receta::find($id);
        return view('buscar',$receta);
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
        Receta::where('id', $id)
        ->update(['delayed' => 1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receta = new Receta();
        $receta =Receta::destroy($id);
        return view('eliminar',$receta);
    }
}
