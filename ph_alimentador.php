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
    <title>pH</title>
</head>

<body  style=' height: 1000px;background-color:#87CEEB;'>


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
                    labels: ['Horário', 'pH'],
                    datasets: [{
                        label: 'pH',
                        data: [<?php

                                include 'conexao_alimentador.php';
                                $sql = "SELECT * FROM parametros1";
                                $buscar = mysqli_query($conexao, $sql);

                                while ($dados = mysqli_fetch_array($buscar)) {
                                    $hora = $dados['data'];
                                    $temperatura = $dados['ph'];
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
        <h6 class="text-justify pt-3">O pH corresponde ao potencial hidrogeniônico de uma solução.
            Ele é determinado pela concentração de íons de hidrogênio (H+) e serve para medir o grau
            de acidez, neutralidade ou alcalinidade de determinada solução.</h6>
        <p class="text-justify">Por definição, água mineral é aquela proveniente de fontes naturais,
            que tem suas propriedades físicas ou físico-químicas distintas das águas comuns.
            ua pureza está no fato de ser insípida (não ter gosto), inodora (não ter cheiro) e
            incolor (não ter cor) sendo, portanto, recomendada para o consumo humano, uma vez
            que sua classificação e potabilidade estão em conformidade com as determinações de
            órgãos como o Ministério da Saúde, o Departamento Nacional de Produção Mineral (DNPM)
            e a Agência Nacional de Vigilância Sanitária (Anvisa).É importante ressaltar que
            “o pH (potencial hidrogeniônico) das águas minerais naturais não é um parâmetro
            que define sua caracterização ou potabilidade da água”, explica a
            Profa. Dra. Petra S. Sanchez, presidente do Comitê Científico da ABINAM
            (Associação Brasileira da Indústria de Água Mineral).Sobre os supostos benefícios
            do consumo de água com pH alcalino, Profa. Dra. Petra Sanchez declara que essas são
            informações desconexas “que carecem de fundamentação científica, e estão causando
            confusão ao consumidor. A acidez (ou alcalinidade das águas) para fins de consumo
            humano não representa risco à saúde pública; apenas provoca alteração quanto ao
            paladar”. O esclarecimento da ABINAM acontece em respostas às postagens feitas
            nas redes sociais, que sem qualquer base técnica indicam a água com pH alcalino
            como sendo uma fonte terapêutica e de promoção da saúde.</p>
    </div>
</body>

</html>