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
            <form action=")}}" method="POST" class="col-3 mx-auto">
              @csrf
              <div class="col-2 mt-5 mx-auto">
                <label class="form-label">Adicionar receita</label>
              </div>
                <div class="mb-3">
                    <label class="form-label">Valor</label>
                    <input type="text" value="$" name="valor" class="form-control" id="valor">
                    <div id="emailHelp" class="form-text"></div>               
                </div>
                <div class="mb-3">
                    <label class="form-label">Data</label>
                    <input type="date" name="data" class="form-control" id="data">      
                </div>

                <div class="mb-3">
                    <textarea cols="30" rows="4" class="form-label" name="descricao" id="descricao"> </textarea>
                </div>

          <div>
               <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
            </form>
        </fieldset>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>