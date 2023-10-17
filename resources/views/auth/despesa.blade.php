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

    <div>
        <fieldset>
              <form action="{{route('despesa.store', $conta->id)}}" method="POST" class="col-3 mx-auto">
              @csrf

                      <div class="col-2 mt-5 mx-auto">
                        <label class="form-label">Adicionar Despesa</label>
                      </div>

                        <div class="mb-3">
                            <label class="form-label">Valor</label>
                            <input type="number" name="valor" class="form-control" id="valor">       
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tipo</label>
                            <input type="text" name="tipo" class="form-control" id="tipo">       
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Data</label>
                            <input type="date" name="data" class="form-control" id="data">      
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Descrição</label>
                            <input class="form-control" name="descricao" id="descricao">
                        </div>

                
          <div class="d-grid gap-2">
               <button type="submit" class="btn btn-primary">Adicionar Despesa</button>
          </div>


               </form>
          </fieldset>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>