<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://bootswatch.com/4/lumen/bootstrap.min.css" rel="stylesheet">
        <title>Página de atualização</title>
    </head>
        <body>

            <div class="container">
                <div class="row">
                    <div class="col-8">
                    <h1 class="display-3">Atualização dos Dados</h1>

            <form action="/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $dados->id }}">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" value="{{ $dados->nome }}" type="text" id="nome" name="nome">
            </div>
            
            <div class="form-group">
            
                <label for="autor">Autor</label>
                <input class="form-control" value="{{ $dados->autor }}" type="text" id="autor" name="autor">
                </div>
            
                <div class="form-group">
                    <label for="editora">Editora</label>
                    <input class="form-control" value="{{ $dados->editora }}" type="text" id="editora" name="editora">
                </div>
                
                <button class="btn btn-primary">Atualizar</button>
            </form>
                    
                    </div>
                </div>
            </div>

    
        </body>
</html>