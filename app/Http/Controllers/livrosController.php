<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class livrosController extends Controller
{
    public function index()
    {
        $dados = Livro::all();

        return view('index', compact('dados'));
        
    }


    public function cadastro()
    {
        return view('cadastro');
    }

    public function cadastrar(Request $request)
    {
        $dados = new Livro;

        $dados->nome = $request->nome;
        $dados->autor = $request->autor;
        $dados->editora = $request->editora;
        $dados->save();

        return redirect ('/');
    }
}
