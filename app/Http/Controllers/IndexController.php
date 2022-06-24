<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //un controlador no es mas que un metodo 
    //creacion de un controlador
    // constructor  __invoke
    public function index(){
      return view('index');
  }
    public function create(){
      return view('/login/registro');
    }

    public function store(Request $request){
      $usuarios=new Usuarios();

      $usuarios->nombre=$request->nombre;
      $usuarios->paterno=$request->paterno;
      $usuarios->materno=$request->materno;
      $usuarios->sexo=$request->sexo;
      $usuarios->telefono=$request->telefono;
      $usuarios->email=$request->email;
      $usuarios->usuario=$request->usuario;
      $usuarios->password=$request->password;

      
      $usuarios->save();
      return redirect()->route('principalCursos',$usuarios);
  }
}

