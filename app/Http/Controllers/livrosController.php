<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;


class livrosController extends Controller
{
    //views
    public function index()
    {
        $dados = Livro::all();

        return view('index', compact('dados'));
        
    }


    public function cadastro()
    {
        return view('cadastro');
    }

    public function editar(Livro $dados)
    {

        return view('editar', compact('dados'));

    }

    //dados

    public function cadastrar(Request $request)
    {
        $dados = new Livro;

        $dados->nome = $request->nome;
        $dados->autor = $request->autor;
        $dados->editora = $request->editora;
        $dados->save();


        return redirect('/')->with('add', $request->nome);
    }

    public function update(Request $request)
    {
        $dados = Livro::find($request->id);

        $dados->nome = $request->nome;
        $dados->autor = $request->autor;
        $dados->editora = $request->editora;
        $dados->save();

        return redirect ('/')->with('update', $dados->nome);
    }

    public function delete(Livro $dados)
    {
        $dados->delete();
        return redirect('/')->with('remove', $dados->nome);
    }

}
