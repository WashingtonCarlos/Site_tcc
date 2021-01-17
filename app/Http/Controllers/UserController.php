<?php

namespace Frota\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function lista() {

        $usuarios = DB::table('funcionario')->paginate(10);
        return view('administrativo')->with('usuarios',$usuarios);

    }

}
