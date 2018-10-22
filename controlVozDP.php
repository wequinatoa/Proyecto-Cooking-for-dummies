<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlVozDP extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ControlVoz = new Voz();
        $lista = Voz::all();
        return view ('/inicio',compact('$lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ControlVoz = new Voz();
        $ControlVoz->comando = $request->input('voz');
        //$ControlVoz->apellido = $request->input('descripcion');
        //$ControlVoz->cedula = $request->input('tipo');
        //$ControlVoz->direccion = $request->input('categoria');
        //$ControlVoz->save();

       // return "Cliente Guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ControlVoz = new Voz();
        $ControlVoz =Voz::find($id);
        return view('buscar',$ControlVoz);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
