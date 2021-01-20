<?php

namespace Frota\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function lista() {

        $usuarios = DB::table('funcionario')->paginate(4);
        return view('administrativo')->with('usuarios',$usuarios);

    }

    public function mostrar($id) {


        $usuario = DB::select('select * from funcionario wherer id = ',$id);
        return view('visualiza_usuario')->with('usua',$usuario);
    }

}
