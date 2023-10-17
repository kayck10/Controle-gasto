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
              <a class="navbar-brand" href="#">Controle de Gastos</a>
            </div>
          </nav>
    </div>

    <div>
        <fieldset>
            <form action="{{route('conta.store')}}" method="POST" class="col-3 mx-auto">
                @csrf

                <legend>Cadastrar Conta</legend>
                
                <div class="mb-3">
                    <label class="form-label">Nome da instituição</label>
                    <input type="text" name="name" class="form-control" id="nome">
                    <div class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Saldo da Conta</label>
                    <input type="text" name="saldo" class="form-control" id="saldo">                
                </div>

          <div>
               <a class="d-grid gap-2" href="{{route('index.usuario')}}"> <button type="submit" class="btn btn-block btn-primary">Cadastrar</button></a>
          </div>

            </form>
        </fieldset>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>