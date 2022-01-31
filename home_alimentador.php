<!DOCTYPE html>
<html lang="en">

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

  <title>FishMatic</title>
</head>

<body style='background-color:#87CEEB;'>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary d-flex ">
    <a class="navbar-brand " href="#">Fishmatic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mr-auto" id="navbarSupportedContent">
      <form class="form-inline my-2 my-lg-0">
        <a class="badge badge-success mr-2 p-2 " href="./signin.php">Criar Conta</a>
        <a class="badge badge-info mr-2 p-2 " href="./login.php">Log In</a>
      </form>
    </div>
  </nav>




  <div class="container bg-info">
    <div id="carouselExampleIndicators" class="carousel slide container " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block" style="max-height: 800px;" src="./images/arduinos.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Automação</h5>
            <p>Automatize seu aquário !</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100" style="max-height: 800px" src="./images/ph.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Monitoramento Remoto</h5>
            <p>Monitore a distância os paramêtros do seu aquário.</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100" style="max-height: 800px" src="./images/alimentar.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Alimento</h5>
            <p>Nunca mais se esqueça de alimentar seus peixes.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <h2 class="text-center pt-5">Sobre a empresa</h2>
    <h6 class="text-center pt-3">Somos uma empresa focada no desenvolvimento de novas tecnologias para a Aquicultura.</h6>
    <p>Na Fishmatic desenvolvemos alimnetadores automáticos para animais aquáticos, além de um avançado sistema de registro de comportamento alimentar
      que é muito utilizado para pesquisa. Também disponibilizamos para nossos clientes sondas que consegue aferir os paramêtros de água, enviando esses dados diretamente para o nosso site.
    </p>
  </div>



  <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>
  <script src="./app.js"></script>




</body>

</html>