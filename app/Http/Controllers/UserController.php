<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('Admin.User.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.User.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $nombre='';
        if ($request->file('imagen')){
          $file = $request->file('imagen');
          $nombre = 'Foto_perfil_'.$request->name.time().'.'.$file->getClientOriginalExtension();
          $path = public_path().'/Imagenes/Usuarios/';
          $file->move($path,$nombre);
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->tipo = $request->tipo;
        $user->foto = $nombre;
        $user->save();
        return redirect()->route('Administracion.Usuario.index');
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
        $user = User::find($id);
        return view('Admin.User.edit')->with('user',$user);
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
        $nombre="";
        $user = User::find($id);
        if ($request->file('imagen')){
          $file = $request->file('imagen');
          $nombre = 'Foto_perfil_'.$request->name.time().'.'.$file->getClientOriginalExtension();
          $path = public_path().'/Imagenes/Usuarios/';
          $file->move($path,$nombre);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tipo = $request->tipo;
        if($nombre!=""){
          $user->foto = $nombre;
        }

        $user->save();
        return redirect()->route('Administracion.Usuario.index');
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
        $user = User::find($id);
        $user->delete();
        return redirect()->route('Administracion.Usuario.index');
    }
}
