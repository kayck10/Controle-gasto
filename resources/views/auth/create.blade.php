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
            <form action="{{route('registrar.store')}}" method="POST" class="col-3 mx-auto">
              
                <legend>Cadastro</legend>

                @csrf

                <div class="mb-3">

                    <label class="form-label">Nome</label>
                    <input type="text" name="name" class="form-control" id="nome">
                    <div class="form-text"></div>

                </div>

                <div class="mb-3">

                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                
                </div>

                <div class="mb-3">

                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" id="password">
             
                </div>

          <div>
               <a class="d-grid gap-2" href="{{route('login.usuario')}}"> <button type="submit" class="btn btn-block btn-primary">Cadastrar</button></a>
          </div>


            </form>
        </fieldset>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>