<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Controle de Gastos</a>
            </div>
          </nav>
    </div>
    

 

    <table class="mt-4 table table-striped">

        <thead class="table-dark">
            <th>Conta</th>
            <th>Receita</th>
            <th>Despesa</th>
            <th>Adicionar Despesa</th>
            <th>Adicionar Receita</th>
            <th>Saldo</th>
        </thead>
       
        @foreach ($contas as $conta)
        
        <tr>
            <tbody>
                <td>{{$conta->nome}}</td>
                <td><a href="{{route('receita.edit', $conta->id)}}">Ver Receita</a></td>
                <td><a href="{{route('despesa.edit', $conta->id)}}">Ver Despesas</a></td>
                <td><a href="{{route('despesa', $conta->id)}}"> <button class="btn btn-danger">Adicionar Despesa</button></a></td>
                <td><a href="{{route('receita.create', $conta->id)}}"> <button class="btn btn-success">Adicionar Receita</button></a></td>
                <td>{{$conta->saldo}}</td>
            </tbody>
        </tr>
        @endforeach
    </table>
    
    <div class=" col-1 mx-auto mb-3">
        <a href="{{route('conta.create')}}"><button class="btn btn-primary">Criar conta</button></a>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>