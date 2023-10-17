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
       
      
        @foreach ($receitas as $receita)
            
       
        <tr>
            <tbody>
                <td>{{$receita->valor}}</td>
                <td>{{$receita->data}} </td>
                <td>{{$receita->descricao}}</td>
                <td> <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$receita->id}}" data-bs-whatever="@getbootstrap">Editar Receita</button></td>
             
                <form action="{{route('receita.delete', $receita->id)}}" method="POST">
                  @method("delete") @csrf
                <td> <button class="btn btn-danger">Excluir Receita</button></td>
              </form>

                
            </tbody>
        </tr>
        <div class="modal fade" id="exampleModal-{{$receita->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5">Editar Receita</h1>
               
              </div>
              <div class="modal-body">
                <form action="{{route('receita.update', $receita->id)}}" method="POST">
                    @method('put')
                   @csrf
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Valor:</label>
                    <input type="Number" class="form-control" name="valor" value="{{$receita->valor}}">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Data:</label>
                    <input type="date" class="form-control" name="data" value="{{$receita->data}}">
                  </div>
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Descrição:</label>
                    <input type="text" class="form-control" name="descricao" value="{{$receita->descricao}}">
                  </div>
        
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-primary">
                  </div>
                </form>
              </div>
             
            </div>
          </div>
        </div>
        @endforeach
    </table>
  
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>