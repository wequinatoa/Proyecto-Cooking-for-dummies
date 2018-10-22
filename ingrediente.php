<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ingrediente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ing = new Ingredientes();
        $listaIngredientes = Ingredientes::all();
        return view ('/inicio',compact('$listaIngredientes'));
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
        $ing = new Ingredientes();
        $ing->nombre = $request->input('nombre');
        $ing->apellido = $request->input('descripcion');
        $ing->cedula = $request->input('tipo');
        $ing->direccion = $request->input('categoria');
        $ing->save();

        return "Ingrediente Guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ing = new Ingredientes();
        $ing =Ingredientes::find($id);
        return view('buscar',$ing);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ing = new Ingredientes();
        $ing =Ingredientes::find($id);
        return view('buscar',$ing);
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
        $ing = new Ingredientes();
        $ing =Ingredientes::destroy($id);
        return view('eliminar',$ing);
    }
}
