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

<body style='height: 1000px; background-color:#87CEEB;' >
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
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn my-2 my-sm-0" type="submit">Search</button>
      </form>
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
          labels: ['Horário', 'Condutividade'],
          datasets: [{
            label: 'Condutividade',
            data: [<?php

                    include 'conexao_alimentador.php';
                    $sql = "SELECT * FROM parametros1";
                    $buscar = mysqli_query($conexao, $sql);

                    while ($dados = mysqli_fetch_array($buscar)) {
                      $hora = $dados['data'];
                      $temperatura = $dados['condutividade'];
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

  <div class="container" style="height: 100%; background-color:#87CEFA;">
    <h6 class="text-justify pt-3">A capacidade da água de conduzir uma corrente elétrica é denominada condutividade</h6>
    <p class="text-justify "> e depende da concentração dos íons presentes na solução:
      cátions e ânions. Depende também da temperatura e por isso essas medidas devem estar sempre associadas. A unidade básica de medida da condutividade é mhos/m (antiga)
      ou Siemens/m, sendo comumente expressa nos seus sub-múltiplos (mS/cm, uS/cm, dS/m etc.).Esta unidade pode ser usada empiricamente para determinação de sólidos totais
      dissolvidos (total dissolved solids, TDS ) em mg/L. Para obtenção deste valor (TDS) deve-se multiplicar o valor encontrado em umhos/cm por um fator entre 0.55 e 0.9,
      dependendo da temperatura e do material constituinte da água analisada. Em águas onde predominam os íons cloreto (Cl-) e sódio (Na+), este fator está em torno de 0.67.
      Em águas com predominância de sulfatos (SO4-2), o fator deve ser mais elevado. A água destilada em laboratório serve como padrão e apresenta condutividade de 0.5 a 3.0 uS/cm.
      Cada corpo de água tende a ter um grau relativamente constante de condutividade que, uma vez estabelecido, pode ser usado para comparação com medidas regulares, do mesmo ponto,
      de condutividade. Mudanças significativas podem ser indicadores de que processos de poluição estão ocorrendo com a descarga de material na água.Um dos fatores que influencia a
      condutividade nos corpos de água é a formação geológica da área em questão. Altos índices de condutividade são ocasionados por meio de fontes não pontuais como efluentes de áreas
      residenciais/urbanas, águas de drenagem de sistemas de irrigação e escoamento superficial de áreas agrícolas,
      principalmente em regiões áridas e semi-áridas, onde a evapotranspiração excessiva causa o acúmulo de sais.. Efluentes industriais como fontes localizadas,
      também liberam altos teores de íons dissolvidos.As avaliações de condutividade também devem ser conduzidas nos locais próprios de amostragem e quando enviadas
      ao laboratório devem ser analisadas em 28 dias</p>
  </div>


</body>