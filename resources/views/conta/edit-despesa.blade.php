<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

    <div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Controle Gasto</a>
            </div>
            <a href="{{route('index.usuario')}}">Voltar</a>
          </nav>
    </div>

   
    <table class="mt-4 table table-striped">

        <thead class="table-dark">
            <th>Valor da Receita</th>
            <th>Data</th>
            <th>Descrição</th>
            <th>Editar Receita</th>
            <th>Excluir Receita</th>
        </thead>
       
      @foreach ($despesas as $despesa)
          
      
        
        <tr>
            <tbody>
                <td>{{$despesa->valor}}</td>
                <td>{{$despesa->data}} </td>
                <td>{{$despesa->descricao}}</td>
                <td> <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$despesa->id}}" data-bs-whatever="@getbootstrap">Editar Receita</button></td>
             
                <form action="{{route('despesa.delete', $despesa->id)}}" method="POST">
                    @method('delete') @csrf
                <td> <button class="btn btn-danger">Excluir Despesa</button></td>
               </form>
             
            </tbody>
        </tr>
        <div class="modal fade" id="exampleModal-{{$despesa->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">Editar despesa</h1>
                 
                </div>
                <div class="modal-body">
                  <form action="{{route('despesa.update', $despesa->id)}}" method="POST">
                      @method('put')
                     @csrf
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Valor:</label>
                      <input type="Number" class="form-control" name="valor" value="{{$despesa->valor}}">
                    </div>
                    <div class="mb-3">
                      <label for="message-text" class="col-form-label">Data:</label>
                      <input type="date" class="form-control" name="data" value="{{$despesa->data}}">
                    </div>
                    <div class="mb-3">
                      <label for="recipient-name" class="col-form-label">Descrição:</label>
                      <input type="text" class="form-control" name="descricao" value="{{$despesa->descricao}}">
                    </div>
          
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                      <input type="submit" class="btn btn-primary">
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
        @endforeach
    </table>
  
    </div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>