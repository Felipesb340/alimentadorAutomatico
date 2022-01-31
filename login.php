<!DOCTYPE html>
<html lang="en" style="height: 100%;" class="d-flex flex-column align-self-center">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <title>Fishmatic</title>
</head>

<body class="bg-primary d-flex flex-column mt-5" style="height: 100%;">
  <div class="container text-center mt-8 d-flex flex-column ">
    <h1 class="text-white"><a href="./home_alimentador.php" class="badge badge-primary">Fishmatic</a></h1>
    <form style="background-color: #87CEFA;" class="p-5 rounded">
      <div class="form-group rounded">
        <label for="exampleInputEmail1">Acesse sua conta</label>
        <input type="email" class="form-control" id="newUserEmail" aria-describedby="emailHelp" placeholder="Digite seu email">
      </div>
      <div class="form-group rounded">
        <label for="exampleInputPassword1">Senha</label>
        <input type="password" class="form-control" id="newUserPassword" placeholder="Digite uma senha">
      </div>
      <button type="submit" class="btn btn-primary rounded  mb-4">Logar</button>
      <br>
      <a class="mt-5" href="./signin.php">Não possui uma conta ?</a>
    </form>
  </div>
</body>

</html>