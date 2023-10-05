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
            <form action="{{route('login.autenticacao')}}" method="POST" class="col-3 mx-auto">
              @csrf
              <div class="col-2 mb-5 mx-auto">
                <legend>Login</legend>
              </div>
<br><br><br>
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
               <button type="submit" class="btn btn-primary">Entrar</button>
          </div>
            </form>
        </fieldset>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>