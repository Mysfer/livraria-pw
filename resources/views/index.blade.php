<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <title>Document</title>
    </head>
    <body>
            <div>

                <div class="container">
                    @if (session('add') == '')

                    @else
                        <div class="alert alert-success">Livro {{session('add')}}, cadastrado com sucesso</div>
                    @endif

                    @if (session('remove') == '')

                    @else
                        <div class="alert alert-danger">Livro {{session('remove')}}, removido com sucesso</div>
                    @endif

                    @if (session('update') == '')

                    @else
                        <div class="alert alert-primary">Livro {{session('update')}}, editado com sucesso</div>
                    @endif

                        <div class="row">
                            <div class="col-8">
                            <h1 class="display-3">Livros</h1>
                            <p>
                                <a href="/cadastro" class="btn btn-primary">Cadastrar</a>
                                 </p>
                                 <table class="table table-striped">
                                 <thead>
                                <tr>
                            <th>Nome</th>
                            <th>Autor</th>
                            <th>Editora</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($dados as $v)
                            <tr>
                                <td>{{$v->nome}}</td>
                                <td>{{$v->autor}}</td>
                                <td>{{$v->editora}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/editar/{{$v->id}}"><span class="fa fa-wrench "></span></a>    
                                    <form method="post" style="display: inline;" action="/delete/{{$v->id}}">
                                    {{csrf_field()}}
                                        <button class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar esse registro?'); return false;"><span class="fa fa-trash "></span></button>
                                    </form>
                                
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </body>
</html>
