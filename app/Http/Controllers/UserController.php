<?php

namespace Frota\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function lista() {
        $html = '<h1>Listagem de produtos com Laravel</h1>';
        $html .= '<ul>';
        $usuarios = DB::select('select * from funcionario');
        foreach ($usuarios as $us){
            $html .= '<li> Nome: '. $us->nome. ', e-mail: '.$us->email .'</li>';
        }
        $html .= '</ul>';
        return $html;
    }
}
