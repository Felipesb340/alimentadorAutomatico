<?php

    include('conexao_alimentador.php');

    $sensor1 = $_GET['sensor1'];

    $sql = "INSERT INTO tbdados (sensor1) VALUES (:sensor1)";

    $stmt = $PDO->prepare($sql);

    $stmt->bindParam(':sensor1', $sensor1);

    if($stmt -> execute()) {
        echo "salvo_com_sucesso";
    } else {
        echo "erro_ao_salvar";
    }


?>