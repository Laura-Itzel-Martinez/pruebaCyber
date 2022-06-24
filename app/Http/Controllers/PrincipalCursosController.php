<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalCursosController extends Controller
{
    public function principalCursos(){
        return view('principalCursos');
    }
}
