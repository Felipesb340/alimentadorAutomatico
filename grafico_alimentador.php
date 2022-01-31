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
  <title>Temperatura</title>
</head>

<body style= 'height: 1000px; background-color:#87CEEB;'>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="./home_alimentador.php">Fishmatic</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./home_alimentador.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./index_alimentador.php">Alimentador <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Padrões de água
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="./grafico_alimentador.php">Temperatura</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./condutividade_alimentador.php">Condutividade</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./ph_alimentador.php">Ph</a>
          </div>
        </li>
      </ul>
      
    </div>
  </nav>

  
  <div class="container bg-white">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <canvas id="myChart" style="height:600px"></canvas>
    <script>
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Horário', 'Temperatura'],
          datasets: [{
            label: 'Temperatura',
            data: [<?php

                    include 'conexao_alimentador.php';
                    $sql = "SELECT * FROM parametros1";
                    $buscar = mysqli_query($conexao, $sql);

                    while ($dados = mysqli_fetch_array($buscar)) {
                      $hora = $dados['data'];
                      $temperatura = $dados['temperatura'];
                    ?>['<?php echo $hora ?>', <?php echo $temperatura ?>],

              <?php } ?>
            ],
            fill: false,
            borderColor: [
              'rgb(75, 192, 192)',
            ],
            tension: 0.1
          }]
        },
        options: {

          scales: {
            y: {
              beginAtZero: true
            }
          },
          layout: {
            padding: 50
          }

        }
      });
    </script>
  </div>


  <div class="container" style="background-color:#87CEFA;">
    <h6 class="text-center pt-3">A teperatura é de suma importância par o bem-estar dos peixes !</h6>
    <p class=" container text-justify font-size ">A temperatura é simplesmente um indicador de quão quente é um objeto como resultado de seu conteúdo interno de energia (ou calor).
      É uma medida que o homem desenvolveu e usa para avaliar como as coisas são quentes. Um termômetro determina a variação da temperatura dentro do viveiro.
      A luz solar é composta de fótons (pequenas partículas) de energia. Quando a luz solar passa através da água, a energia da luz é transferida para as moléculas de água, aumentando o seu conteúdo de calor e fazendo com que a água aqueça e a temperatura aumente.
      Naturalmente, a energia também pode ser transferida para a água pelo contato com um objeto quente, porque a energia (calor) no objeto quente será transferida para a água mais fria por condução.
      A temperatura da água altera a velocidade dos fenômenos químicos e biológicos dentro do viveiro de criação as atividades fisiológicas dos peixes como respiração, digestão, reprodução e alimentação estão intimamente ligadas à temperatura da água.
      Os peixes ajustam sua temperatura corporal com a temperatura da água. Cada espécie tem uma temperatura ideal onde melhor se adapta e se desenvolve.
      Temperaturas acima ou abaixo deste ótimo reduzem seu crescimento e, em caso de temperaturas extremas, podem acontecer grandes mortalidades.
      A temperatura altera a velocidade das reações químicas elas dobram ou triplicam para cada 10ºC de aumento na temperatura.
      Com o aumento da temperatura os organismos aquáticos usarão 2 ou 3 vezes mais oxigênio dissolvido a 30ºC do que a 20ºC.
      Aumentando a temperatura os tratamentos químicos e os fertilizantes aplicados no viveiro dissolvem-se mais rapidamente, e a decomposição da matéria orgânica aumenta colaborando para o aumento do consumo de oxigênio.
      Peixes e camarões diminuem o consumo de ração com a diminuição da temperatura, o manejo correto é diminuir o arraçoamento para evitar o desperdício de alimento e o comprometimento da qualidade da água.
      A ingestão pode ser calculada com base na porcentagem de biomassa dos tanques-rede, do viveiro escavado e tanques de recirculação, que pode variar de 2 a 10%, conforme o tamanho, fase, espécie dos peixes e temperatura do período.
      Quando a temperatura se eleva, aumenta-se a oferta de ração, para não atrasar o crescimento dos animais, e também, no caso de espécies carnívoras, evitar o canibalismo.
      Abaixo tabela de frequência de arraçoamento para tilápia, conforme a variação por faixa da temperatura da água.
    </p>
  </div>
</body>

</html>