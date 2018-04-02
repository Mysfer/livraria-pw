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
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Autor</th>
            <th>Editora</th>
            <th></th>
            
            
        </tr>
    </thead>

    <tbody>
        @foreach($dados as $v)
            <tr>
                <td>{{$v->nome}}</td>
                <td>{{$v->autor}}</td>
                <td>{{$v->editora}}</td>
                <td>
                    <a class="btn btn-primary" href="/editar/{{$v>id}}"><span class="fa fa-wrench "></span></a>    
                    <form method="post" style="display: inline;" action="/delete/{{$v->id}}">
                       {{csrf_field()}}
                        <button class="btn btn-danger"><span class="fa fa-trash "></span></button>
                    </form>
                   
                </td>
                
            </tr>
        @endforeach
    </tbody>

</table>
        </div>
    </div>
</div>

</body>
</html>