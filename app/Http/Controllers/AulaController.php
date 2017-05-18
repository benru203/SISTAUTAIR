<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aula;
use App\Bloque;
use App\Horario;

class AulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $aulas = Aula::orderBy('id','ASC')->paginate(5);
      $aulas->each(function($aulas){
        $aulas->bloque;
      });

      return view('Admin.Aula.index')->with('aulas',$aulas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bloques = Bloque::orderBy('id','ASC')->lists('nombre','id');
        $horarios = Horario::all();
        //dd($horarios);
        return view('Admin.Aula.create')->with('bloques',$bloques)->with('horarios',$horarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aula = new Aula();
        $aula->nombre = $request->nombre;
        $aula->bloque_id = $request->bloque_id;
        $aula->save();
        return redirect()->route('Administracion.Aula.index');
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
        //
        $aula = Aula::find($id);
        $aula->bloque;
        $bloques = Bloque::orderBy('id','ASC')->lists('nombre','id');
        return view('Admin.Aula.edit')->with('aula',$aula)->with('bloques',$bloques);
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
        $aula = Aula::find($id);
        $aula->nombre = $request->nombre;
        $aula->bloque_id = $request->bloque_id;
        $aula->save();
        return redirect()->route('Administracion.Aula.index');
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
        $aula = Aula::find($id);
        $aula->delete();
        return redirect()->route('Administracion.Aula.index');
    }
}
