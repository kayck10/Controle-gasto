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
    
        <h2 class="mt-5 col-1 mx-auto">Conta</h2>

    <table class="table table-striped">
        <thead class="table-dark">
            <th>Valor</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Saldo</th>
        </thead>

        <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
    </table>
    <div class="col-3 mx-auto">
            <a href="{{route('receita.create')}}"><button class="btn  btn-info">Adicionar Receita</button></a>
            <a href=""><button class="btn btn-danger">Adicionar Despesa</button></a>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>