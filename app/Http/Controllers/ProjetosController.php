<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projetos;

class ProjetosController extends Controller
{
    public function cadastroUsuario( Request $dados){
        // dd($dados->all()); // comando pra ver os dados

        $Projetos = new Projetos();
        $Projetos->nome = $dados->nome;
        $Projetos->email = $dados->email;
        $Projetos->senha = $dados->senha;

        $Projetos->save();

        return redirect("/inicio");
    }

    public function checaUsuario( Request $forms )
    {
        $Projetos = new Projetos();

        #$dados = $Projetos->all();

        $dados = $Projetos->where('email','=','jessica@gmail.com')->first();

        if ($dados->email == $forms->email){
            // dd($dados);
            return redirect("/inicio");
        }
        else {
            return redirect("/conecte?erro");
        }
    }
}
