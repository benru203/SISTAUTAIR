<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bloque;


class BloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $bloques = Bloque::orderBy('id','ASC')->paginate(5);
    return view('Admin.Bloque.index')->with('bloques',$bloques);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Bloque.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bloque = new Bloque();
        $bloque->nombre = $request->nombre;
        $bloque->num_aulas = $request->num_aulas;
        $bloque->save();
        return redirect()->route('Administracion.Bloque.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bloque = Bloque::find($id);
        return view('Admin.Bloque.edit')->with('bloque',$bloque);
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
      $bloque = Bloque::find($id);
      $bloque->nombre = $request->nombre;
      $bloque->num_aulas = $request->num_aulas;
      $bloque->save();
        return redirect()->route('Administracion.Bloque.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bloque = BLoque::find($id);
        $bloque->delete();
        return redirect()->route('Administracion.Bloque.index');
    }
}
